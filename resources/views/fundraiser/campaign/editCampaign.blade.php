@extends('layouts.frontLayout.front_design')
@section('content')

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" style="background: url({{asset('images/bg/bg2.jpg')}});" >
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">Edit Campagin</h2>
                            <ol class="breadcrumb text-centera mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li class="active">Edit Campaign</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="divider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <div class="border-1px p-30 mb-0">
                            <h3 class="text-theme-colored mt-0 pt-5"> Edit Campaign</h3>
                            <hr>
                            <p></p>
                            <form id="edit-campaign" name="edit-campaign" action="{{url('/fundraiser/editCampaign/'.$campaignDetails->id)}}" method="post" enctype="multipart/form-data" novalidate="novalidate">{{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="title">Campaign Title <small>*</small></label>
                                            <input id="title" name="title" type="text" placeholder="Enter Campaign Title" value="{{$campaignDetails->title}}" required="" class="form-control" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="goal_amount">Goal Amount <small>*</small></label>
                                            <input id="goal_amount" name="goal_amount" value="{{$campaignDetails->goal_amount}}" class="form-control required " type="number" placeholder="0000" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="currency">Currency <small>*</small></label>
                                            <select id="currency" name="currency" class="form-control">
                                                <option value="{{$campaignDetails->currency}}" selected="selected" label="US dollar">USD</option>
                                                <option disabled>──────────</option>
                                                <option value="USD" selected="selected" label="US dollar">USD</option>
                                                <option value="EUR" label="Euro">EUR</option>
                                                <option value="JPY" label="Japanese yen">JPY</option>
                                                <option value="GBP" label="Pound sterling">GBP</option>
                                                <option disabled>──────────</option>
                                                <option value="AED" label="United Arab Emirates dirham">AED</option>
                                                <option value="AFN" label="Afghan afghani">AFN</option>
                                                <option value="ALL" label="Albanian lek">ALL</option>
                                                <option value="AMD" label="Armenian dram">AMD</option>
                                                <option value="ANG" label="Netherlands Antillean guilder">ANG</option>
                                                <option value="AOA" label="Angolan kwanza">AOA</option>
                                                <option value="ARS" label="Argentine peso">ARS</option>
                                                <option value="AUD" label="Australian dollar">AUD</option>
                                                <option value="AWG" label="Aruban florin">AWG</option>
                                                <option value="AZN" label="Azerbaijani manat">AZN</option>
                                                <option value="BAM" label="Bosnia and Herzegovina convertible mark">BAM</option>
                                                <option value="BBD" label="Barbadian dollar">BBD</option>
                                                <option value="BDT" label="Bangladeshi taka">BDT</option>
                                                <option value="BGN" label="Bulgarian lev">BGN</option>
                                                <option value="BHD" label="Bahraini dinar">BHD</option>
                                                <option value="BIF" label="Burundian franc">BIF</option>
                                                <option value="BMD" label="Bermudian dollar">BMD</option>
                                                <option value="BND" label="Brunei dollar">BND</option>
                                                <option value="BOB" label="Bolivian boliviano">BOB</option>
                                                <option value="BRL" label="Brazilian real">BRL</option>
                                                <option value="BSD" label="Bahamian dollar">BSD</option>
                                                <option value="BTN" label="Bhutanese ngultrum">BTN</option>
                                                <option value="BWP" label="Botswana pula">BWP</option>
                                                <option value="BYN" label="Belarusian ruble">BYN</option>
                                                <option value="BZD" label="Belize dollar">BZD</option>
                                                <option value="CAD" label="Canadian dollar">CAD</option>
                                                <option value="CDF" label="Congolese franc">CDF</option>
                                                <option value="CHF" label="Swiss franc">CHF</option>
                                                <option value="CLP" label="Chilean peso">CLP</option>
                                                <option value="CNY" label="Chinese yuan">CNY</option>
                                                <option value="COP" label="Colombian peso">COP</option>
                                                <option value="CRC" label="Costa Rican colón">CRC</option>
                                                <option value="CUC" label="Cuban convertible peso">CUC</option>
                                                <option value="CUP" label="Cuban peso">CUP</option>
                                                <option value="CVE" label="Cape Verdean escudo">CVE</option>
                                                <option value="CZK" label="Czech koruna">CZK</option>
                                                <option value="DJF" label="Djiboutian franc">DJF</option>
                                                <option value="DKK" label="Danish krone">DKK</option>
                                                <option value="DOP" label="Dominican peso">DOP</option>
                                                <option value="DZD" label="Algerian dinar">DZD</option>
                                                <option value="EGP" label="Egyptian pound">EGP</option>
                                                <option value="ERN" label="Eritrean nakfa">ERN</option>
                                                <option value="ETB" label="Ethiopian birr">ETB</option>
                                                <option value="EUR" label="EURO">EUR</option>
                                                <option value="FJD" label="Fijian dollar">FJD</option>
                                                <option value="FKP" label="Falkland Islands pound">FKP</option>
                                                <option value="GBP" label="British pound">GBP</option>
                                                <option value="GEL" label="Georgian lari">GEL</option>
                                                <option value="GGP" label="Guernsey pound">GGP</option>
                                                <option value="GHS" label="Ghanaian cedi">GHS</option>
                                                <option value="GIP" label="Gibraltar pound">GIP</option>
                                                <option value="GMD" label="Gambian dalasi">GMD</option>
                                                <option value="GNF" label="Guinean franc">GNF</option>
                                                <option value="GTQ" label="Guatemalan quetzal">GTQ</option>
                                                <option value="GYD" label="Guyanese dollar">GYD</option>
                                                <option value="HKD" label="Hong Kong dollar">HKD</option>
                                                <option value="HNL" label="Honduran lempira">HNL</option>
                                                <option value="HKD" label="Hong Kong dollar">HKD</option>
                                                <option value="HRK" label="Croatian kuna">HRK</option>
                                                <option value="HTG" label="Haitian gourde">HTG</option>
                                                <option value="HUF" label="Hungarian forint">HUF</option>
                                                <option value="IDR" label="Indonesian rupiah">IDR</option>
                                                <option value="ILS" label="Israeli new shekel">ILS</option>
                                                <option value="IMP" label="Manx pound">IMP</option>
                                                <option value="INR" label="Indian rupee">INR</option>
                                                <option value="IQD" label="Iraqi dinar">IQD</option>
                                                <option value="IRR" label="Iranian rial">IRR</option>
                                                <option value="ISK" label="Icelandic króna">ISK</option>
                                                <option value="JEP" label="Jersey pound">JEP</option>
                                                <option value="JMD" label="Jamaican dollar">JMD</option>
                                                <option value="JOD" label="Jordanian dinar">JOD</option>
                                                <option value="JPY" label="Japanese yen">JPY</option>
                                                <option value="KES" label="Kenyan shilling">KES</option>
                                                <option value="KGS" label="Kyrgyzstani som">KGS</option>
                                                <option value="KHR" label="Cambodian riel">KHR</option>
                                                <option value="KID" label="Kiribati dollar">KID</option>
                                                <option value="KMF" label="Comorian franc">KMF</option>
                                                <option value="KPW" label="North Korean won">KPW</option>
                                                <option value="KRW" label="South Korean won">KRW</option>
                                                <option value="KWD" label="Kuwaiti dinar">KWD</option>
                                                <option value="KYD" label="Cayman Islands dollar">KYD</option>
                                                <option value="KZT" label="Kazakhstani tenge">KZT</option>
                                                <option value="LAK" label="Lao kip">LAK</option>
                                                <option value="LBP" label="Lebanese pound">LBP</option>
                                                <option value="LKR" label="Sri Lankan rupee">LKR</option>
                                                <option value="LRD" label="Liberian dollar">LRD</option>
                                                <option value="LSL" label="Lesotho loti">LSL</option>
                                                <option value="LYD" label="Libyan dinar">LYD</option>
                                                <option value="MAD" label="Moroccan dirham">MAD</option>
                                                <option value="MDL" label="Moldovan leu">MDL</option>
                                                <option value="MGA" label="Malagasy ariary">MGA</option>
                                                <option value="MKD" label="Macedonian denar">MKD</option>
                                                <option value="MMK" label="Burmese kyat">MMK</option>
                                                <option value="MNT" label="Mongolian tögrög">MNT</option>
                                                <option value="MOP" label="Macanese pataca">MOP</option>
                                                <option value="MRU" label="Mauritanian ouguiya">MRU</option>
                                                <option value="MUR" label="Mauritian rupee">MUR</option>
                                                <option value="MVR" label="Maldivian rufiyaa">MVR</option>
                                                <option value="MWK" label="Malawian kwacha">MWK</option>
                                                <option value="MXN" label="Mexican peso">MXN</option>
                                                <option value="MYR" label="Malaysian ringgit">MYR</option>
                                                <option value="MZN" label="Mozambican metical">MZN</option>
                                                <option value="NAD" label="Namibian dollar">NAD</option>
                                                <option value="NGN" label="Nigerian naira">NGN</option>
                                                <option value="NIO" label="Nicaraguan córdoba">NIO</option>
                                                <option value="NOK" label="Norwegian krone">NOK</option>
                                                <option value="NPR" label="Nepalese rupee">NPR</option>
                                                <option value="NZD" label="New Zealand dollar">NZD</option>
                                                <option value="OMR" label="Omani rial">OMR</option>
                                                <option value="PAB" label="Panamanian balboa">PAB</option>
                                                <option value="PEN" label="Peruvian sol">PEN</option>
                                                <option value="PGK" label="Papua New Guinean kina">PGK</option>
                                                <option value="PHP" label="Philippine peso">PHP</option>
                                                <option value="PKR" label="Pakistani rupee">PKR</option>
                                                <option value="PLN" label="Polish złoty">PLN</option>
                                                <option value="PRB" label="Transnistrian ruble">PRB</option>
                                                <option value="PYG" label="Paraguayan guaraní">PYG</option>
                                                <option value="QAR" label="Qatari riyal">QAR</option>
                                                <option value="RON" label="Romanian leu">RON</option>
                                                <option value="RON" label="Romanian leu">RON</option>
                                                <option value="RSD" label="Serbian dinar">RSD</option>
                                                <option value="RUB" label="Russian ruble">RUB</option>
                                                <option value="RWF" label="Rwandan franc">RWF</option>
                                                <option value="SAR" label="Saudi riyal">SAR</option>
                                                <option value="SEK" label="Swedish krona">SEK</option>
                                                <option value="SGD" label="Singapore dollar">SGD</option>
                                                <option value="SHP" label="Saint Helena pound">SHP</option>
                                                <option value="SLL" label="Sierra Leonean leone">SLL</option>
                                                <option value="SLS" label="Somaliland shilling">SLS</option>
                                                <option value="SOS" label="Somali shilling">SOS</option>
                                                <option value="SRD" label="Surinamese dollar">SRD</option>
                                                <option value="SSP" label="South Sudanese pound">SSP</option>
                                                <option value="STN" label="São Tomé and Príncipe dobra">STN</option>
                                                <option value="SYP" label="Syrian pound">SYP</option>
                                                <option value="SZL" label="Swazi lilangeni">SZL</option>
                                                <option value="THB" label="Thai baht">THB</option>
                                                <option value="TJS" label="Tajikistani somoni">TJS</option>
                                                <option value="TMT" label="Turkmenistan manat">TMT</option>
                                                <option value="TND" label="Tunisian dinar">TND</option>
                                                <option value="TOP" label="Tongan paʻanga">TOP</option>
                                                <option value="TRY" label="Turkish lira">TRY</option>
                                                <option value="TTD" label="Trinidad and Tobago dollar">TTD</option>
                                                <option value="TVD" label="Tuvaluan dollar">TVD</option>
                                                <option value="TWD" label="New Taiwan dollar">TWD</option>
                                                <option value="TZS" label="Tanzanian shilling">TZS</option>
                                                <option value="UAH" label="Ukrainian hryvnia">UAH</option>
                                                <option value="UGX" label="Ugandan shilling">UGX</option>
                                                <option value="USD" label="United States dollar">USD</option>
                                                <option value="UYU" label="Uruguayan peso">UYU</option>
                                                <option value="UZS" label="Uzbekistani soʻm">UZS</option>
                                                <option value="VES" label="Venezuelan bolívar soberano">VES</option>
                                                <option value="VND" label="Vietnamese đồng">VND</option>
                                                <option value="VUV" label="Vanuatu vatu">VUV</option>
                                                <option value="WST" label="Samoan tālā">WST</option>
                                                <option value="XAF" label="Central African CFA franc">XAF</option>
                                                <option value="XCD" label="Eastern Caribbean dollar">XCD</option>
                                                <option value="XOF" label="West African CFA franc">XOF</option>
                                                <option value="XPF" label="CFP franc">XPF</option>
                                                <option value="ZAR" label="South African rand">ZAR</option>
                                                <option value="ZMW" label="Zambian kwacha">ZMW</option>
                                                <option value="ZWB" label="Zimbabwean bonds">ZWB</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="zip_code">Zip Code: <small>*</small></label>
                                           <input type="text" name="zip_code" value="{{$campaignDetails->zip_code}}" id="zip_code" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="fundraising_type">Fundraising Type <small>*</small></label>
                                            <select id="fundraising_type" name="fundraising_type" class="form-control required" aria-required="true">
                                                <option value="Select">Select</option>
                                                <option value="Individual">Individual</option>
                                                <option value="Team">Team</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category <small>*</small></label>
                                    <select class="form-control" name="category_id" id="category_id" aria-required="true">
                                        @foreach($category as $cat)
                                            @if($campaignDetails->category_id==$cat->id)
                                            <option value="{{$cat->id}}" selected="selected">{{$cat->name}}</option>
                                            @else
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description <small>*</small></label>
                                    <textarea id="description" name="description" class="form-control required" rows="5"  aria-required="true">{{$campaignDetails->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="campaign_image">Image Upload</label>
                                    <input id="campaign_image" name="campaign_image" class="file" type="file" multiple="" data-show-upload="false" data-show-caption="true">
                                    <small>Maximum upload file size: 12 MB</small>
                                    <input id="current_image" name="current_image" class="file" type="hidden" multiple="" data-show-upload="false" data-show-caption="true">
                                </div>
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                                </div>
                            </form>
                            <!-- Job Form Validation-->
                            <script type="text/javascript">
                                $("#job_apply_form").validate({
                                    submitHandler: function(form) {
                                        var form_btn = $(form).find('button[type="submit"]');
                                        var form_result_div = '#form-result';
                                        $(form_result_div).remove();
                                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                        var form_btn_old_msg = form_btn.html();
                                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                        $(form).ajaxSubmit({
                                            dataType:  'json',
                                            success: function(data) {
                                                if( data.status == 'true' ) {
                                                    $(form).find('.form-control').val('');
                                                }
                                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                $(form_result_div).html(data.message).fadeIn('slow');
                                                setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    {{--    <li class="dropdown">--}}
    {{--        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
    {{--            {{ Auth::user()->name }} <span class="caret"></span>--}}
    {{--        </a>--}}

    {{--        <ul class="dropdown-menu" role="menu">--}}
    {{--            <li>--}}
    {{--                <a href="{{ route('logout') }}"--}}
    {{--                   onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                    Logout--}}
    {{--                </a>--}}

    {{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--                    {{ csrf_field() }}--}}
    {{--                </form>--}}
    {{--            </li>--}}
    {{--        </ul>--}}
    {{--    </li>--}}




@endsection
