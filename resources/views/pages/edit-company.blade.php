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
                            <h5><b>{{ __('Edit Company')}}</b></h5>
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
                    <form method="post" action="{{ route('update-company') }}">
                        @csrf
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="Authorized_Name">{{ __('Authorized Name')}}<span class="text-red">*</span></label>
                                    <input type="text" id="Authorized_Name" name="Authorized_Name" class="form-control" placeholder="Enter Authorized Name" value="{{ $company['Authorized_Name'] }}">
                                    {{-- <input type="text" value="{{ $company['CompanyID'] }}" id="CompanyID" name="CompanyID" class="form-control"> --}}
                                </div>
                                <div class="col-sm-4">
                                    <label for="Com_Name">{{ __('Company Name')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['Com_Name'] }}" id="Com_Name" name="Com_Name" class="form-control" placeholder="Enter Company Name">
                                </div>
                                <div class="col-sm-4">
                                    <label for="Com_MobileNo">{{ __('Mobile No')}}<span class="text-red">*</span></label>
                                    <input type="number" value="{{ $company['Com_MobileNo'] }}" id="Com_MobileNo" name="Com_MobileNo" class="form-control" placeholder="Enter Mobile No">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="Com_Email">{{ __('Company Email')}}<span class="text-red">*</span></label>
                                    <input type="email" value="{{ $company['Com_Email'] }}" id="Com_Email" name="Com_Email" class="form-control" placeholder="Enter Company Email">
                                </div>
                                <div class="col-sm-4">
                                    <label for="password">{{ __('Enter Password')}}<span class="text-red">*</span></label>
                                    <input id="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="Com_Address">{{ __('Company Address')}}<span class="text-red">*</span></label>
                                    <textarea type="text" value="" id="Com_Address" name="Com_Address" class="form-control" placeholder="Company Address">{{ $company['Com_Address'] }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="Pincode">{{ __('PIN Code')}}<span class="text-red">*</span></label>
                                    <input type="number" value="{{ $company['Pincode'] }}" id="Pincode" name="Pincode" class="form-control" placeholder="Enter PIN Code">
                                </div>
                                <div class="col-sm-4">
                                    <label for="state">{{ __('State')}}<span class="text-red">*</span></label>
                                    <select name="state" id="state" class="form-control select2">
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
                                    <label for="District">{{ __('District')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['District'] }}" id="District" name="District" class="form-control" placeholder="Enter District">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="Type_Buss">{{ __('Type of Company')}}<span class="text-red">*</span></label>
                                    <select name="Type_Buss" value="{{ $company['Type_Buss'] }}" id="Type_Buss"  class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="1">Sole Propritership</option>
                                        <option value="2">Partnership Furm</option>
                                        <option value="2">LLP</option>
                                        <option value="2">Private Limited</option>
                                        <option value="2">Limited</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="UploadLogo">{{ __('Upload Company Logo')}}<span class="text-red">*</span></label>
                                    <input type="file" value="{{ $company['UploadLogo'] }}" id="UploadLogo" name="UploadLogo" class="form-control" placeholder="Upload Company Logo">
                                </div>
                                <div class="col-sm-4">
                                    <label for="WebSiteURL">{{ __('Website URL')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['WebSiteURL'] }}" id="WebSiteURL" name="WebSiteURL" class="form-control" placeholder="Enter Company Website URL">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="PanNo">{{ __('Owner PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['PanNo'] }}" id="PanNo" name="PanNo" class="form-control" placeholder="Enter PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="PANNO_URL">{{ __('Upload Owner PAN Card')}}<span class="text-red">*</span></label>
                                    <input type="file" value="{{ $company['PANNO_URL'] }}" id="PANNO_URL" name="PANNO_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="GSTNO">{{ __('GST Number')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['GSTNO'] }}" id="GSTNO" name="GSTNO" class="form-control" placeholder="Enter GST Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="GST_URL">{{ __('Upload GST')}}<span class="text-red">*</span></label>
                                    <input type="file" value="{{ $company['GST_URL'] }}" id="GST_URL" name="GST_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="AADHARCardNO">{{ __('Owner Aadhar Number')}}<span class="text-red">*</span></label>
                                    <input type="number" value="{{ $company['AADHARCardNO'] }}" id="AADHARCardNO" name="AADHARCardNO" class="form-control" placeholder="Enter Owner Aadhar Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="AADHARCard_URL">{{ __('Upload Owner Aadhar Card')}}<span class="text-red">*</span></label>
                                    <input type="file" value="{{ $company['AADHARCard_URL'] }}" id="AADHARCard_URL" name="AADHARCard_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="COMPANNO">{{ __('Company PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['COMPANNO'] }}" id="COMPANNO" name="COMPANNO" class="form-control" placeholder="Enter Company PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="COMPANNO_URL">{{ __('Upload Company PAN Card')}}<span class="text-red">*</span></label>
                                    <input type="file" value="{{ $company['COMPANNO_URL'] }}" id="COMPANNO_URL" name="COMPANNO_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="AuthPANNO">{{ __('Authorized Person PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['AuthPANNO'] }}" id="AuthPANNO" name="AuthPANNO" class="form-control" placeholder="Enter Authorized Person PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="AuthPANNO_URL">{{ __('Upload Authorized Person PAN Card')}}<span class="text-red">*</span></label>
                                    <input type="file" value="{{ $company['AuthPANNO_URL'] }}" id="AuthPANNO_URL" name="AuthPANNO_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="CINNO">{{ __('CIN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['CINNO'] }}" id="CINNO" name="CINNO" class="form-control" placeholder="Enter CIN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="CINNO_URL">{{ __('Upload CIN')}}<span class="text-red">*</span></label>
                                    <input type="file" value="{{ $company['CINNO_URL'] }}" id="CINNO_URL" name="CINNO_URL" class="form-control" placeholder="Upload Company Logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="SUBDOM1">{{ __('Sub Domain 1')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['SUBDOM1'] }}" id="SUBDOM1" name="SUBDOM1" class="form-control" placeholder="Enter Sub Domain 1">
                                </div>
                                <div class="col-sm-4">
                                    <label for="SUBDOM2">{{ __('Sub Domain 2')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['SUBDOM2'] }}" id="SUBDOM2" name="SUBDOM2" class="form-control" placeholder="Enter Sub Domain 2">
                                </div>
                                <div class="col-sm-4">
                                    <label for="SUBDOM3">{{ __('Sub Domain 3')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['SUBDOM3'] }}" id="SUBDOM3" name="SUBDOM3" class="form-control" placeholder="Enter Sub Domain 3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="EnterPrise_ID">{{ __('Enterprise ID')}}<span class="text-red">*</span></label>
                                    <input type="text" value="{{ $company['EnterPrise_ID'] }}" id="EnterPrise_ID" name="EnterPrise_ID" class="form-control" placeholder="Enter Enterprise ID">
                                </div>
                            </div>
                            <div class="card-header"><button type="submit" class="btn btn-secondary">{{ __('Submit')}}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


