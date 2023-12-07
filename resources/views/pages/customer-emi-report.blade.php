@extends('layouts.main') 
@section('title', 'Customer EMI Report')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit Customer EMI Report')}}</h5>
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
                                <a href="#">{{ __('Edit Customer EMI Report')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit Customer EMI Report')}}</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Customer ID">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Customer Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Mobile No">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="IMEI 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="IMEI 2">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Device Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Down Payment">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="EMI Tenure">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <select name="" id="" class="form-control">
                                        <option value="">EMI Type</option>
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
                                    <input type="text" class="form-control" placeholder="Paid Amount">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Unpaid Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="Date" class="form-control" placeholder="Last Payment Date">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('Customers EMI Report')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap table-responsive text-center">
                                <thead>
                                <tr>
                                    <th>{{ __('Customer ID')}}</th>
                                    <th>{{ __('Device Amount')}}</th>
                                    <th>{{ __('Down Payment')}}</th>
                                    <th>{{ __('EMI Tenure')}}</th>
                                    <th>{{ __('EMI Type')}}</th>
                                    <th>{{ __('EMI Amount')}}</th>
                                    <th>{{ __('Paid Amount')}}</th>
                                    <th>{{ __('Unpaid Amount')}}</th>
                                    <th>{{ __('Last Payment Date')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>{{ __('20,000')}}</td>
                                        <td>{{ __('6,000')}}</td>
                                        <td>{{ __('7')}}</td>
                                        <td>{{ __('Monthly')}}</td>
                                        <td>{{ __('2,000')}}</td>
                                        <td>{{ __('6,000')}}</td>
                                        <td>{{ __('14,000')}}</td>
                                        <td>{{ __('12-10=2023')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('102')}}</td>
                                        <td>{{ __('20,000')}}</td>
                                        <td>{{ __('6,000')}}</td>
                                        <td>{{ __('7')}}</td>
                                        <td>{{ __('Monthly')}}</td>
                                        <td>{{ __('2,000')}}</td>
                                        <td>{{ __('6,000')}}</td>
                                        <td>{{ __('14,000')}}</td>
                                        <td>{{ __('12-11-2023')}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Language - Comma Decimal Place table end -->
            </div>
        </div>
    </div>

<div class="container-fluid">

    <!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('js/datatables.js') }}"></script>
    @endpush
@endsection
