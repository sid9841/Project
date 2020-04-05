@extends('layouts.frontLayout.front_design')
@section('header')
    @include('layouts.frontLayout.front_header')
@endsection
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('images/bg/bg4.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <ol class="breadcrumb text-center mt-10 white">
                                <li><a href="#">Home</a></li>

                                <li class="active">Causes</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Partners & Donors -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <div class="upcoming-events media bg-light p-15 pb-60 mb-50 mb-sm-30">
                            <div class="col-sm-8">
                            <h2 class="media-heading text-uppercase font-weight-500">{{$cause->title}}</h2>
                            </div>
                            <div class="col-sm-4 text-right">
                                <i class="fa fa-tag"></i>{{$category->name}}
                                <br>Created At: {{($cause->created_at)->format('Y/m/d')}}
                            </div>
                            <div class="thumb">
                                <img class="img-fullwidth img-rounded" src="{{asset('images/campaign/'.$cause->cover_photo_video)}}">
                            </div>
                            <div class="col-md-12">

                               <div></div>


                            </div>


                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="mt-30">
                                        <p class="mb-20" style="font-size: 2em;text-align: justify;">{{$cause->description}}</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-sm-12 col-md-3" style="
  position: -webkit-sticky;
  position: sticky;
  top: 1rem;
  padding: 50px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

" >
                        <div class="sidebar sidebar-right mt-sm-30" >
                            <div class="widget">
                                <ul class="list-inline clearfix">
                                    <li class="pull-left pr-0">{{$cause->currency}} {{$cause->raised}} of {{$cause->currency}} {{$cause->goal_amount}}</li>

                                </ul>
                                <div class="progress-item mt-20 mb-30">
                                    <div class="progress mb-30">
                                        <div class="progress-bar" data-percent="{{round(($cause->raised/$cause->goal_amount)*100)}}"></div>
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <ul class="pull-left list-inline mt-20">
                                        <li class="pr-0">{{$cause->no_of_donors}}<br> Donors</li>
                                        <li class="pr-0">{{$cause->no_of_shares}}<br> Shares</li>
                                        <li class="pr-0">{{$cause->no_of_followers}}<br> Followers</li>
                                    </ul>

                                </div>
                                <button type="button" class="btn btn-dark btn-flat btn-lg  mt-15" style="width: 100%;" data-toggle="modal" data-target="#myModal">Donate With Esewa</button>
                                <button type="button" class="btn btn-dark btn-flat btn-lg  mt-15" style="width: 100%;" data-toggle="modal" data-target="#myModal1">Donate With Khalti</button>

                                <div class="mt-10">
                                    <div class="card" style="min-height: 0px;">
                                        <div class="card-header">
                                            Organizer:<br><small>{{$cause->fundraising_type}}</small>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{$user->name}}</h5>

                                            <button class="btn btn-primary" data-toggle="modal" data-target="#contact">Contact</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- Trigger the modal with a button -->




                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Modal -->
    <div id="contact" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{$user->name}}</h4>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <i class="fa fa-envelope"></i> {{$user->email}}<br>
                    <i class="fa fa-phone"></i>{{$user->contact_no}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Payment</h4>
                </div>
                <div class="modal-body">
                    <form id="esewa-payment" name="esewa-payment" action="{{$cause->id}}/esewa" method="post" enctype="multipart/form-data" >{{ csrf_field() }}

                        <p>Please add the desired AMOUNT</p>
                        <input type="text" name="amount" class="form-control" placeholder="AMOUNT">
                        <input type="submit" class="btn btn-dark btn-flat btn-lg  mt-15" style="width: 100%;" >Donate with Esewa</input>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Payment</h4>
                </div>
                <div class="modal-body">
                    <p>Please add the desired AMOUNT</p>
                    <input type="text" id="amt" name="amt" class="form-control" placeholder="AMOUNT">
                    <a href="#" class="btn btn-dark btn-flat btn-lg  mt-15" style="width: 100%;" id="payment-button">Donate with Khalti</a>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- end main-content -->
    <script>

        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");



        btn.onclick = function () {
            var amt = document.getElementById('amt').value*100;
            checkout.show({amount: amt});
            alert(amt);
        }
    </script>

@endsection