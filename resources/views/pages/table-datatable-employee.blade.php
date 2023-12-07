@extends('layouts.main') 
@section('title', 'Data Tables')
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
                        <h3>{{ __('Transaction Report')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('Bradley Greer')}}</td>
                                        <td>{{ __('Software Engineer')}}</td>
                                        <td>{{ __('London')}}</td>
                                        <td>{{ __('41')}}</td>
                                        <td>{{ __('2012/10/13')}}</td>
                                        <td>{{ __('$132,000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Dai Rios')}}</td>
                                        <td>{{ __('Personnel Lead')}}</td>
                                        <td>{{ __('Edinburgh')}}</td>
                                        <td>{{ __('35')}}</td>
                                        <td>{{ __('2012/09/26')}}</td>
                                        <td>{{ __('$217,500')}}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
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
      
