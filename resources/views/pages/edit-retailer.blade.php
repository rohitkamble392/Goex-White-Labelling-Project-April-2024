@extends('layouts.main') 
@section('title', 'Edit Retailer')
@section('content')


<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit Retailer')}}</h5>
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
                    {{-- <div class="card-header"><h3>{{ __('Add Retailer')}}</h3></div> --}}
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('add-retailer') }}" >
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="shop_name">{{ __('Shop Name')}}<span class="text-red">*</span></label>
                                    <input type="text" name="shop_name" class="form-control" placeholder="Shop Name">
                                </div>
                                <div class="col-sm-4">
                                    <label for="contact_person_name">{{ __('Contact Person Name')}}<span class="text-red">*</span></label>
                                    <input type="text" name="contact_person_name"  class="form-control" placeholder="Contact Person Name">
                                </div>
                                <div class="col-sm-4">
                                    <label for="address">{{ __('Address')}}<span class="text-red">*</span></label>
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="pincode">{{ __('Pincode')}}<span class="text-red">*</span></label>
                                    <input type="number" name="pincode" class="form-control" placeholder="Pincode">
                                </div>
                                <div class="col-sm-4">
                                    <label for="location">{{ __('Location')}}<span class="text-red">*</span></label>
                                    <input type="text" name="location" class="form-control" placeholder="Location">
                                </div>
                                <div class="col-sm-4">
                                    <label for="state">{{ __('State')}}<span class="text-red">*</span></label>
                                    <input type="text" name="state" class="form-control" placeholder="State">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="district">{{ __('District')}}<span class="text-red">*</span></label>
                                    <input type="text" name="district" class="form-control" placeholder="District">
                                </div>
                                <div class="col-sm-4">
                                    <label for="email">{{ __('Email')}}<span class="text-red">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('Mobile Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="password">{{ __('Password')}}<span class="text-red">*</span></label>
                                    {{-- <input type="password" name="password" class="form-control" placeholder="Enter Password"> --}}
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="gst">{{ __('GST Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="gst" class="form-control" placeholder="GST Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="aadhaar">{{ __('Aadhaar Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="aadhaar" class="form-control" placeholder="Aadhaar Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="pan">{{ __('PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="pan" class="form-control" placeholder="PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="contact_number">{{ __('Display Contact Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="contact_number" class="form-control" placeholder="Display Contact Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="contact_name">{{ __('Display Contact Name')}}<span class="text-red">*</span></label>
                                    <input type="text" name="contact_name" class="form-control" placeholder="Display Contact Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="payment_number">{{ __('Payment Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="payment_number" class="form-control" placeholder="Payment Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="upi_number">{{ __('UPI Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="upi_number" class="form-control" placeholder="UPI Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="upi_number">{{ __('Employee')}}<span class="text-red">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Policy Type</option>
                                        <option value="">Smart Policy</option>
                                        <option value="">Regular Policy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="is_zero_touch">{{ __('Is Zero Touch')}}<span class="text-red">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-header"><button type="submit" class="btn btn-secondary">{{ __('Submit')}}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid"></div>
@endsection
