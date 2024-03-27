@extends('layouts.main')
@section('title', 'Add Customer')
@section('content')


<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-user-plus bg-secondary"></i>
                    <div class="d-inline">
                        <h5><b>{{ __('ADD CUSTOMER')}}</b></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('superadmin-dashboard')}}"><i class="ik ik-home"></i></a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header">
                    <h3>{{ __('Add Retailer')}}</h3>
                </div> --}}
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('create-customer') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="cust_Name"><b>{{ __('Customer Name')}}</b><span
                                        class="text-red">*</span></label>
                                <input type="text" name="cust_Name" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="col-sm-4">
                                <label for="cust_Email"><b>{{ __('Email')}}</b><span class="text-red">*</span></label>
                                <input type="email" name="cust_Email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-4">
                                <label for="cust_MobileNo"><b>{{ __('Mobile Number')}}</b><span
                                        class="text-red">*</span></label>
                                <input type="number" name="cust_MobileNo" class="form-control"
                                    placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="imeNumber"><b>{{ __('IMEI 1')}}</b><span class="text-red">*</span></label>
                                <input type="number" name="imeNumber" class="form-control" placeholder="Enter IMEI 1">
                            </div>
                            <div class="col-sm-4">
                                <label for="imeNumber1"><b>{{ __('IMEI 2')}}</b><span class="text-red">*</span></label>
                                <input type="number" name="imeNumber1" class="form-control" placeholder="Enter IMEI 2">
                            </div>
                            <div class="col-sm-4">
                                <label for="serial_No"><b>{{ __('Serial Number')}}</b><span
                                        class="text-red">*</span></label>
                                <input type="text" name="serial_No" class="form-control"
                                    placeholder="Enter Serial Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="model"><b>{{ __('Model')}}</b><span class="text-red">*</span></label>
                                <input type="number" name="model" class="form-control" placeholder="Enter Model">
                            </div>
                            <div class="col-sm-4">
                                <label for="brand"><b>{{ __('Brand')}}</b><span class="text-red">*</span></label>
                                <input type="number" name="brand" class="form-control" placeholder="Enter Brand">
                            </div>
                            <div class="col-sm-4">
                                <label for="finaciar_id"><b>{{ __('Financier Name')}}</b><span
                                        class="text-red">*</span></label>
                                <select name="finaciar_id" id="" class="form-control">
                                    <option value="">Select Finance Type</option>
                                    <option value="1">BAJAJ FINANCE</option>
                                    <option value="2">HOME CREDIT FINANCE</option>
                                    <option value="3">IDFC FINANCE</option>
                                    <option value="4">HDFC FINANCE</option>
                                    <option value="5">KOTAK FINANCE</option>
                                    <option value="6">PRIVATE FINANCE</option>
                                    <option value="7">OTHER FINANCE</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="emI_Amount"><b>{{ __('EMI Amount')}}</b><span
                                        class="text-red">*</span></label>
                                <input type="number" name="emI_Amount" class="form-control"
                                    placeholder="Enter EMI Amount">
                            </div>
                            <div class="col-sm-4">
                                <label for="deviceAmt"><b>{{ __('Device Price')}}</b><span
                                        class="text-red">*</span></label>
                                <input type="number" name="deviceAmt" class="form-control"
                                    placeholder="Enter Device Price">
                            </div>
                            <div class="col-sm-4">
                                <label for="down_Payment"><b>{{ __('Down Payment')}}</b><span
                                        class="text-red">*</span></label>
                                <input type="number" name="down_Payment" class="form-control"
                                    placeholder="Enter Down Payment">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="emI_Tenure"><b>{{ __('EMI Tenure')}}</b><span
                                        class="text-red">*</span></label>
                                <input type="number" name="emI_Tenure" class="form-control"
                                    placeholder="Enter EMI Amount">
                            </div>
                            <div class="col-sm-4">
                                <label for="emI_Date"><b>{{ __('EMI Date')}}</b><span class="text-red">*</span></label>
                                <input type="date" name="emI_Date" class="form-control"
                                    placeholder="Enter Device Price">
                            </div>
                            <div class="col-sm-4">
                                <label for="remarks"><b>{{ __('Additional Comment')}}</b><span
                                        class="text-red">*</span></label>
                                <textarea type="number" name="remarks" class="form-control"
                                    placeholder="Enter Down Payment"></textarea>
                            </div>

                            <div class="col-sm-4">
                                <label for="promoterId">{{ __('Select Promoter')}}<span
                                        class="text-red">*</span></label>
                                <select id="promoterId" class="form-control select2"></select>
                            </div>

                        </div>
                        <div class="card-header"><button type="submit" class="btn btn-secondary"><b>{{
                                    __('SUBMIT')}}</b></button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('js/get-promotors.js') }}"></script>
@endpush
@endsection