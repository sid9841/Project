<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function addCampaign(Request $request){
        if ($request->isMethod('post')) {
            $data=$request->all();
            $campaign = new campaign();

            $campaign->title=$data['title'];
            $campaign->description=$data['description'];
            $campaign->fundraising_type=$data['fundraising_type'];
            $campaign->zip_code=$data['zip_code'];
            $campaign->goal_amount=$data['goal_amount'];
            $campaign->currency=$data['currency'];
            $campaign->category_id=$data['category_id'];

            $campaign->no_of_donors=0;
            $campaign->raised=0;
            $campaign->no_of_shares=0;
            $campaign->no_of_followers=0;
            $user = auth()->user();
            $campaign->user_id=$user->id;
            if ($request->hasFile('campaign_image')) {
                $image_tmp= Input::file('campaign_image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $image_path='images/campaign/'.$filename;
                    //Resize Images
                    Image::make($image_tmp)->resize(640,425)->save($image_path);
                    $campaign->image=$filename;
                }
            }
            $campaign->save();
            return redirect('/fundraiser/viewCampaign')->with('flash_message_success','Campaign Has been added successfully');

        }
        $category=category::get();
        return view('fundraiser.campaign.addCampaign')->with(compact('category'));
    }
    public function causes($id=null){
        if(!empty($id)){
        $cause=campaign::where(['id'=>$id])->first();
        $user_id=$cause->user_id;
        $user=User::Where(['id'=>$user_id])->First();
        $category=category::Where(['id'=>$cause->category_id])->First();
        return view('causes')->with(compact('cause','user','category'));
        }
    }
    public function viewCampaign(){
        $campaign=campaign::get();
        $count=campaign::count();
        return view('fundraiser.campaign.viewCampaign')->with(compact('campaign'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
