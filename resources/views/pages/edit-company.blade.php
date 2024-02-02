@extends('layouts.main') 
@section('title', 'Edit Company')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit Company')}}</h5>
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
                    <div class="card-body">
                    <form method="post" action="{{ route('create-company') }}">
                        @csrf
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="autoziedName">{{ __('Authorized Name')}}<span class="text-red">*</span></label>
                                    <input type="text" name="autoziedName" class="form-control" placeholder="Enter Authorized Name">
                                </div>
                                <div class="col-sm-4">
                                    <label for="com_Name">{{ __('Company Name')}}<span class="text-red">*</span></label>
                                    <input type="text" name="com_Name" class="form-control" placeholder="Enter Company Name">
                                </div>
                                <div class="col-sm-4">
                                    <label for="com_MobileNo">{{ __('Mobile No')}}<span class="text-red">*</span></label>
                                    <input type="number" name="com_MobileNo" class="form-control" placeholder="Enter Mobile No">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="com_Email">{{ __('Company Email')}}<span class="text-red">*</span></label>
                                    <input type="email" name="com_Email" class="form-control" placeholder="Enter Company Email">
                                </div>
                                <div class="col-sm-4">
                                    <label for="password">{{ __('Enter Password')}}<span class="text-red">*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="com_Address">{{ __('Company Address')}}<span class="text-red">*</span></label>
                                    <textarea type="text" name="com_Address" class="form-control" placeholder="Company Address"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="pincode">{{ __('PIN Code')}}<span class="text-red">*</span></label>
                                    <input type="number" name="pincode" class="form-control" placeholder="Enter PIN Code">
                                </div>
                                <div class="col-sm-4">
                                    <label for="state">{{ __('State')}}<span class="text-red">*</span></label>
                                    <input type="text" name="state" class="form-control" placeholder="Enter State">
                                </div>
                                <div class="col-sm-4">
                                    <label for="district">{{ __('District')}}<span class="text-red">*</span></label>
                                    <input type="text" name="district" class="form-control" placeholder="Enter District">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="type_Buss">{{ __('Type of Company')}}<span class="text-red">*</span></label>
                                    <select name="type_Buss"  class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="1">Sole Propritership</option>
                                        <option value="2">Partnership Furm</option>
                                        <option value="2">LLP</option>
                                        <option value="2">Private Limited</option>
                                        <option value="2">Limited</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="uploadLogo">{{ __('Upload Company Logo')}}<span class="text-red">*</span></label>
                                    <input type="file" name="uploadLogo" class="form-control" placeholder="Upload Company Logo">
                                </div>
                                <div class="col-sm-4">
                                    <label for="webSiteURL">{{ __('Website URL')}}<span class="text-red">*</span></label>
                                    <input type="text" name="webSiteURL" class="form-control" placeholder="Enter Company Website URL">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="panNo">{{ __('Owner PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="panNo" class="form-control" placeholder="Enter PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="panNo_URL">{{ __('Upload Owner PAN Card')}}<span class="text-red">*</span></label>
                                    <input type="file" name="panNo_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="gstno">{{ __('GST Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="gstno" class="form-control" placeholder="Enter GST Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="gst_URL">{{ __('Upload GST')}}<span class="text-red">*</span></label>
                                    <input type="file" name="gst_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="aadharCardNO">{{ __('Owner Aadhar Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="aadharCardNO" class="form-control" placeholder="Enter Owner Aadhar Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="aadharCard_URL">{{ __('Upload Owner Aadhar Card')}}<span class="text-red">*</span></label>
                                    <input type="file" name="aadharCard_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="companno">{{ __('Company PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="companno" class="form-control" placeholder="Enter Company PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="compannO_URL">{{ __('Upload Company PAN Card')}}<span class="text-red">*</span></label>
                                    <input type="file" name="compannO_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="authPANNO">{{ __('Authorized Person PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="authPANNO" class="form-control" placeholder="Enter Authorized Person PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="authPANNO_URL">{{ __('Upload Authorized Person PAN Card')}}<span class="text-red">*</span></label>
                                    <input type="file" name="authPANNO_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="cinno">{{ __('CIN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="cinno" class="form-control" placeholder="Enter CIN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="cinnO_URL">{{ __('Upload CIN')}}<span class="text-red">*</span></label>
                                    <input type="file" name="cinnO_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="subdoM1">{{ __('Sub Domain 1')}}<span class="text-red">*</span></label>
                                    <input type="text" name="subdoM1" class="form-control" placeholder="Enter Sub Domain 1">
                                </div>
                                <div class="col-sm-4">
                                    <label for="subdoM2">{{ __('Sub Domain 2')}}<span class="text-red">*</span></label>
                                    <input type="text" name="subdoM2" class="form-control" placeholder="Enter Sub Domain 2">
                                </div>
                                <div class="col-sm-4">
                                    <label for="subdoM3">{{ __('Sub Domain 3')}}<span class="text-red">*</span></label>
                                    <input type="text" name="subdoM3" class="form-control" placeholder="Enter Sub Domain 3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="enterPrise_ID">{{ __('Enterprise ID')}}<span class="text-red">*</span></label>
                                    <input type="text" name="enterPrise_ID" class="form-control" placeholder="Enter Enterprise ID">
                                </div>
                            </div>
                            <div class="card-header"><button type="submit" class="btn btn-secondary">{{ __('Submit')}}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
@endsection
