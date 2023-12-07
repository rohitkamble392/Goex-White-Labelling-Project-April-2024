@extends('layouts.main') 
@section('title', 'Customer Key Report')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
    @endpush
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('Customer Report')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap table-responsive text-center">
                                <thead>
                                <tr>
                                    <th>{{ __('Customer ID')}}</th>
                                    <th>{{ __('Customer Name')}}</th>
                                    <th>{{ __('Mobile No')}}</th>
                                    <th>{{ __('IMEI 1')}}</th>
                                    <th>{{ __('IMEI 2')}}</th>
                                    <th>{{ __('Applied Policy Date')}}</th>
                                    <th>{{ __('Current Policy')}}</th>
                                    <th>{{ __('Type of Key')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>{{ __('101')}}</td>
                                    <td>{{ __('Sample')}}</td>
                                    <td>{{ __('8765123456')}}</td>
                                    <td>{{ __('987345678123')}}</td>
                                    <td>{{ __('756453859673')}}</td>
                                    <td>{{ __('12-11-2023')}}</td>
                                    <td>{{ __('Soft Lock')}}</td>
                                    <td>{{ __('Smart Policy')}}</td>
                                    </tr>
                                    <tr>
                                    <td>{{ __('102')}}</td>
                                    <td>{{ __('Sample')}}</td>
                                    <td>{{ __('8765123456')}}</td>
                                    <td>{{ __('987345678123')}}</td>
                                    <td>{{ __('756453859673')}}</td>
                                    <td>{{ __('12-11-2023')}}</td>
                                    <td>{{ __('Unlock Device')}}</td>
                                    <td>{{ __('Regular Policy')}}</td>
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
        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('js/datatables.js') }}"></script>
    @endpush
@endsection
      
