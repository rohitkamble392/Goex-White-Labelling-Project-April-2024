@extends('layouts.main') 
@section('title', 'Support Dashboard')
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
            <div class="col-xl-4 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="total-smart-policies" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Total Smart Policies')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="used-smart-policies" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Used Smart Policies')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="remaining-smart-policies" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Remaining Smart Policies')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="total-regular-policies" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Total Regular Policies')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="used-regular-policies" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Used Regular Policies')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="remaining-regular-policies" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Remaining Regular Policies')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="all-vendors" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Total Vendors')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="add-shop" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Add Vendor')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="assign-policy" class="text-white">
                                    <h4 class="mb-0">{{ __('3,612')}}</h4>
                                    <p class="mb-0">{{ __('Assign Policies')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>

        <div class="row">
    		<!-- page statustic chart start -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-red text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <a href="all-shops" class="text-white">
                                <p class="mb-0 h5">{{ __('Last 3 Days')}}</p>
                            </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-shopping-cart f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart1" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="all-shops" class="text-white">
                                    <p class="mb-0 h5">{{ __('Last 7 Days')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-shopping-cart f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart2" class="chart-line chart-shadow" ></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-green text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="all-shops" class="text-white">
                                    <p class="mb-0 h5">{{ __('Last 15 Days')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-shopping-cart f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart3" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-yellow text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="all-shops" class="text-white">
                                    <p class="mb-0 h5">{{ __('Last 30 Days')}}</p>
                                </a>
                            </div>
                            <div class="col-4 text-right">
                            <i class="ik ik-shopping-cart f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart4" class="chart-line chart-shadow" ></div>
                    </div>
                </div>
            </div>
            <!-- page statustic chart end -->
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