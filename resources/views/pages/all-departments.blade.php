@extends('layouts.main') 
@section('title', 'All Departments')
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
            @foreach ($departmentCounts as $count)
                <div class="col-xl-3 col-md-6">
                    <div class="card card-blue text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <a href="all-accounts" class="text-white">
                                    <h4 class="mb-0">{{ $count->department_count }}</h4>
                                    <p class="mb-0">{{ $count->department }}</p>
                                </a>
                            </div>
                        <div class="col-4 text-right">
                        <i class="ik ik-user f-30"></i>
                    </div>
                </div>
            </div>
                </div>
            </div>
            @endforeach
            <!-- page statustic chart end -->
        </div>
    <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('All Departments')}}</h5>
                            <span>{{ __('Create new Department')}}</span>
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
                                <a href="add-department">{{ __('Add Department')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    	<div class="row">
            <div class="col-sm-12">
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="all-departments"
                                   class="table table-striped table-bordered nowrap table-responsive text-center">
                                <thead>
                                <tr>
                                    <th>{{ __('Department ID')}}</th>
                                    <th>{{ __('Department Name')}}</th>
                                    <th>{{ __('Department Description')}}</th>
                                    <th>{{ __('Department Total Device')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                            </table>
                    </div>
                    </div>
                </div>
                <!-- Language - Comma Decimal Place table end -->
            </div>  
    	</div>
    </div>

    <script>
        function confirmDelete(userId) {
            if (confirm('Are you sure you want to delete this branch?')) {
                // If the user clicks "OK," proceed with the delete request
                window.location.href = "{{ url('department/delete') }}/" + userId;
            }
        }
    </script>

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
    <script src="{{ asset('js/all-departments.js') }}"></script>
    @endpush
@endsection