<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;
class DonationController extends Controller
{
    public function addDonation(Request $request){
        if ($request->isMethod('post')) {
            $data=$request->all();
            $donation = new donation();
            $donation->user_id=Auth::user()->id;
            $donation->campaign_id=$data['campaign_id'];
            $donation->amount=$data['amount'];
            $donation->payment_method=$data['payment_method'];
            $donation->save();
            return redirect('/admin/viewCategory')->with('flash_message_success','Category Has been added successfully');

        }
        return view('');
    }
}
