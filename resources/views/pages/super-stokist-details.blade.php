@extends('layouts.main') 
@section('title', 'Super Stokist Details')
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
    		<!-- page statustic chart start -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="all-superstokist" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Total Super Stokist')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                        {{-- <div id="Widget-line-chart1" class="chart-line chart-shadow"></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="active-superstokist" class="text-white">
                                    <h4 class="mb-0">{{ __('2,563')}}</h4>
                                    <p class="mb-0">{{ __('Active')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                        {{-- <div id="Widget-line-chart2" class="chart-line chart-shadow"></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="deactive-superstokist" class="text-white">
                                    <h4 class="mb-0">{{ __('2,563')}}</h4>
                                    <p class="mb-0">{{ __('Deactive')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                        {{-- <div id="Widget-line-chart3" class="chart-line chart-shadow"></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="add-superstokist" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Add Super Stokist')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                        {{-- <div id="Widget-line-chart4" class="chart-line chart-shadow"></div> --}}
                    </div>
                </div>
            </div>
            <!-- page statustic chart end -->  
    	</div>
    </div>

    <div class="container-fluid">
        <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h5>{{ __('Super Stokist List')}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{url('dashboard-company')}}"><i class="ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="distributor-add-retailer">{{ __('Add Super Stokist')}}</a>
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
                                        <th>{{ __('Super Stokist ID')}}</th>
                                        <th>{{ __('Super Stokist Name')}}</th>
                                        <th>{{ __('Shop Name')}}</th>
                                        <th>{{ __('Mobile No')}}</th>
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
                                            <td>{{ __('Vinod Wadkar')}}</td>
                                            <td>{{ __('Sample Shop')}}</td>
                                            <td>{{ __('8765432165')}}</td>
                                            <td>{{ __('Vashi West')}}</td>
                                            <td>{{ __('Smart Policy')}}</td>
                                            <td>{{ __('200')}}</td>
                                            <td>{{ __('200')}}</td>
                                            <td>{{ __('40,000')}}</td>
                                            <td>{{ __('15,000')}}</td>
                                            <td>{{ __('25,000')}}</td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#"><i class="ik ik-eye"></i></a>
                                                    <a href="company-edit-superstokist"><i class="ik ik-edit-2"></i></a>
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