@extends('layouts.main') 
@section('title', 'Edit Employee')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5><b>{{ __('Edit Employee')}}</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('superadmin-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header"><h3>{{ __('Add Employee')}}</h3></div> --}}
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('update-employee') }}" >
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="name">{{ __('Name')}}<span class="text-red">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{ $employee['Name'] }}">
                                    {{-- <input type="text" name="ID" id="ID" value="{{$employee['ID']}}"> --}}
                                </div>
                                <div class="col-sm-4">
                                    <label for="mobileNo">{{ __('Mobile Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobileNo" class="form-control" value="{{$employee['MobileNo']}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="email">{{ __('Email ID')}}<span class="text-red">*</span></label>
                                    <input type="email" name="email" class="form-control" value="{{$employee['Email']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="password">{{ __('Password')}}<span class="text-red">*</span></label>
                                    {{-- <input type="password" name="password" class="form-control" placeholder="Enter Password"> --}}
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="address">{{ __('Address')}}<span class="text-red">*</span></label>
                                    <textarea type="text" name="address" class="form-control">{{$employee['Address']}}</textarea>
                                </div>
                                <div class="col-sm-4">
                                    <label for="pincode">{{ __('PIN Code')}}<span class="text-red">*</span></label>
                                    <input type="number" name="pincode" class="form-control" value="{{$employee['USerID']}}">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="state">{{ __('State')}}<span class="text-red">*</span></label>
                                    <select name="state" id="state" class="form-control select2">
                                        <option value="1">Andhra Pradesh</option>
                                        <option value="2">Arunachal Pradesh</option>
                                        <option value="3">Assam</option>
                                        <option value="4">Bihar</option>
                                        <option value="5">Chhattisgarh</option>
                                        <option value="6">Goa</option>
                                        <option value="7">Gujarat</option>
                                        <option value="8">Haryana</option>
                                        <option value="9">Himachal Pradesh</option>
                                        <option value="10">Jharkhand</option>
                                        <option value="11">Karnataka</option>
                                        <option value="12">Kerala</option>
                                        <option value="13">Madhya Pradesh</option>
                                        <option value="14">Maharashtra</option>
                                        <option value="15">Manipur</option>
                                        <option value="16">Meghalaya</option>
                                        <option value="17">Mizoram</option>
                                        <option value="18">Nagaland</option>
                                        <option value="19">Odisha</option>
                                        <option value="20">Punjab</option>
                                        <option value="21">Rajasthan</option>
                                        <option value="22">Sikkim</option>
                                        <option value="23">Tamil Nadu</option>
                                        <option value="24">Telangana</option>
                                        <option value="25">Tripura</option>
                                        <option value="26">Uttar Pradesh</option>
                                        <option value="27">Uttarakhand</option>
                                        <option value="28">West Bengal</option>
                                        <option value="29">Andaman and Nicobar Islands</option>
                                        <option value="30">Chandigarh</option>
                                        <option value="31">Dadra and Nagar Haveli and Daman and Diu</option>
                                        <option value="32">Delhi</option>
                                        <option value="33">Ladakh</option>
                                        <option value="34">Lakshadweep</option>
                                        <option value="35">Puducherry</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="district">{{ __('District')}}<span class="text-red">*</span></label>
                                    <input type="text" name="district" class="form-control" value="{{$employee['District']}}">
                                </div>
                            </div> 
                            <div class="card-header"><button type="submit" class="btn btn-secondary">{{ __('Submit')}}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
@endsection
