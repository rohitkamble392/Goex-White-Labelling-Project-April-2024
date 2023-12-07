@extends('layouts.main') 
@section('title', 'Deactive Companies')
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
                            <h5>{{ __('Deactive Companies')}}</h5>
                            <span>{{ __('All Deactive Companies')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('emm-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="add-company">{{ __('Add Company')}}</a>
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
                                    <th>{{ __('Company ID')}}</th>
                                    <th>{{ __('Company Name')}}</th>
                                    <th>{{ __('Company Email')}}</th>
                                    <th>{{ __('Company Mobile')}}</th>
                                    <th>{{ __('Company Address')}}</th>
                                    <th>{{ __('Company GST No.')}}</th>
                                    <th>{{ __('Company Total Policies')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="all-departments">{{ __('101')}}</a></td>
                                        <td><a href="all-departments">{{ __('Sample1')}}</a></td>
                                        <td><a href="all-departments">{{ __('sample1@gmail.com')}}</a></td>
                                        <td><a href="all-departments">{{ __('87238765')}}</a></td>
                                        <td><a href="all-departments">{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, laudantium.')}}</a></td>
                                        <td><a href="all-departments">{{ __('ATF7349478239FD')}}</a></td>
                                        <td><a href="all-departments">{{ __('326')}}</a></td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="edit-company"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="all-departments">{{ __('102')}}</a></td>
                                        <td><a href="all-departments">{{ __('Sample2')}}</a></td>
                                        <td><a href="all-departments">{{ __('sample2@gmail.com')}}</a></td>
                                        <td><a href="all-departments">{{ __('87238765')}}</a></td>
                                        <td><a href="all-departments">{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, laudantium.')}}</a></td>
                                        <td><a href="all-departments">{{ __('ATF7349478239FD')}}</a></td>
                                        <td><a href="all-departments">{{ __('152')}}</a></td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="edit-company"><i class="ik ik-edit-2"></i></a>
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