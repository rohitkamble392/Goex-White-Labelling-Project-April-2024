@extends('layouts.main')
@section('title', 'Edit AMA Customer')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('Raise Ticket') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('superadmin-dashboard') }}"><i class="ik ik-home"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('create-customer') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12 mt-2">
                                    <label for="MobileNo">{{ __('Retailer Mobile No') }}<span
                                            class="text-red">*</span></label>
                                    <input type="text" id="MobileNo" name="MobileNo" class="form-control"
                                        placeholder="Enter Mobile Number" autocomplete="off">
                                </div>

                                <div class="card-header">
                                    <button type="button" class="btn btn-secondary"
                                        id="ajaxButton">{{ __('Submit') }}</button>
                                </div>

                                <div class="col-sm-12 col-md-12 mt-2">
                                    <label for="retailer_id">{{ __('Reason') }}<span class="text-red">*</span></label>
                                    <select name="reason" id="reason" class="form-control">
                                        @foreach ($ticketReason['Result'] as $reason)
                                            <option value="{{ $reason['ID'] }}">{{ $reason['TicketReason'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-12 col-md-12 mt-2">
                                    <label for="cmobile">{{ __('Customer Mobile') }}<span class="text-red">*</span></label>
                                    <input type="text" name="cmobile" id="cmobile" class="form-control"
                                        placeholder="Mobile">
                                </div>

                                <div class="card-header">
                                    <button type="button" class="btn btn-secondary"
                                        id="ajaxCustomerButton">{{ __('Submit') }}</button>
                                </div>

                                <div class="col-sm-12 col-md-12 mt-2">
                                    <label for="reason">{{ __('Comment') }}<span class="text-red">*</span></label>
                                    <textarea name="comment" id="comment" class="form-control" placeholder="Type reason here"></textarea>
                                </div>
                                {{-- <div class="col-sm-12 col-md-12 mt-2">
                                    <label for="retailer_id">{{ __('Transfer to') }}<span class="text-red">*</span></label>
                                    <select name="assignTO" id="assignTO" class="form-control select2">
                                        <option value="">Sagar</option>
                                    </select>
                                </div> --}}

                                <div class="card-header">
                                    <button type="submit" class="btn btn-secondary">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12 mt-2">
                                <label for="Shop_Name">{{ __('Shop name') }}<span class="text-red">*</span></label>
                                <p id="Shop_Name"></p>
                                <label for="Address">{{ __('Address') }}<span class="text-red">*</span></label>
                                <p id="Address"></p>
                            </div>
                            <div class="col-sm-6 col-md-6 mt-2">
                                <label for="mobile">{{ __('Mobile') }}<span class="text-red">*</span></label>
                                <p id="mobile"></p>
                            </div>
                            <div class="col-sm-6 col-md-6 mt-2">
                                <label for="Email">{{ __('E-mail') }}<span class="text-red">*</span></label>
                                <p id="Email"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12 mt-2">
                                <label for="customerName">{{ __('Customer Name') }}<span class="text-red">*</span></label>
                                <p id="customerName"></p>
                                <label for="customerAddress">{{ __('Address') }}<span class="text-red">*</span></label>
                                <p id="customerAddress"></p>
                            </div>
                            <div class="col-sm-6 col-md-6 mt-2">
                                <label for="retailer_id">{{ __('Mobile') }}<span class="text-red">*</span></label>
                                <p id="customerMobile"></p>
                            </div>
                            <div class="col-sm-6 col-md-6 mt-2">
                                <label for="customerEmail">{{ __('E-mail') }}<span class="text-red">*</span></label>
                                <p id="customerEmail"></p>
                            </div>
                            <div class="col-sm-12 col-md-12 mt-2">
                                <label for="retailer_id">{{ __('IMEI') }}<span class="text-red">*</span></label>
                                <p id="customerImei"></p>

                            </div>
                            <div class="col-sm-12 col-md-12 mt-2">
                                <label for="retailer_id">{{ __('Brand') }}<span class="text-red">*</span></label>
                                <p id="customerBrand"></p>

                            </div>
                            <div class="col-sm-12 col-md-12 mt-2">
                                <label for="retailer_id">{{ __('Model') }}<span class="text-red">*</span></label>
                                <p id="customerModel"></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
    </div>

    <script>
        $(document).ready(function() {
            function fetchData(searchValue) {
                $.ajax({
                    url: '/auto-search-retailer',
                    type: 'POST',
                    data: {
                        searchValue: searchValue,
                        userID: 0
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data.Result[0]);
                        $('#Shop_Name').text(data.Result[0].Shop_Name);
                        $('#Address').text(data.Result[0].Address);
                        $('#mobile').text(data.Result[0].MobileNo);
                        $('#Email').text(data.Result[0].Email);
                    },
                    error: function() {
                        console.log('Error in AJAX request');
                    }
                });
            }
            $('#ajaxButton').on('click', function() {
                var searchValue = $('#MobileNo').val();
                fetchData(searchValue);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            function fetchData(searchValue) {
                $.ajax({
                    url: '/auto-search-customer',
                    type: 'POST',
                    data: {
                        searchValue: searchValue,
                        userID: 0
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data.Result[0]);
                        $('#customerName').text(data.Result[0].Cust_Name);
                        $('#customerMobile').text(data.Result[0].Cust_MobileNo);
                        $('#customerEmail').text(data.Result[0].Cust_Email);
                        $('#customerImei').text(data.Result[0].IMENumber);
                        $('#customerBrand').text(data.Result[0].Brand);
                        $('#customerModel').text(data.Result[0].Model);
                    },
                    error: function() {
                        console.log('Error in AJAX request');
                    }
                });
            }
            $('#ajaxCustomerButton').on('click', function() {
                var searchValue = $('#cmobile').val();
                fetchData(searchValue);
            });
        });
    </script>

@endsection