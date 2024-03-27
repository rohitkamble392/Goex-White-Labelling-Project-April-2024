@extends('layouts.main') 
@section('title', 'All Promoters')
@section('content')
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
                            <h5><b>{{ __('ALL PROMOTERS')}}</b></h5>
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
                                <a href="add-promoter">{{ __('Add Promoter')}}</a>
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
                    <div class="col-lg-3">
                        <label for="">{{ __('Select Retailer')}}<span class="text-red">*</span></label>
                        <select name=""  class="form-control" style="font-size:15px;border-radius:10px;">
                            <option value="">Select Retailer</option>
                            <option value="">Milind Bankar</option>
                            <option value="">Sagar Swami</option>
                            <option value="">Vinod Wadkar</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="">{{ __('Search Here')}}<span class="text-red">*</span></label>
                        <input type="text" name="" id="" class="form-control" style="font-size:15px;border-radius:10px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead class="bg-secondary">
                                <tr>
                                    <th class="text-white">{{ __('ID')}}</th>
                                    <th class="text-white">{{ __('Details')}}</th>
                                    <th class="text-white">{{ __('Address')}}</th>
                                    <th class="text-white">{{ __('Document')}}</th>
                                    <th class="nosort text-white">{{ __('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($promoterDetails['Result'] as $promoter)
                                <tr>
                                    <td class="text-center">
                                        <p><b>Promoter ID : </b>{{ $promoter['ID'] }}</p>
                                        <p><b>User ID : </b>{{ $promoter['USerID'] }}</p>
                                    </td>
                                    <td>
                                        <p><b>Shop Name : </b>{{ $promoter['Shop_Name'] }}</p>
                                        <p><b>Contact Person Name : </b>{{ $promoter['ContactPer_Name'] }}</p>
                                        <p><b>Mobile : </b>{{ $promoter['MobileNo'] }}</p>
                                        <p><b>Email : </b>{{ $promoter['Email'] }}</p>
                                    </td>
                                    <td>
                                        <p><b>Address : </b>{{ $promoter['Address'] }}</p>
                                        <p><b>PinCode : </b>{{ $promoter['Pincode'] }}</p>
                                        <p><b>State : </b>{{ $promoter['State_id'] }}</p>
                                        <p><b>District : </b>{{ $promoter['District'] }}</p>
                                    </td>
                                    <td>
                                        <p><b>GST No : </b>{{ $promoter['GST_No'] }}</p>
                                        <p><b>PAN No : </b>{{ $promoter['PAN_No'] }}</p>
                                        <p><b>Aadhar No : </b>{{ $promoter['Aadhar_No'] }}</p>
                                        <p><b>ZeroTouch : </b>{{ $promoter['Is_Zero'] }}</p>
                                        <p><b>Created On : </b>{{ \Carbon\Carbon::parse($promoter['CreatedOn'])->format('j F, Y g:i A') }}</p>
                                    </td>
                                    <td>
                                        <div class="table-actions text-center">
                                            <a href="#"><i class="ik ik-eye text-dark"></i></a>
                                            <a href="edit-retailer/{{ $promoter['MobileNo'] }}"><i class="ik ik-edit-2 text-dark"></i></a>
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
            if (confirm("Are you sure you want to delete the promoter with User ID " + userId + "?")) {
        
            var requestData = {
                "userID": userId,
                "id": companyId,
                "statusId": statusId
            };
        
            $.ajax({
                url: '/delete-promoter/'+userId+'/'+userId, 
                type: 'GET',
                contentType: 'application/json',
                success: function(response) {
                    console.log('Promoter deleted successfully:', response);
                    row.remove();
                },
                error: function(error) {
                    console.error('Error deleting promoter:', error);
                }
            });
            } else {

            console.log('Deletion canceled by user');
            }
        });
        });
        </script>

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
    
    <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    @endpush
@endsection
