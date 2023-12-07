@extends('layouts.main') 
@section('title', 'Customers EMI Report')
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
                        <h3>{{ __('Customers EMI Report')}}</h3>
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
                                    <th>{{ __('Device Amount')}}</th>
                                    <th>{{ __('Down Payment')}}</th>
                                    <th>{{ __('EMI Tenure')}}</th>
                                    <th>{{ __('EMI Type')}}</th>
                                    <th>{{ __('EMI Amount')}}</th>
                                    <th>{{ __('Paid Amount')}}</th>
                                    <th>{{ __('Unpaid Amount')}}</th>
                                    <th>{{ __('Last Payment Date')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>{{ __('Sample')}}</td>
                                        <td>{{ __('8765094312')}}</td>
                                        <td>{{ __('8675645476967152')}}</td>
                                        <td>{{ __('8574635127484567')}}</td>
                                        <td>{{ __('20,000')}}</td>
                                        <td>{{ __('6,000')}}</td>
                                        <td>{{ __('7')}}</td>
                                        <td>{{ __('Monthly')}}</td>
                                        <td>{{ __('2,000')}}</td>
                                        <td>{{ __('6,000')}}</td>
                                        <td>{{ __('14,000')}}</td>
                                        <td>{{ __('12-10-2023')}}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="customer-emi-report"><i class="ik ik-edit-2"></i></a>
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
        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('js/datatables.js') }}"></script>
    @endpush
@endsection
      
