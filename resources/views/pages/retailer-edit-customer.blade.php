@extends('layouts.main') 
@section('title', 'Retailer Edit Customer')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit Customer')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('dashboard-retailer')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Edit Customer')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit Customer')}}</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Customer Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Mobile No">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="IMEI 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="IMEI 2">
                                </div>
                                <div class="col-sm-6">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Finance</option>
                                        <option value="">Bajaj Finance</option>
                                        <option value="">Home Credit Finance</option>
                                        <option value="">IDFC Finance</option>
                                        <option value="">HDFC Finance</option>
                                        <option value="">Kotak Finance</option>
                                        <option value="">Private Finance</option>
                                        <option value="">Other Finance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Device Amount">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Processing Fees">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Down Payment">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="EMI Tenure">
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-6">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select EMI Type</option>
                                        <option value="">Monthly</option>
                                        <option value="">Weekly</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="EMI Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Additional Comment">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Customer Policy Details')}}</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Current Poliy" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Policy</option>
                                        <option value="">Hard Lock</option>
                                        <option value="">Soft Lock</option>
                                        <option value="">Unlock Device</option>
                                        <option value="">Unistall Device</option>
                                    </select>
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
