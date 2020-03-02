@extends('layouts.backLayout.back_design')
@section('content')
    <div class="content-wrapper" style="min-height: 1203.6px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Advanced Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Advanced Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Add Category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{url('/admin/addCategory/')}}" name="add_category" id="add_category" novalidate="novalidate">{{csrf_field()}}

                                <div class="control-group">
                                    <label class="control-label">Category Name</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="name">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Category Description</label>
                                    <div class="controls">
                                        <input type="text" name="description" id="description">
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <div class="form-actions">
                                        <input type="submit" value="Add Category" class="btn btn-success">
                                    </div>
                                </div>
                            </form>


                            <!-- /.col -->
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->


                </div>
                <!-- /.card -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection