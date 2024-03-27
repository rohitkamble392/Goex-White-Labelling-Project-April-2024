@extends('layouts.main')
@section('title', 'Add Retailer')
@section('content')


<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-user-plus bg-secondary"></i>
                    <div class="d-inline">
                        <h5><b>{{ __('ADD RETAILER')}}</b></h5>
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
                    <form class="forms-sample" method="POST" action="{{ route('create-retailer') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="shop_Name">{{ __('Shop Name')}}<span class="text-red">*</span></label>
                                <input type="text" name="shop_Name" class="form-control" placeholder="Shop Name">
                            </div>
                            <div class="col-sm-4">
                                <label for="contactPer_Name">{{ __('Contact Person Name')}}<span
                                        class="text-red">*</span></label>
                                <input type="text" name="contactPer_Name" class="form-control"
                                    placeholder="Contact Person Name">
                            </div>
                            <div class="col-sm-4">
                                <label for="email">{{ __('Email')}}<span class="text-red">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="password">{{ __('Password')}}<span class="text-red">*</span></label>
                                {{-- <input type="password" name="password" class="form-control"
                                    placeholder="Enter Password"> --}}
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Enter password" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-4">
                                <label for="mobileNo">{{ __('Mobile Number')}}<span class="text-red">*</span></label>
                                <input type="number" name="mobileNo" class="form-control" placeholder="Mobile Number">
                            </div>
                            <div class="col-sm-4">
                                <label for="address">{{ __('Address')}}<span class="text-red">*</span></label>
                                <textarea type="text" name="address" class="form-control"
                                    placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="pincode">{{ __('Pincode')}}<span class="text-red">*</span></label>
                                <input type="number" name="pincode" class="form-control" placeholder="Pincode">
                            </div>
                            <div class="col-sm-4">
                                <label for="state_id">{{ __('State')}}<span class="text-red">*</span></label>
                                <select name="state_id" id="state_id" class="form-control select2">
                                    <option value="1">Andhra Pradesh</option>
                                    <option value="2">Arunachal Pradesh</option>
                                    <option value="3">Assam</option>
                                    <option value="4">Bihar</option>
                                    <option value="5">Chhattisgarh</option>
                                    <option value="6">Goa</option>
                                    <option value="7">Gujarat</option>
                                    <option value="8">Haryana</option>
                                    <option value="9">Himachal Pradesh</option>
                                    <option value="10">Jharkhand</option>
                                    <option value="11">Karnataka</option>
                                    <option value="12">Kerala</option>
                                    <option value="13">Madhya Pradesh</option>
                                    <option value="14">Maharashtra</option>
                                    <option value="15">Manipur</option>
                                    <option value="16">Meghalaya</option>
                                    <option value="17">Mizoram</option>
                                    <option value="18">Nagaland</option>
                                    <option value="19">Odisha</option>
                                    <option value="20">Punjab</option>
                                    <option value="21">Rajasthan</option>
                                    <option value="22">Sikkim</option>
                                    <option value="23">Tamil Nadu</option>
                                    <option value="24">Telangana</option>
                                    <option value="25">Tripura</option>
                                    <option value="26">Uttar Pradesh</option>
                                    <option value="27">Uttarakhand</option>
                                    <option value="28">West Bengal</option>
                                    <option value="29">Andaman and Nicobar Islands</option>
                                    <option value="30">Chandigarh</option>
                                    <option value="31">Dadra and Nagar Haveli and Daman and Diu</option>
                                    <option value="32">Delhi</option>
                                    <option value="33">Ladakh</option>
                                    <option value="34">Lakshadweep</option>
                                    <option value="35">Puducherry</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="district">{{ __('District')}}<span class="text-red">*</span></label>
                                <input type="text" name="district" class="form-control" placeholder="Enter District">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="gsT_No">{{ __('GST Number')}}<span class="text-red">*</span></label>
                                <input type="text" name="gsT_No" class="form-control" placeholder="GST Number">
                            </div>
                            <div class="col-sm-4">
                                <label for="aadhar_No">{{ __('Aadhaar Number')}}<span class="text-red">*</span></label>
                                <input type="number" name="aadhar_No" class="form-control" placeholder="Aadhaar Number">
                            </div>
                            <div class="col-sm-4">
                                <label for="paN_No">{{ __('PAN Number')}}<span class="text-red">*</span></label>
                                <input type="text" name="paN_No" class="form-control" placeholder="PAN Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="payment_No">{{ __('Payment Number')}}<span class="text-red">*</span></label>
                                <input type="text" name="payment_No" class="form-control" placeholder="Payment Number">
                            </div>
                            <div class="col-sm-4">
                                <label for="upI_No">{{ __('UPI Number')}}<span class="text-red">*</span></label>
                                <input type="text" name="upI_No" class="form-control" placeholder="UPI Number">
                            </div>
                            <div class="col-sm-4">
                                <label for="is_Zero">{{ __('Is Zero Touch')}}<span class="text-red">*</span></label>
                                <select name="is_Zero" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="contact_id">{{ __('Contact ID')}}<span class="text-red">*</span></label>
                                <input type="text" name="contact_id" class="form-control" placeholder="Enter Contact ID">
                            </div>
                            <div class="col-sm-4">
                                <label for="billing_address_id">{{ __('Billing Address ID')}}<span class="text-red">*</span></label>
                                <input type="text" name="billing_address_id" class="form-control" placeholder="Enter Billing Address ID">
                            </div>
                            <div class="col-sm-4">
                                <label for="shipping_address_id">{{ __('Shipping Address ID')}}<span class="text-red">*</span></label>
                                <input type="text" name="shipping_address_id" class="form-control" placeholder="Enter Shipping Address ID">
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="employeeId">{{ __('Select Employee')}}<span
                                        class="text-red">*</span></label>
                                <select id="employeeId" class="form-control select2"></select>
                            </div>
                        </div> --}}
                        <div class="card-header"><button type="submit" class="btn btn-secondary"><b>{{
                                    __('SUBMIT')}}</b></button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
            $.ajax({
                url: '/get-employee',
                type: 'GET',
                success: function(response) {
                    $('#employeeId').empty();

                            // Iterate over the data and append options
                            response.data.forEach(function(item) {
                                $('#employeeId').append('<option value="' + item.ID + '">' + item.Name + '</option>');
                            });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
</script>

@endsection