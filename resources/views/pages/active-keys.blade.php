@extends('layouts.main') 
@section('title', 'Active Keys')
@section('content')
    <!-- push external head elements to head -->
    @push('head')

        <link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
    @endpush


    <div class="container-fluid">
    	<div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('keys List')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap table-responsive text-center">
                                <thead>
                                <tr>
                                    <th>{{ __('Department ID')}}</th>
                                    <th>{{ __('Department Name')}}</th>
                                    <th>{{ __('Department Description')}}</th>
                                    <th>{{ __('Policy Type')}}</th>
                                    <th>{{ __('Total Keys')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>{{ __('Accounts')}}</td>
                                        <td>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, iusto.')}}</td>
                                        <td>{{ __('Smart Key')}}</td>
                                        <td>{{ __('243')}}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="emm-edit-user"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('102')}}</td>
                                        <td>{{ __('Accounts')}}</td>
                                        <td>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, iusto.')}}</td>
                                        <td>{{ __('Regular Key')}}</td>
                                        <td>{{ __('148')}}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="emm-edit-user"><i class="ik ik-edit-2"></i></a>
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