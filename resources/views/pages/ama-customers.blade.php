@extends('layouts.main')
@section('title', 'AMA Devices')
@section('content')
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
                            <h5><b>{{ __('AMA DEVICE')}}</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('retailer-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm-4">
                    <label for="select-policy"><b>{{ __('Select Policy')}}</b><span class="text-red">*</span></label>
                    <select name="" id="" class="form-control">
                        <option value="">Select Policy</option>
                        <option value="">default</option>
                        <option value="">hardlock</option>
                        <option value="">lockdevice</option>
                        <option value="">unistall</option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="gst"><b>{{ __('From Date')}}</b><span class="text-red">*</span></label>
                    <input type="date" name="gst" class="form-control" placeholder="Upload GST">
                </div>
                <div class="col-lg-4">
                    <label for="gst"><b>{{ __('To Date')}}</b><span class="text-red">*</span></label>
                    <input type="date" name="gst" class="form-control" placeholder="Upload GST">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="data_table" class="table table-striped table-hover">
                            <thead class="text-center bg-secondary">
                                <tr>
                                    <th class="text-white"><b>{{ __('Device')}}</b></th>
                                    <th class="text-white"><b>{{ __('Details')}}</b></th>
                                    <th class="text-white"><b>{{ __('SIM Details')}}</b></th>
                                    <th class="text-white"><b>{{ __('Sync Time')}}</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deviceDetails['Result'] as $details)
                                <tr>
                                    <td>
                                        <p><b>{{ $details['ENTERPRISE_ID']}}</b></p>
                                        <p><b>{{ $details['DEVICE_ID']}}</b></p>
                                        <p><b>Applied Policy : </b>{{ explode('/', $details['APPLIED_POLICY_NAME'])[3] }}</p>
                                        <p><b>State : </b>{{ $details['APPLIED_STATE']}}</p>
                                    </td>
                                    <td>
                                        <p><b>Serial : </b>{{ $details['SERIAL_NUMBER']}}</p>
                                        <p><b>IMEI : </b>{{ $details['IMEI_NUMBER']}}</p>
                                        <p><b>Model : </b>{{ $details['MODEL']}}</p>
                                        <p><b>MFG : </b>{{ $details['MANUFACTURER']}}</p>
                                        <p><b>Brand : </b>{{ $details['BRAND']}}</p>
                                    </td>
                                    <td>
                                        <p><b>SIM 1 : </b>{{ $details['SIM1_PHONE_NUMBER']}}</p>
                                        <p><b>SIM 2 : </b>{{ $details['SIM2_PHONE_NUMBER']}}</p>
                                        <p><b>SIM 1 Carrier : </b>{{ $details['SIM1_CARRIER_NAME']}}</p>
                                        <p><b>SIM 2 Carrier : </b>{{ $details['SIM2_CARRIER_NAME']}}</p>
                                    </td>
                                    <td>
                                        {{-- <p><b>Created On : </b>{{ $details['ENROLLMENT_TIME']}}</p>
                                        <p><b>Enrollment On : </b>{{ $details['ENROLLMENT_TIME']}}</p>
                                        <p><b>Policy Sync : </b>{{ $details['LAST_POLICY_SYNC_TIME']}}</p> --}}
                                        <p><b>Created On : </b>{{ \Carbon\Carbon::parse($details['ENROLLMENT_TIME'])->format('j F, Y g:i A') }}</p>
                                        <p><b>Enrollment On : </b>{{ \Carbon\Carbon::parse($details['ENROLLMENT_TIME'])->format('j F, Y g:i A') }}</p>
                                        <p><b>Policy Sync : </b>{{ \Carbon\Carbon::parse($details['LAST_POLICY_SYNC_TIME'])->format('j F, Y g:i A') }}</p>
                                        <p><b>StatusReport : </b>{{ \Carbon\Carbon::parse($details['LAST_STATUS_REPORT_TIME'])->format('j F, Y g:i A') }}</p>
                                        <p><b>Brand : </b>{{ $details['BRAND']}}</p>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    @endpush
@endsection

