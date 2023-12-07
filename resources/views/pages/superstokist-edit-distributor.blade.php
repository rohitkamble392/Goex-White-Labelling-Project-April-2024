@extends('layouts.main') 
@section('title', 'Super Stokist Edit Distributor')
@section('content')

<div class="container-fluid">

<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit Distributor')}}</h5>
                            <span>{{ __('Edit Distributor')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('dashboard-superstokist')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="superstokist-add-distributor">{{ __('Add Distributor')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit Distributor')}}</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Distributor Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Distributor Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Distributor Mobile No">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Distributor Alternative Mobile No">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <textarea type="text" class="form-control" placeholder="Distributor Address"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Distributor Pin Code">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Distributor District">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Distributor State">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Distributor Aadhar Number" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Distributor PAN Number" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Distributor GST Number" readonly>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
@endsection
