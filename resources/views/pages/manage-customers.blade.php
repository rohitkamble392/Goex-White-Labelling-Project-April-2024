@extends('layouts.main') 
@section('title', 'Manage Customer')
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
                            <h5><b>{{ __('MANAGE CUSTOMERS')}}</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('superadmin-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header"><h3>{{ __('Data Table')}}</h3></div> --}}
                    <div class="card-body">
                        <table id="data_table" class="table table-striped table-hover">
                            <thead class="text-center bg-secondary">
                                <tr>
                                    <th class="text-white">{{ __('ID')}}</th>
                                    <th class="text-white">{{ __('Name')}}</th>
                                    <th class="text-white">{{ __('Mobile')}}</th>
                                    <th class="text-white">{{ __('Email')}}</th>
                                    <th class="text-white">{{ __('IMEI 1')}}</th>
                                    <th class="text-white">{{ __('IMEI 2')}}</th>
                                    <th class="text-white">{{ __('Shop Name')}}</th>
                                    <th class="text-white">{{ __('Shop Number')}}</th>
                                    <th class="nosort text-white">{{ __('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td><b>{{ __('101')}}</b></td>
                                    <td>{{ __('Suraj Shinde')}}</td>
                                    <td>{{ __('8712327654')}}</td>
                                    <td>{{ __('surajshinde@gmail.com')}}</td>
                                    <td>{{ __('981234651234567')}}</td>
                                    <td>{{ __('981234651234567')}}</td>
                                    <td>{{ __('Top 10')}}</td>
                                    <td>{{ __('8712436521')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye text-dark"></i></a>
                                            <a href="#"><i class="ik ik-edit-2 text-dark"></i></a>
                                            <a href="#"><i class="ik ik-trash-2 text-dark"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>{{ __('102')}}</b></td>
                                    <td>{{ __('Suraj Shinde')}}</td>
                                    <td>{{ __('8712327654')}}</td>
                                    <td>{{ __('surajshinde@gmail.com')}}</td>
                                    <td>{{ __('981234651234567')}}</td>
                                    <td>{{ __('981234651234567')}}</td>
                                    <td>{{ __('Top 10')}}</td>
                                    <td>{{ __('8712436521')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye text-dark"></i></a>
                                            <a href="#"><i class="ik ik-edit-2 text-dark"></i></a>
                                            <a href="#"><i class="ik ik-trash-2 text-dark"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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