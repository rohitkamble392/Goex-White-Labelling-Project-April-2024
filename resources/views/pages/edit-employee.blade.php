@extends('layouts.main') 
@section('title', 'Add Employee')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Employee')}}</h5>
                            <span>{{ __('Create new Employee')}}</span>
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
                                <a href="add-employee">{{ __('Add Employee')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Add Employee')}}</h3></div>
                    <div class="card-body">
                    <form class="forms-sample" method="POST" action="/employee/update" >
                        @csrf  
                        <input type="hidden" name="id" value="{{$employee->id}}">                          
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('Employee Name')}}<span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ clean($employee->name, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{ __('Employee Email')}}<span class="text-red">*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ clean($employee->email, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">{{ __('Employee Mobile')}}<span class="text-red">*</span></label>
                                        <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ clean($employee->mobile, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="device">{{ __('Employee Device')}}<span class="text-red">*</span></label>
                                        <input id="device" type="text" class="form-control @error('device') is-invalid @enderror" name="device" value="{{ clean($employee->device, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('device')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="imei1">{{ __('Employee IMEI 1')}}<span class="text-red">*</span></label>
                                        <input id="imei1" type="number" class="form-control @error('imei1') is-invalid @enderror" name="imei1" value="{{ clean($employee->imei1, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('imei1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="imei2">{{ __('Employee IMEI 2')}}<span class="text-red">*</span></label>
                                        <input id="imei2" type="number" class="form-control @error('imei2') is-invalid @enderror" name="imei2" value="{{ clean($employee->imei2, 'titles')}}">
                                        <div class="help-block with-errors"></div>

                                        @error('imei2')
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
