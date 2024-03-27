@extends('layouts.main') 
@section('title', 'All Distributors')
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
                            <h5><b>{{ __('ALL DISTRIBUTORS')}}</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('superadmin-dashboard')}}"><i class="ik ik-home text-dark"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="add-distributor">{{ __('Add Distributor')}}</a>
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

                    @if(session('roleName')==1)
                    <div class="col-lg-3">
                        <label for="">{{ __('Select Company')}}<span class="text-red">*</span></label>
                        <select name="" class="form-control select2" style="font-size:15px;border-radius:10px;"
                            id="companyId"></select>
                    </div>
               @endif

                    @if(session('roleName')==1)
                        <div class="col-lg-3">
                            <label for="">{{ __('Select Super Stockist')}}<span class="text-red">*</span></label>
                            <select name="" class="form-control" style="font-size:15px;border-radius:10px;"
                            id="superStockistId"></select>
                        </div>
                    @endif
                    {{-- <div class="col-lg-3">
                        <label for="">{{ __('Select Super Stockist')}}<span class="text-red">*</span></label>
                        <select name=""  class="form-control" style="font-size:15px;border-radius:10px;">
                            <option value="">Select Super Stockist</option>
                            <option value="">Milind Bankar</option>
                            <option value="">Sagar Swami</option>
                            <option value="">Vinod Wadkar</option>
                        </select>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
                    {{-- <div class="card-header"><h3>{{ __('Data Table')}}</h3></div> --}}
                    <div class="card-body">
                        <table id="data_table" class="table table-striped table-hover">
                            <thead class="text-center bg-secondary">
                                <tr>
                                    <th class="text-white"><b>{{ __('ID')}}</b></th>
                                    <th class="text-white"><b>{{ __('User ID')}}</b></th>
                                    <th class="text-white"><b>{{ __('Name')}}</b></th>
                                    <th class="text-white"><b>{{ __('Mobile')}}</b></th>
                                    <th class="text-white"><b>{{ __('Email')}}</b></th>
                                    <th class="text-white"><b>{{ __('Address')}}</b></th>
                                    <th class="nosort text-white"><b>{{ __('Action')}}</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($distributorDetails['Result'] as $distributor)
                                <tr>
                                    <td class="text-center"><b>{{ $distributor['ID'] }}</b></td>
                                    <td class="text-center"><b>{{ $distributor['USerID'] }}</b></td>
                                    <td class="text-center">{{ $distributor['Name'] }}</td>
                                    <td class="text-center">{{ $distributor['MobileNo'] }}</td>
                                    <td class="text-center">{{ $distributor['Email'] }}</td>
                                    <td>{{ $distributor['Address'] }}</td>
                                    <td class="text-center">
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye text-dark"></i></a>
                                            <a href="edit-distributor/{{ $distributor['MobileNo'] }}"><i class="ik ik-edit-2 text-dark"></i></a>
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
            if (confirm("Are you sure you want to delete the distributor with User ID " + userId + "?")) {
            // User clicked OK, proceed with the deletion
        
            var requestData = {
                "userID": userId,
                "id": companyId,
                "statusId": statusId
            };
        
            // Make an AJAX call to the API
            $.ajax({
                url: '/delete-distributor/'+userId+'/'+userId, // Fix the URL to use companyId
                type: 'GET',
                contentType: 'application/json',
                success: function(response) {
                    // Handle success response
                    console.log('Distributor deleted successfully:', response);
                    // Remove the row from the table
                    row.remove();
                },
                error: function(error) {
                    // Handle error response
                    console.error('Error deleting company:', error);
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
    <script src="{{ asset('js/get-superstockist.js') }}"></script>
    <script src="{{ asset('js/get-company.js') }}"></script>

    <script>
        $(document).ready(function(){
            
            $('#superStockistId').change(function(){
                var superStockistId = $(this).val();
               
                // AJAX call
                $.ajax({
                    url: "{{ url('/get-distributor') }}/",
                    method: 'GET',
                    data: {
                        superStockistId: superStockistId
                },
                    success: function(response){
                        // Clear existing table rows
    
                        console.log(response);
                        $('#data_table tbody').empty();
                        // Populate table with fetched data
                        response.data.forEach(function(user){
                            $('#data_table tbody').append('<tr>' +
                                '<td>' + user.ID + '</td>' +
                                '<td>' + user.Name + '</td>' +
                                '<td>' + user.MobileNo + '</td>' +
                                '<td>' + user.Email + '</td>' +
                                '<td>' + user.Address + '</td>' +
                                '<td>' + 'Action Buttons here' + '</td>' +
                                '</tr>');
                        });
                    },
                    error: function(xhr, status, error){
                        // Handle errors
                        console.error(error);
                    }
                });
            });

            //second coede

            $('#companyId').change(function(){
                var companyId = $(this).val();
               
                // AJAX call
                $.ajax({
                    url: "{{ url('/get-superstockist') }}/",
                    method: 'GET',
                    data: {
                        companyId: companyId
                },
                    success: function(response){
                        $('#superStockistId').empty();
 
                            // Iterate over the data and append options
                            response.data.forEach(function(item) {
                                $('#superStockistId').append('<option value="' + item.ID + '">' + item.Name + '</option>');
                            });
                    },
                    error: function(xhr, status, error){
                        // Handle errors
                        console.error(error);
                    }
                });
            });
        });
    </script>

    @endpush
@endsection