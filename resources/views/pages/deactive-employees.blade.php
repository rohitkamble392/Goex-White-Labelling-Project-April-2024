@extends('layouts.main') 
@section('title', 'Deactive Employees')
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
                            <h5>{{ __('Deactive Employees')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('dashboard-company')}}"><i class="ik ik-home"></i></a>
                            </li>
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
                                       class="table table-striped table-bordered nowrap table-responsive text-center">
                                    <thead>
                                    <tr>
                                        <th>{{ __('Employee ID')}}</th>
                                        <th>{{ __('Employee Name')}}</th>
                                        <th>{{ __('Shop Name')}}</th>
                                        <th>{{ __('Mobile No')}}</th>
                                        <th>{{ __('Email')}}</th>
                                        <th>{{ __('Address')}}</th>
                                        <th>{{ __('Policy Type')}}</th>
                                        <th>{{ __('Per Policy Rate')}}</th>
                                        <th>{{ __('Total Policy')}}</th>
                                        <th>{{ __('Total Amount')}}</th>
                                        <th>{{ __('Paid Amount')}}</th>
                                        <th>{{ __('Unpaid Amount')}}</th>
                                        <th>{{ __('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ __('101')}}</td>
                                            <td>{{ __('Milind Bankar')}}</td>
                                            <td>{{ __('Sample Shop')}}</td>
                                            <td>{{ __('7564657687')}}</td>
                                            <td>{{ __('sample@gmail.com')}}</td>
                                            <td>{{ __('Vashi West')}}</td>
                                            <td>{{ __('Smart Policy')}}</td>
                                            <td>{{ __('250')}}</td>
                                            <td>{{ __('250')}}</td>
                                            <td>{{ __('62,500')}}</td>
                                            <td>{{ __('20,000')}}</td>
                                            <td>{{ __('42,500')}}</td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#"><i class="ik ik-eye"></i></a>
                                                    <a href="distributor-edit-employee"><i class="ik ik-edit-2"></i></a>
                                                    <a href="#"><i class="ik ik-trash-2"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('102')}}</td>
                                            <td>{{ __('Milind Bankar')}}</td>
                                            <td>{{ __('Sample Shop')}}</td>
                                            <td>{{ __('7564657687')}}</td>
                                            <td>{{ __('milind@gmail.com')}}</td>
                                            <td>{{ __('Vashi West')}}</td>
                                            <td>{{ __('Smart Policy')}}</td>
                                            <td>{{ __('250')}}</td>
                                            <td>{{ __('250')}}</td>
                                            <td>{{ __('62,500')}}</td>
                                            <td>{{ __('20,000')}}</td>
                                            <td>{{ __('42,500')}}</td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#"><i class="ik ik-eye"></i></a>
                                                    <a href="distributor-edit-employee"><i class="ik ik-edit-2"></i></a>
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