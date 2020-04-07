<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\category;
use App\User;
use App\CampaignView;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

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
    public function getLocation(){
        $countries = array
        (
            'AF' => 'Afghanistan',
            'AX' => 'Aland Islands',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua And Barbuda',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia And Herzegovina',
            'BW' => 'Botswana',
            'BV' => 'Bouvet Island',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'BN' => 'Brunei Darussalam',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CG' => 'Congo',
            'CD' => 'Congo, Democratic Republic',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'CI' => 'Cote D\'Ivoire',
            'HR' => 'Croatia',
            'CU' => 'Cuba',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands (Malvinas)',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernsey',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HM' => 'Heard Island & Mcdonald Islands',
            'VA' => 'Holy See (Vatican City State)',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran, Islamic Republic Of',
            'IQ' => 'Iraq',
            'IE' => 'Ireland',
            'IM' => 'Isle Of Man',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JE' => 'Jersey',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'KR' => 'Korea',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Lao People\'s Democratic Republic',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libyan Arab Jamahiriya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macao',
            'MK' => 'Macedonia',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia, Federated States Of',
            'MD' => 'Moldova',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'AN' => 'Netherlands Antilles',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'NF' => 'Norfolk Island',
            'MP' => 'Northern Mariana Islands',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PW' => 'Palau',
            'PS' => 'Palestinian Territory, Occupied',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar',
            'RE' => 'Reunion',
            'RO' => 'Romania',
            'RU' => 'Russian Federation',
            'RW' => 'Rwanda',
            'BL' => 'Saint Barthelemy',
            'SH' => 'Saint Helena',
            'KN' => 'Saint Kitts And Nevis',
            'LC' => 'Saint Lucia',
            'MF' => 'Saint Martin',
            'PM' => 'Saint Pierre And Miquelon',
            'VC' => 'Saint Vincent And Grenadines',
            'WS' => 'Samoa',
            'SM' => 'San Marino',
            'ST' => 'Sao Tome And Principe',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SK' => 'Slovakia',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'GS' => 'South Georgia And Sandwich Isl.',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard And Jan Mayen',
            'SZ' => 'Swaziland',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syrian Arab Republic',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania',
            'TH' => 'Thailand',
            'TL' => 'Timor-Leste',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad And Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks And Caicos Islands',
            'TV' => 'Tuvalu',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'US' => 'United States',
            'UM' => 'United States Outlying Islands',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Viet Nam',
            'VG' => 'Virgin Islands, British',
            'VI' => 'Virgin Islands, U.S.',
            'WF' => 'Wallis And Futuna',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe',
        );
        $arr_ip= geoip()->getLocation(\Request::getClientIp());
        if(!array_search($arr_ip['country'], $countries)) return $arr_ip['country'];
        else  return [$arr_ip['country'],array_search ($arr_ip['country'], $countries)];
    }
    public function viewIndex(){
        $location=$this->getLocation();
        $trending = DB::table("campaign_views")
            ->select(
                DB::raw("DISTINCT(post_id),COUNT(*) as total_views"))
            ->groupBy('country')
            ->get();

        print_r($trending);
        foreach ($trending as $tren){
            echo $tren->country;
        }
        die;
        return view('index')->with(compact('location'));
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
    public function editCampaign(Request $request,$id=null){
        if ($request->isMethod('post')) {
            $data = $request->all();
            //Upload Image
            if ($request->hasFile('campaign_image')) {
                $image_tmp= Input::file('campaign_image');
                if($image_tmp->isValid()){
                    $campaign_image=Campaign::where(['id'=>$id])->first();
                    $image_path='images/campaign/';
                    if(file_exists($image_path.$campaign_image->image)){
                        unlink($image_path.$campaign_image->image);
                    }
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $image_path='images/campaign/'.$filename;
                    Image::make($image_tmp)->save($image_path);
                }
            }
            else{
                $filename=$data['current_image'];
            }

            Campaign::where(['id'=>$id])->update(['cover_photo_video'=>$filename]);
            return redirect('/fundraiser/campaign/viewCampaign')->with('flash_message_success','Campaign Updated');
        }
        $category=category::get();
        $campaignDetails=Campaign::where(['id'=>$id])->first();
        return view('fundraiser.campaign.editCampaign')->with(compact('campaignDetails','category'));

    }
    public function causesList()
    {
        $campaigns=DB::table('campaigns')->paginate(4);
        return view('causes_list')->with(compact('campaigns'));

    }
    public function search(Request $request){
        if ($request->isMethod('post')) {
            $data=$request->all();
            $searchTerm=$data['searchTerm'];
            $campaigns = campaign::query()->where('title', 'LIKE', "%{$searchTerm}%")
                ->orWhere('description', 'LIKE', "%{$searchTerm}%") ->get();
            return view('causes_list')->with(compact('campaigns'));
        }
    }
    public function causesListCategory($id=null)
    {

        $campaigns=Campaign::where(['category_id'=>$id])->get();
        return view('causes_list')->with(compact('campaigns'));

    }

    public function causesGridCategory($id=null)
    {

        $campaigns=Campaign::where(['category_id'=>$id])->get();
        return view('causes_grid')->with(compact('campaigns'));

    }
    public function causesGrid()
    {
        $campaigns=DB::table('campaigns')->paginate(4);
        return view('causes_grid')->with(compact('campaigns'));

    }
    public function viewCampaignViews(){
        $campaign_view=CampaignView::get();

        return view('admin.campaign.viewCampaignViews')->with(compact('campaign_view'));
    }
    public function causes($id=null){
        if(!empty($id)){
        $cause=campaign::where(['id'=>$id])->first();
        CampaignView::createViewLog($cause);
        $user_id=$cause->user_id;
        $user=User::Where(['id'=>$user_id])->First();
        $category=category::Where(['id'=>$cause->category_id])->First();
        return view('causes')->with(compact('cause','user','category'));
        }
    }
    public function viewCampaign(){
        $campaigns=campaign::get();
        $campaign_view=CampaignView::get();
        return view('admin.campaign.viewCampaign')->with(compact('campaigns'))->with(compact('campaign_view'));
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

    public function deleteGallery($id=null){
        if (!empty($id)) {
            $galleryImage=Gallery::where(['id'=>$id])->first();
            $image_path='images/backend_images/gallery/';
            if(file_exists($image_path.$galleryImage->image)){
                unlink($image_path.$galleryImage->image);
            }
            Gallery::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Gallery Deleted successfully');
        }

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
