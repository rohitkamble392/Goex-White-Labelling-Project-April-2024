@extends('layouts.main') 
@section('title', 'AMA Devices')
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
                <div class="col-lg-3">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('AMA Devices')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="gst">{{ __('From Date')}}<span class="text-red">*</span></label>
                    <input type="date" name="gst" class="form-control" placeholder="Upload GST">
                </div>
                <div class="col-lg-3">
                    <label for="gst">{{ __('To Date')}}<span class="text-red">*</span></label>
                    <input type="date" name="gst" class="form-control" placeholder="Upload GST">
                </div>
                <div class="col-lg-3">
                     <button class="btn btn-danger">Reset</button>
                     <button class="btn btn-success">Sync Device</button>
                </div>
            </div>
        </div>
    	<div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap table-responsive">
                                <thead>
                                <tr>
                                    <th>{{ __('Device')}}</th>
                                    <th>{{ __('Details')}}</th>
                                    <th>{{ __('Sim Details')}}</th>
                                    <th>{{ __('Sync Time')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><b>{{ __('LC02ewrfes22')}}</b></p>
                                            <p><b>{{ __('324ffdsgdfh4w4')}}</b></p>
                                            <p><b>Pol : </b>{{ __('enterprises/LC02ewrfes22/policies/lockdevice')}}</p>
                                            <p><b>State : </b>{{ __('LC02ewrfes22')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Serial : </b>{{ __('43fdsfdsr4w')}}</p>
                                            <p><b>IMEI : </b>{{ __('123987345678234')}}</p>
                                            <p><b>Model : </b>{{ __('3213EFERF34')}}</p>
                                            <p><b>MFG : </b>{{ __('Xiomi')}}</p>
                                            <p><b>Brand : </b>{{ __('Redmi')}}</p>
                                        </td>
                                        <td>
                                            <p><b>SIM 1 No : </b>{{ __('8712344556')}}</p>
                                            <p><b>SIM 2 No : </b>{{ __('8712344556')}}</p>
                                            <p><b>SIM 1 Carrier : </b>{{ __('null')}}</p>
                                            <p><b>SIM 2 Carrier : </b>{{ __('null')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Created On : </b>{{ __('Jan 2 2024 6:29 PM')}}</p>
                                            <p><b>Enrollment On : </b>{{ __('Jan 2 2024 12:44 PM')}}</p>
                                            <p><b>PolicySync : </b>{{ __('34243243')}}</p>
                                            <p><b>StatusReport : </b>{{ __('Jan 2 2024 12:44 PM')}}</p>
                                            <p><b>Brand : </b>{{ __('Redmi')}}</p>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="edit-retailer"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>{{ __('LC02ewrfes22')}}</b></p>
                                            <p><b>{{ __('324ffdsgdfh4w4')}}</b></p>
                                            <p><b>Pol : </b>{{ __('enterprises/LC02ewrfes22/policies/lockdevice')}}</p>
                                            <p><b>State : </b>{{ __('LC02ewrfes22')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Serial : </b>{{ __('43fdsfdsr4w')}}</p>
                                            <p><b>IMEI : </b>{{ __('123987345678234')}}</p>
                                            <p><b>Model : </b>{{ __('3213EFERF34')}}</p>
                                            <p><b>MFG : </b>{{ __('Xiomi')}}</p>
                                            <p><b>Brand : </b>{{ __('Redmi')}}</p>
                                        </td>
                                        <td>
                                            <p><b>SIM 1 No : </b>{{ __('8712344556')}}</p>
                                            <p><b>SIM 2 No : </b>{{ __('8712344556')}}</p>
                                            <p><b>SIM 1 Carrier : </b>{{ __('null')}}</p>
                                            <p><b>SIM 2 Carrier : </b>{{ __('null')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Created On : </b>{{ __('Jan 2 2024 6:29 PM')}}</p>
                                            <p><b>Enrollment On : </b>{{ __('Jan 2 2024 12:44 PM')}}</p>
                                            <p><b>PolicySync : </b>{{ __('34243243')}}</p>
                                            <p><b>StatusReport : </b>{{ __('Jan 2 2024 12:44 PM')}}</p>
                                            <p><b>Brand : </b>{{ __('Redmi')}}</p>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="edit-retailer"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
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