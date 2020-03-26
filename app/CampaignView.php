<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignView extends Model
{
    public static function createViewLog($post) {
        $campaignViews= new CampaignView();
        if (CampaignView::where('session_id',\Request::getSession()->getId())->where('post_id',$post->id)->exists()){

        }
        else{
            $campaignViews->post_id = $post->id;
            $campaignViews->title = $post->title;
            $campaignViews->url = \Request::url();
            $campaignViews->session_id = \Request::getSession()->getId();
            $campaignViews->user_id = (\Auth::check())?\Auth::id():null; //this check will either put the user id or null, no need to use \Auth()->user()->id as we have an inbuild function to get auth id
            $campaignViews->ip = \Request::getClientIp();
            $arr_ip= geoip()->getLocation(\Request::getClientIp());
            $campaignViews->country=$arr_ip['country'];
            $campaignViews->city=$arr_ip['city'];
            $campaignViews->agent = \Request::header('User-Agent');
            $campaignViews->save();
        }
        //please note to save it at lease, very important
    }

}
