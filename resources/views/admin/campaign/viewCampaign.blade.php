@extends('layouts.backLayout.back_design')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Campaign Management</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Campaign</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Campaigns</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Fundraising Type</th>
                                            <th>Zip Code</th>
                                            <th>Goal Amount</th>
                                            <th>Raised Amount</th>
                                            <th>Category</th>
                                            <th>Posted By</th>
                                            <th>Cover Photo Video</th>
                                            <th>No. of Donors</th>
                                            <th>No. of Shares</th>
                                            <th>No. of Followers</th>
                                            <th>Created At</th>

                                            <th>Updated At</th>
                                            <th>Action</th>
                                            </thead>
                                            <tbody>

                                            @foreach($campaigns as $campaign)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$campaign->title}}</td>
                                                    <td>{{$campaign->description}}</td>
                                                    <td>{{$campaign->fundraising_type}}</td>
                                                    <td>{{$campaign->zip_code}}</td>
                                                    <td>{{$campaign->goal_amount}}{{$campaign->currency}}</td>
                                                    <td>{{$campaign->raised}}{{$campaign->currency}}</td>

                                                    <td>{{$campaign->category_id}}</td>
                                                    <td>{{$campaign->user_id}}</td>
                                                    <td>{{$campaign->cover_photo_video}}</td>
                                                    <td>{{$campaign->no_of_donors}}</td>
                                                    <td>{{$campaign->no_of_shares}}</td>
                                                    <td>{{$campaign->no_of_followers}}</td>
                                                    <td>{{$campaign->created_at}}</td>
                                                    <td>{{$campaign->updated_at}}</td>



                                                    <td><button class="btn-primary">Edit</button></td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection