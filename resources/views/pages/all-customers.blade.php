@extends('layouts.main') 
@section('title', 'All Customers')
@section('content')
    <!-- push external head elements to head -->
    @push('head')

        <link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
    @endpush


    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5><b>{{ __('ALL CUSTOMERS')}}</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item">
                                <a href="{{url('superadmin-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li> --}}
                        
                        <li class="breadcrumb-item">
                            <button class="btn btn-secondary">
                                <a href="add-customer" class="text-white">{{ __('Add Customer')}}</a>
                            </button>
                        </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-3">
                        <label for="">{{ __('From Date')}}<span class="text-red">*</span></label>
                        <input type="date" name="" id="" class="form-control" style="font-size:15px;border-radius:10px;">
                    </div>
                    <div class="col-lg-3">
                        <label for="">{{ __('To Date')}}<span class="text-red">*</span></label>
                        <input type="date" name="" id="" class="form-control" style="font-size:15px;border-radius:10px;">
                    </div>
                    {{-- <div class="col-lg-3">
                        <label for="">{{ __('Select Promoter')}}<span class="text-red">*</span></label>
                        <select name=""  class="form-control" style="font-size:15px;border-radius:10px;">
                            <option value="">Select Promoter</option>
                            <option value="">Milind Bankar</option>
                            <option value="">Sagar Swami</option>
                            <option value="">Vinod Wadkar</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="">{{ __('Search Here')}}<span class="text-red">*</span></label>
                        <input type="text" name="" id="" class="form-control" style="font-size:15px;border-radius:10px;">
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead class="text-center bg-secondary">
                                <tr>
                                    <th class="text-white"><b>{{ __('ID')}}</b></th>
                                    <th class="text-white"><b>{{ __('Customer Details')}}</b></th>
                                    <th class="text-white"><b>{{ __('Device Details')}}</b></th>
                                    <th class="text-white"><b>{{ __('Device Details')}}</b></th>
                                    <th class="text-white"><b>{{ __('Other Details')}}</b></th>
                                    <th class="text-white nosort"><b>{{ __('Action')}}</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customerDetails['Result'] as $customer)
                                <tr>
                                    <td class="text-center"><b>{{ $customer['CustID'] }}</b></td>
                                    <td>
                                        <p><b>Name : </b>{{ $customer['Cust_Name'] }}</p>
                                        <p><b>Mobile No : </b>{{ $customer['Cust_MobileNo'] }}</p>
                                        <p><b>Email ID : </b>{{ $customer['Cust_Email'] }}</p>
                                        <p><b>Policy : </b>{{ $customer['Policy_Type'] }}</p>
                                    </td>
                                    <td>
                                        <p><b>Brand : </b>{{ $customer['Brand'] }}</p>
                                        <p><b>Model : </b>{{ $customer['Model'] }}</p>
                                        <p><b>Device ID : </b>{{ $customer['Device_ID'] }}</p>
                                        <p><b>IMEI 1 : </b>{{ $customer['IMENumber'] }}</p>
                                    </td>
                                    <td>
                                        <p><b>IMEI 2 : </b>{{ $customer['IMENumber1'] }}</p>
                                        <p><b>Serial Number : </b>{{ $customer['Serial_No'] }}</p>
                                        <p><b>SL : </b>{{ $customer['Serial_No'] }}</p>
                                        <p><b>SIM 1 : </b></p>
                                    </td>
                                    <td>                                        
                                        <p><b>Financiar : </b>{{ $customer['Finaciar_id'] }}</p>
                                        <p><b>EMI Date : </b>{{ $customer['EMI_Date'] }}</p>
                                        {{-- <p><b>Created On : </b>{{ $customer['CreatedOn'] }}</p> --}}
                                        {{-- <p><b>Created On : </b>{{ $customer['CreatedOn'] }}</p> --}}
                                        <p><b>Created On : </b>{{ \Carbon\Carbon::parse($customer['CreatedOn'])->format('j F, Y g:i A') }}</p>
                                    </td>
                                    <td>
                                        <div class="table-actions text-center">
                                            <a href="#"><i class="ik ik-eye text-dark"></i></a>
                                            {{-- <a href="edit-retailer/{{ $promoter['MobileNo'] }}"><i class="ik ik-edit-2 text-dark"></i></a> --}}
                                            {{-- <a href="edit-customer/{{ $customer['cust_MobileNo'] }}"><i class="ik ik-edit-2"></i></a> --}}
                                            <a href="edit-customer/{{ $customer['Cust_MobileNo'] }}"><i class="ik ik-edit-2 text-dark"></i></a>
                                            <a href="#" class="deleteButton"><i class="ik ik-trash-2 text-dark"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
        $(".deleteButton").on("click", function() {
            var row = $(this).closest('tr');
            var userId = row.find('td:eq(0)').text();
            var companyId = row.find('td:eq(1)').text();
            var statusId = row.find('td:eq(2)').text();
            console.log(userId);
            console.log(companyId);
            // Show a confirmation dialog
            if (confirm("Are you sure you want to delete the customer with User ID " + userId + "?")) {
            // User clicked OK, proceed with the deletion
        
            var requestData = {
                "userID": userId,
                "id": companyId,
                "statusId": statusId
            };
        
            // Make an AJAX call to the API
            $.ajax({
                url: '/delete-customer/'+userId+'/'+userId, // Fix the URL to use companyId
                type: 'GET',
                contentType: 'application/json',
                success: function(response) {
                    // Handle success response
                    console.log('Customer deleted successfully:', response);
                    // Remove the row from the table
                    row.remove();
                },
                error: function(error) {
                    // Handle error response
                    console.error('Error deleting customer:', error);
                }
            });
            } else {
            // User clicked Cancel, do nothing
            console.log('Deletion canceled by user');
            }
        });
        });
        </script>

    	<!-- push external js -->
        @push('script')
        <script src="{{ asset('plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>

        <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>
       
        
        <script src="{{ asset('js/widget-statistic.js') }}"></script>
        <script src="{{ asset('js/widget-data.js') }}"></script>
        <script src="{{ asset('js/dashboard-charts.js') }}"></script>
    
    <!-- push external js -->
    <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    @endpush
@endsection