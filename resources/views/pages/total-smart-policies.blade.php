@extends('layouts.main') 
@section('title', 'Total Smart Policy Details')
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
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Total Smart Policy Details')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('support-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="add-shop">{{ __('Add Shop')}}</a>
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
                                    <th>{{ __('Vendor ID')}}</th>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Email')}}</th>
                                    <th>{{ __('Mobile')}}</th>
                                    <th>{{ __('Policy Type')}}</th>
                                    <th>{{ __('Per Policy')}}</th>
                                    <th>{{ __('Total Policy')}}</th>
                                    <th>{{ __('Total Amount')}}</th>
                                    <th>{{ __('Paid Amount')}}</th>
                                    <th>{{ __('Remaining Amount')}}</th>
                                    <th>{{ __('Used Policy')}}</th>
                                    <th>{{ __('Remaining Policy')}}</th>
                                    <th>{{ __('Requested Policy')}}</th>
                                    <th>{{ __('Last Used Policy')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>{{ __('Sample')}}</td>
                                        <td>{{ __('sample@gmail.com')}}</td>
                                        <td>{{ __('8765498765')}}</td>
                                        <td>{{ __('Smart Policy')}}</td>
                                        <td>{{ __('250')}}</td>
                                        <td>{{ __('100')}}</td>
                                        <td>{{ __('25,000')}}</td>
                                        <td>{{ __('10,000')}}</td>
                                        <td>{{ __('15,000')}}</td>
                                        <td>{{ __('200')}}</td>
                                        <td>{{ __('50')}}</td>
                                        <td>{{ __('100')}}</td>
                                        <td>{{ __('2023-12-01T06:46:41.189Z')}}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="edit-shop"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('102')}}</td>
                                        <td>{{ __('Sample')}}</td>
                                        <td>{{ __('sample@gmail.com')}}</td>
                                        <td>{{ __('8765498765')}}</td>
                                        <td>{{ __('Smart Policy')}}</td>
                                        <td>{{ __('250')}}</td>
                                        <td>{{ __('100')}}</td>
                                        <td>{{ __('25,000')}}</td>
                                        <td>{{ __('10,000')}}</td>
                                        <td>{{ __('15,000')}}</td>
                                        <td>{{ __('200')}}</td>
                                        <td>{{ __('50')}}</td>
                                        <td>{{ __('100')}}</td>
                                        <td>{{ __('2023-12-01T06:46:41.189Z')}}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="edit-shop"><i class="ik ik-edit-2"></i></a>
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