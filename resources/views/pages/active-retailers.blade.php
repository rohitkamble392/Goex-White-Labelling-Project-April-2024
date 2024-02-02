@extends('layouts.main') 
@section('title', 'Active Retailers')
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
                            <h5>{{ __('Active Retailers')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('superadmin-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            {{-- <li class="breadcrumb-item">
                                <a href="add-retailer">{{ __('Add Retailer')}}</a>
                            </li> --}}
                        </ol>
                    </nav>
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
                                    <th>{{ __('Retailer ID')}}</th>
                                    <th>{{ __('Details')}}</th>
                                    <th>{{ __('Contact')}}</th>
                                    <th>{{ __('Address')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>
                                            <p><b>Code : </b>{{ __('MH2467')}}</p>
                                            <p><b>Name : </b>{{ __('Sample Shop')}}</p>
                                            <p><b>Contact : </b>{{ __('Sample')}}</p>
                                            <p><b>Display No : </b>{{ __('7654321876')}}</p>
                                            <p><b>Display Name : </b>{{ __('Sample')}}</p>
                                            <p><b>Payment No : </b>{{ __('12345')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Email ID : </b>{{ __('sample@gmail.com')}}</p>
                                            <p><b>Phone : </b>{{ __('1234512345')}}</p>
                                            <p><b>GST No : </b>{{ __('MHRE43434')}}</p>
                                            <p><b>Aadhaar No : </b>{{ __('123876123765')}}</p>
                                            <p><b>PAN Name : </b>{{ __('MFDF34344')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Address : </b>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, officia.')}}</p>
                                            <p><b>Pincode : </b>{{ __('654123')}}</p>
                                            <p><b>Location : </b>{{ __('Sample[MH]')}}</p>
                                            <p><b>State : </b>{{ __('Sample')}}</p>
                                            <p><b>ZeroTouch : </b>{{ __('No')}}</p>
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
                                        <td>{{ __('102')}}</td>
                                        <td>
                                            <p><b>Code : </b>{{ __('MH2467')}}</p>
                                            <p><b>Name : </b>{{ __('Sample Shop')}}</p>
                                            <p><b>Contact : </b>{{ __('Sample')}}</p>
                                            <p><b>Display No : </b>{{ __('7654321876')}}</p>
                                            <p><b>Display Name : </b>{{ __('Sample')}}</p>
                                            <p><b>Payment No : </b>{{ __('12345')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Email ID : </b>{{ __('sample@gmail.com')}}</p>
                                            <p><b>Phone : </b>{{ __('1234512345')}}</p>
                                            <p><b>GST No : </b>{{ __('MHRE43434')}}</p>
                                            <p><b>Aadhaar No : </b>{{ __('123876123765')}}</p>
                                            <p><b>PAN Name : </b>{{ __('MFDF34344')}}</p>
                                        </td>
                                        <td>
                                            <p><b>Address : </b>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, officia.')}}</p>
                                            <p><b>Pincode : </b>{{ __('654123')}}</p>
                                            <p><b>Location : </b>{{ __('Sample[MH]')}}</p>
                                            <p><b>State : </b>{{ __('Sample')}}</p>
                                            <p><b>ZeroTouch : </b>{{ __('No')}}</p>
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