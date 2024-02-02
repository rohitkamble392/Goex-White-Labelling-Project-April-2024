@extends('layouts.main') 
@section('title', 'Return Keys')
@section('content')


<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('Return Keys')}}</h5>
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
                                    <label for="policy_count">{{ __('ID')}}<span class="text-red">*</span></label>
                                    <input type="number" name="policy_count" class="form-control" placeholder="Enter Number of Policy">
                                </div>
                                <div class="col-sm-4">
                                    <label for="policy_count">{{ __('Name')}}<span class="text-red">*</span></label>
                                    <input type="number" name="policy_count" class="form-control" placeholder="Enter Number of Policy">
                                </div>
                                <div class="col-sm-4">
                                    <label for="policy_count">{{ __('Mobile')}}<span class="text-red">*</span></label>
                                    <input type="number" name="policy_count" class="form-control" placeholder="Enter Number of Policy">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="policy_count">{{ __('Email')}}<span class="text-red">*</span></label>
                                    <input type="number" name="policy_count" class="form-control" placeholder="Enter Number of Policy">
                                </div>
                                <div class="col-sm-4">
                                    <label for="role">{{ __('User Type')}}<span class="text-red">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="">Super Admin</option>
                                        <option value="">Sub Admin</option>
                                        <option value="">Company</option>
                                        <option value="">Super Stokist</option>
                                        <option value="">Distributor</option>
                                        <option value="">Employee</option>
                                        <option value="">Retailer</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="policy_count">{{ __('Number of Keys')}}<span class="text-red">*</span></label>
                                    <input type="number" name="policy_count" class="form-control" placeholder="Enter Number of Policy">
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="role">{{ __('Type of Key')}}<span class="text-red">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="">Smart Key</option>
                                        <option value="">Regular Key</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="policy_count">{{ __('Per Key Rate')}}<span class="text-red">*</span></label>
                                    <input type="number" name="policy_count" class="form-control" placeholder="Enter Number of Policy">
                                </div>
                                <div class="col-sm-4">
                                    <label for="per_policy_rate">{{ __('Total Amount')}}<span class="text-red">*</span></label>
                                    <input type="number" name="per_policy_rate" class="form-control" placeholder="Enter Per Policy Rate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="expiry_duration">{{ __('Expiry Duration')}}<span class="text-red">*</span></label>
                                    <input type="number" name="expiry_duration" class="form-control" placeholder="Enter Expiry Duration">
                                </div>
                                <div class="col-sm-4">
                                    <label for="expiry_duration">{{ __('Used Keys')}}<span class="text-red">*</span></label>
                                    <input type="number" name="expiry_duration" class="form-control" placeholder="Enter Expiry Duration">
                                </div>
                                <div class="col-sm-4">
                                    <label for="email">{{ __('Remaining Keys')}}<span class="text-red">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="expiry_duration">{{ __('Paid Amount')}}<span class="text-red">*</span></label>
                                    <input type="number" name="expiry_duration" class="form-control" placeholder="Enter Expiry Duration">
                                </div>
                                <div class="col-sm-4">
                                    <label for="expiry_duration">{{ __('Remaining Amount')}}<span class="text-red">*</span></label>
                                    <input type="number" name="expiry_duration" class="form-control" placeholder="Enter Expiry Duration">
                                </div>
                                <div class="col-sm-4">
                                    <label for="policy_count">{{ __('Return Key Reason')}}<span class="text-red">*</span></label>
                                    <textarea type="number" name="policy_count" class="form-control" placeholder="Enter Number of Policy"></textarea>
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
