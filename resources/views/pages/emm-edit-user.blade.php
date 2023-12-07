@extends('layouts.main') 
@section('title', 'Edit EMM User')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit User')}}</h5>
                            <span>{{ __('Edit User, Apply Policies')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('dashboard-distributor')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="distributor-add-retailer">{{ __('Add User')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit User')}}</h3></div>
                    <div class="card-body">
                    <form class="forms-sample" method="POST" action="/company/update">   
                            @csrf   
                            <input type="hidden" name="id" value="{{$user->id}}"> 
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label for="name">Company Name<span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ clean($user->name, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                        <label for="description">Company Description<span class="text-red">*</span></label>
                                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ clean($user->description, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                        <label for="email">Company Email<span class="text-red">*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ clean($user->email, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                        <label for="password">Company Password<span class="text-red">*</span></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                        <label for="mobile">Company Mobile<span class="text-red">*</span></label>
                                        <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ clean($user->mobile, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                        <label for="gst">Company GST<span class="text-red">*</span></label>
                                        <input id="gst" type="text" class="form-control @error('gst') is-invalid @enderror" name="gst" value="{{ clean($user->gst, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                        <label for="address">Company Address<span class="text-red">*</span></label>
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ clean($user->address, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pincode">Company PIN Code<span class="text-red">*</span></label>
                                        <input id="pincode" type="number" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ clean($user->pincode, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="state">Company State<span class="text-red">*</span></label>
                                        <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ clean($user->state, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="district">Company District<span class="text-red">*</span></label>
                                        <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ clean($user->district, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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
