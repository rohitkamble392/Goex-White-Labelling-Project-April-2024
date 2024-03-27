@extends('layouts.main') 
@section('title', 'Edit AMA Customer')
@section('content')


<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('AMA Customer')}}</h5>
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
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header"><h3>{{ __('Add Retailer')}}</h3></div> --}}
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('add-retailer') }}" >
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="name">{{ __('Customer Name')}}<span class="text-red">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
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
                                    <label for="mobile_number">{{ __('IMEI 1')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Enter IMEI 1">
                                </div>
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('IMEI 2')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Enter IMEI 2">
                                </div>
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('Serial Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Enter Serial Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('Model')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Enter Model">
                                </div>
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('Brand')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Enter Brand">
                                </div>
                                <div class="col-sm-4">
                                    <label for="upi_number">{{ __('Financier Name')}}<span class="text-red">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Finance Type</option>
                                        <option value="">BAJAJ FINANCE</option>
                                        <option value="">HOME CREDIT FINANCE</option>
                                        <option value="">IDFC FINANCE</option>
                                        <option value="">HDFC FINANCE</option>
                                        <option value="">KOTAK FINANCE</option>
                                        <option value="">PRIVATE FINANCE</option>
                                        <option value="">OTHER FINANCE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('EMI Amount')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Enter EMI Amount">
                                </div>
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('Device Price')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Enter Device Price">
                                </div>
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('Down Payment')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Enter Down Payment">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('EMI Tenure')}}<span class="text-red">*</span></label>
                                    <input type="number" name="mobile_number" class="form-control" placeholder="Enter EMI Amount">
                                </div>
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('EMI Date')}}<span class="text-red">*</span></label>
                                    <input type="date" name="mobile_number" class="form-control" placeholder="Enter Device Price">
                                </div>
                                <div class="col-sm-4">
                                    <label for="mobile_number">{{ __('Additional Comment')}}<span class="text-red">*</span></label>
                                    <textarea type="number" name="mobile_number" class="form-control" placeholder="Enter Down Payment"></textarea>
                                </div>
                            </div>
                            <div class="card-header"><button type="submit" class="btn btn-secondary">{{ __('Submit')}}</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    {{-- <div class="card-header"><h3>{{ __('Add Retailer')}}</h3></div> --}}
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('add-retailer') }}" >
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="upi_number">{{ __('Select Policy')}}<span class="text-red">*</span></label>
                                    <select name="policyname" id="policyname" class="form-control">
                                        {{-- @foreach($policyname['Result'] as policy)
                                            <option value="{{$policy['ID']}}">{{$policy['Policy_Name']}}</option>
                                        @endforeach --}}
                                        @foreach($policyname['Result'] as $policy)
                                        <option value="{{$policy['Policyid']}}">{{$policy['Policy_Name']}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <br>
                                    <label for="mobile_number">{{ __('Remark')}}<span class="text-red">*</span></label>
                                    <textarea type="number" name="mobile_number" class="form-control" placeholder="Enter Brand"></textarea>
                                </div>
                            </div>
                            <div class="card-header"><button type="submit" class="btn btn-secondary">{{ __('Submit')}}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>

<div class="container-fluid"></div>
@endsection
