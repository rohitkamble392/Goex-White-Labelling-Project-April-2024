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
                                <a href="{{url('retailer-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            {{-- <li class="breadcrumb-item">
                                <a href="add-customer">{{ __('Add Customer')}}</a>
                            </li> --}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm-3">
                    <label for="select-policy">{{ __('Select Policy')}}<span class="text-red">*</span></label>
                    <select name="" id="" class="form-control">
                        <option value="">Select Policy</option>
                        <option value="">default</option>
                        <option value="">hardlock</option>
                        <option value="">lockdevice</option>
                        <option value="">unistall</option>
                        <option value=""></option>
                    </select>
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
                     <button class="btn btn-success">
                        <a data-toggle="modal" data-target="#demoModal">QR</a>
                     </button>
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
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Device')}}</th>
                                    <th>{{ __('IMEI')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><b>{{ __('Infinity Mobile Shop')}}</b></p>
                                            <p><b>Name : </b>{{ __('Roshan Shinde')}}</p>
                                            <p><b>Mobile No : </b>{{ __('8712324565')}}</p>
                                            <p><b>Email ID : </b>{{ __('roshan@gmail.com')}}</p>
                                            <p><b>Policy : </b>{{ __('null')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Financiar : </b>{{ __('BAJAJ FINANCE')}}</p>
                                            <p><b>Device ID : </b>{{ __('34fsdfdsrwfsdfs')}}</p>
                                            <p><b>EMI Date : </b>{{ __('Jan 10 2023')}}</p>
                                        </td>
                                        <td>
                                            <p><b>IMEI 1 : </b>{{ __('8712344556')}}</p>
                                            <p><b>IMEI 2 : </b>{{ __('8712344556')}}</p>
                                            <p><b>Serial Number : </b>{{ __('573489573')}}</p>
                                            <p><b>SL : </b>{{ __('null')}}</p>
                                            <p><b>SIM 2 : </b>{{ __('null')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Model : </b>{{ __('Note 10 Pro')}}</p>
                                            <p><b>Brand : </b>{{ __('Redmi')}}</p>
                                            <p><b>CreatedOn : </b>{{ __('Jan 2 2024 6:29 PM')}}</p>
                                        </td>
                                        <td>
                                            <div class="table-actions text-center">
                                                <p class="bg-dark text-white p-1 rounded">Mapped </p>
                                            </div>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="edit-ama-customer"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>{{ __('Infinity Mobile Shop')}}</b></p>
                                            <p><b>Name : </b>{{ __('Roshan Shinde')}}</p>
                                            <p><b>Mobile No : </b>{{ __('8712324565')}}</p>
                                            <p><b>Email ID : </b>{{ __('roshan@gmail.com')}}</p>
                                            <p><b>Policy : </b>{{ __('null')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Financiar : </b>{{ __('BAJAJ FINANCE')}}</p>
                                            <p><b>Device ID : </b>{{ __('34fsdfdsrwfsdfs')}}</p>
                                            <p><b>EMI Date : </b>{{ __('Jan 10 2023')}}</p>
                                        </td>
                                        <td>
                                            <p><b>IMEI 1 : </b>{{ __('8712344556')}}</p>
                                            <p><b>IMEI 2 : </b>{{ __('8712344556')}}</p>
                                            <p><b>Serial Number : </b>{{ __('573489573')}}</p>
                                            <p><b>SL : </b>{{ __('null')}}</p>
                                            <p><b>SIM 2 : </b>{{ __('null')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Model : </b>{{ __('Note 10 Pro')}}</p>
                                            <p><b>Brand : </b>{{ __('Redmi')}}</p>
                                            <p><b>CreatedOn : </b>{{ __('Jan 2 2024 6:29 PM')}}</p>
                                        </td>
                                        <td>
                                            <div class="table-actions text-center">
                                                <p class="bg-dark text-white p-1 rounded">Zero Touch</p>
                                            </div>
                                            <div class="table-actions text-center">
                                                <p class="bg-dark text-white p-1 rounded">Mapped</p>
                                            </div>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="edit-ama-customer"><i class="ik ik-edit-2"></i></a>
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
        <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="https://admin.goelectronix.in/images/QR_AMA.png" alt="image not found">
                    </div>
                </div>
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