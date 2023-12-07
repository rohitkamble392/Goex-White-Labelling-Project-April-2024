@extends('layouts.main') 
@section('title', 'Add Company')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Company')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('emm-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <!-- <form class="forms-sample" method="POST" action="/inventory/products"> -->
                    <form class="forms-sample" method="POST" action="{{ route('save-company') }}" >
                        @csrf                           
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name<span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control" name="name" value="" placeholder="Enter Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description<span class="text-red">*</span></label>
                                        <textarea id="description" type="text" class="form-control" name="description" value="" placeholder="Enter Description" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email<span class="text-red">*</span></label>
                                        <input id="email" type="email" class="form-control" name="email" value="" placeholder="Enter Email" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password<span class="text-red">*</span></label>
                                        <input id="password" type="password" class="form-control" name="password" value="" placeholder="Enter Password" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile<span class="text-red">*</span></label>
                                        <input id="mobile" type="number" class="form-control" name="mobile" value="" placeholder="Enter Mobile No." required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gst">GST No<span class="text-red">*</span></label>
                                        <input id="gst" type="text" class="form-control" name="gst" value="" placeholder="Enter GST No." required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="address">Address<span class="text-red">*</span></label>
                                        <textarea id="address" type="text" class="form-control" name="address" value="" placeholder="Enter Address" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                <div class="form-group">
                                        <label for="pin">PIN Code<span class="text-red">*</span></label>
                                        <input id="pin" type="number" class="form-control" name="pin" value="" placeholder="Enter PIN Code" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State<span class="text-red">*</span></label>
                                        <input id="state" type="text" class="form-control" name="state" value="" placeholder="Enter State" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="district">District<span class="text-red">*</span></label>
                                        <input id="district" type="text" class="form-control" name="district" value="" placeholder="Enter District" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Company Logo</label>
                                        <div class="input-images" data-input-name="company-logo" data-label="Drag & Drop Company Logo here or click to browse"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                            <img id="my-image" src="/img/test14.png" class="img-fluid" alt=""  style="display: none;">
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
@endsection
