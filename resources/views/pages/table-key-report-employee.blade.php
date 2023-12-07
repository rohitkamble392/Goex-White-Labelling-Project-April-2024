@extends('layouts.main') 
@section('title', 'Employee Key Report')
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
                        <h3>{{ __('Requested and Send Policies Report')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap table-responsive text-center">
                                <thead>
                                <tr>
                                    <th>{{ __('Retailer ID')}}</th>
                                    <th>{{ __('Shop Name')}}</th>
                                    <th>{{ __('Total Assign Polices')}}</th>
                                    <th>{{ __('Used Polices')}}</th>
                                    <th>{{ __('Remaining Policies')}}</th>
                                    <th>{{ __('Requested Policies')}}</th>
                                    <th>{{ __('Total Amount')}}</th>
                                    <th>{{ __('Per Policy Amount')}}</th>
                                    <th>{{ __('Paid Amount')}}</th>
                                    <th>{{ __('Balance Amount')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>{{ __('Sample Shop')}}</td>
                                        <td>{{ __('50')}}</td>
                                        <td>{{ __('20')}}</td>
                                        <td>{{ __('30')}}</td>
                                        <td>{{ __('150')}}</td>
                                        <td>{{ __('5000')}}</td>
                                        <td>{{ __('100')}}</td>
                                        <td>{{ __('3000')}}</td>
                                        <td>{{ __('2000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>{{ __('Sample Shop')}}</td>
                                        <td>{{ __('50')}}</td>
                                        <td>{{ __('20')}}</td>
                                        <td>{{ __('30')}}</td>
                                        <td>{{ __('150')}}</td>
                                        <td>{{ __('5000')}}</td>
                                        <td>{{ __('100')}}</td>
                                        <td>{{ __('3000')}}</td>
                                        <td>{{ __('2000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>{{ __('Sample Shop')}}</td>
                                        <td>{{ __('50')}}</td>
                                        <td>{{ __('20')}}</td>
                                        <td>{{ __('30')}}</td>
                                        <td>{{ __('150')}}</td>
                                        <td>{{ __('5000')}}</td>
                                        <td>{{ __('100')}}</td>
                                        <td>{{ __('3000')}}</td>
                                        <td>{{ __('2000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>{{ __('Sample Shop')}}</td>
                                        <td>{{ __('50')}}</td>
                                        <td>{{ __('20')}}</td>
                                        <td>{{ __('30')}}</td>
                                        <td>{{ __('150')}}</td>
                                        <td>{{ __('5000')}}</td>
                                        <td>{{ __('100')}}</td>
                                        <td>{{ __('3000')}}</td>
                                        <td>{{ __('2000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('101')}}</td>
                                        <td>{{ __('Sample Shop')}}</td>
                                        <td>{{ __('50')}}</td>
                                        <td>{{ __('20')}}</td>
                                        <td>{{ __('30')}}</td>
                                        <td>{{ __('150')}}</td>
                                        <td>{{ __('5000')}}</td>
                                        <td>{{ __('100')}}</td>
                                        <td>{{ __('3000')}}</td>
                                        <td>{{ __('2000')}}</td>
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
      
