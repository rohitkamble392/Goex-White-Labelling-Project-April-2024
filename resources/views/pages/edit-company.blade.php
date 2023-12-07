@extends('layouts.main') 
@section('title', 'Edit Company')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Company')}}</h5>
                            <span>{{ __('Create new Company')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('emm-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="add-company">{{ __('Add Company')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Add Company')}}</h3></div>
                    <div class="card-body">
                    <!-- <form class="forms-sample" method="POST" action="/inventory/products"> -->
                    <form class="forms-sample" method="POST" action="/company/update" >
                        @csrf  
                                                 
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('Name')}}<span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ clean($company->name, 'titles')}}" readonly>
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">{{ __('Description')}}<span class="text-red">*</span></label>
                                        <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ clean($company->description, 'titles')}}"></textarea>
                                        <div class="help-block with-errors"></div>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{ __('Email')}}<span class="text-red">*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ clean($company->email, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">{{ __('Password')}}<span class="text-red">*</span></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ clean($company->password, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">{{ __('Mobile')}}<span class="text-red">*</span></label>
                                        <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ clean($company->mobile, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="gst">{{ __('GST')}}<span class="text-red">*</span></label>
                                        <input id="gst" type="text" class="form-control @error('gst') is-invalid @enderror" name="gst" value="{{ clean($company->gst, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('gst')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="address">{{ __('Address')}}<span class="text-red">*</span></label>
                                        <textarea id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ clean($company->address, 'titles')}}"></textarea>
                                        <div class="help-block with-errors"></div>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pin">{{ __('PIN Code')}}<span class="text-red">*</span></label>
                                        <input id="pin" type="number" class="form-control @error('pin') is-invalid @enderror" name="pin" value="{{ clean($company->pin, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('pin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="state">{{ __('State')}}<span class="text-red">*</span></label>
                                        <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ clean($company->state, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="district">{{ __('District')}}<span class="text-red">*</span></label>
                                        <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ clean($company->district, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('district')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
