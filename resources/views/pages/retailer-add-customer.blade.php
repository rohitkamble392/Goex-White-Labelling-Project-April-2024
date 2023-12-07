@extends('layouts.main') 
@section('title', 'Retailer Add Customer')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Customer')}}</h5>
                            <span>{{ __('Create New Customer')}}</span>
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
                                <a href="#">{{ __('Add Customer')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Add Customer')}}</h3></div>
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
                                    <textarea type="text" class="form-control" placeholder="Additional Comment"></textarea>
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
