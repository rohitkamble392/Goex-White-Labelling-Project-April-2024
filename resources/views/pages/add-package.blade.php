@extends('layouts.main') 
@section('title', 'Add Package')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5><b>{{ __('ADD Package')}}</b></h5>
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
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <form method="post" action="{{ route('create-package') }}">
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
                                    <label for="district">{{ __('District')}}<span class="text-red">*</span></label>
                                    <input type="text" name="district" class="form-control" placeholder="Enter District">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="type_Buss">{{ __('Type of Company')}}<span class="text-red">*</span></label>
                                    <select name="type_Buss" id="type_Buss" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="1">Sole Propritership</option>
                                        <option value="2">Partnership Furm</option>
                                        <option value="2">LLP</option>
                                        <option value="2">Private Limited</option>
                                        <option value="2">Limited</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="webSiteURL">{{ __('Website URL')}}<span class="text-red">*</span></label>
                                    <input type="text" name="webSiteURL" class="form-control" placeholder="Enter Company Website URL">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="uploadLogo">{{ __('Upload Company Logo')}}<span class="text-red">*</span></label>
                                    <input type="file" name="uploadLogo" id="uploadLogo" class="form-control" placeholder="Upload Company Logo">
                                    <input type="hidden" name="uploadLogoURL" id="uploadLogoURL">
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" name="uploadLogoBtn" id="uploadLogoBtn" class="form-control" value="Upload">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="panNo">{{ __('Owner PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="panNo" class="form-control" placeholder="Enter PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="panNo_URL">{{ __('Upload Owner PAN Card')}}<span class="text-red">*</span></label>
                                    <input type="file" name="panNo_URL" id="panNo_URL" class="form-control" placeholder="Upload Company Logo">
                                    <input type="hidden" name="uploadPAN_URL" id="uploadPAN_URL">
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" name="uploadPanBtn" id="uploadPanBtn" class="form-control" value="Upload">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="gstno">{{ __('GST Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="gstno" class="form-control" placeholder="Enter GST Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="gsT_URL">{{ __('Upload GST')}}<span class="text-red">*</span></label>
                                    <input type="file" name="gsT_URL" id="gsT_URL" class="form-control">
                                    <input type="hidden" name="uploadgsT_URL" id="uploadgsT_URL">
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" name="uploadGSTBtn" id="uploadGSTBtn" class="form-control" value="Upload">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="aadharCardNO">{{ __('Owner Aadhar Number')}}<span class="text-red">*</span></label>
                                    <input type="number" name="aadharCardNO" class="form-control" placeholder="Enter Owner Aadhar Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="aadharCard_URL">{{ __('Upload Owner Aadhar Card')}}<span class="text-red">*</span></label>
                                    <input type="file" name="aadharCard_URL" id="aadharCard_URL" class="form-control">
                                    <input type="hidden" name="uploadAadhar_URL" id="uploadAadhar_URL">
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" name="uploadAadharBtn" id="uploadAadharBtn" class="form-control" value="Upload">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="companno">{{ __('Company PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="companno" class="form-control" placeholder="Enter Company PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="compannO_URL">{{ __('Upload Company PAN Card')}}<span class="text-red">*</span></label>
                                    <input type="file" name="compannO_URL" id="compannO_URL" class="form-control">
                                    <input type="hidden" name="uploadcompan_URL" id="uploadcompan_URL">
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" name="uploadcomPanBtn" id="uploadcomPanBtn" class="form-control" value="Upload">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="authPANNO">{{ __('Authorized Person PAN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="authPANNO" class="form-control" placeholder="Enter Authorized Person PAN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="authPANNO_URL">{{ __('Upload Authorized Person PAN Card')}}<span class="text-red">*</span></label>
                                    <input type="file" name="authPANNO_URL" id="authPANNO_URL" class="form-control">
                                    <input type="hidden" name="uploadauthPAN_URL" id="uploadauthPAN_URL">
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" name="uploadauthPANBtn" id="uploadauthPANBtn" class="form-control" value="Upload">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="cinno">{{ __('CIN Number')}}<span class="text-red">*</span></label>
                                    <input type="text" name="cinno" class="form-control" placeholder="Enter CIN Number">
                                </div>
                                <div class="col-sm-4">
                                    <label for="cinnO_URL">{{ __('Upload CIN')}}<span class="text-red">*</span></label>
                                    <input type="file" name="cinnO_URL" id="cinnO_URL" class="form-control">
                                    <input type="hidden" name="uploadcinNo" id="uploadcinNo">
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" name="uploadcinNoBtn" id="uploadcinNoBtn" class="form-control" value="Upload">
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
                                <div class="col-sm-4">
                                    <label for="role">{{ __('Select Role')}}<span class="text-red">*</span></label>
                                    {{-- <input type="text" name="roleName" class="form-control" placeholder="Enter Role"/> --}}
                                    <select name="role" id="role" class="form-control">
                                        @foreach ($roleDetails['Result'] as $role)
                                            <option value="{{ $role['RoleID'] }}">{{ $role['RoleName'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-header"><button type="submit" class="btn btn-secondary"><b>{{ __('SUBMIT')}}</b></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Initially hide the fields
            $('#companno').closest('.form-group').hide();
            $('#compannO_URL').closest('.form-group').hide();
            $('#uploadcomPanBtn').closest('.form-group').hide();
            $('#cinno').closest('.form-group').hide();
            $('#cinnO_URL').closest('.form-group').hide();
            $('#uploadcinNoBtn').closest('.form-group').hide();
    
            // When the select input changes
            $('#type_Buss').change(function() {
                var selectedType = $(this).val();
                // If "Private Limited" is selected, hide the fields, otherwise show them
                if (selectedType === '4') { // Value '4' corresponds to "Private Limited"
                    $('#companno').closest('.form-group').hide();
                    $('#compannO_URL').closest('.form-group').hide();
                    $('#uploadcomPanBtn').closest('.form-group').hide();
                    $('#cinno').closest('.form-group').hide();
                    $('#cinnO_URL').closest('.form-group').hide();
                    $('#uploadcinNoBtn').closest('.form-group').hide();
                } else {
                    $('#companno').closest('.form-group').show();
                    $('#compannO_URL').closest('.form-group').show();
                    $('#uploadcomPanBtn').closest('.form-group').show();
                    $('#cinno').closest('.form-group').show();
                    $('#cinnO_URL').closest('.form-group').show();
                    $('#uploadcinNoBtn').closest('.form-group').show();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#uploadLogoBtn').click(function() {
                var fileInput = $('#uploadLogo')[0].files[0];
                if (fileInput) {
                    var formData = new FormData();
                    formData.append('image', fileInput);
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/upload-image',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                        },
                        success: function(response) {
                            $('#uploadLogoURL').val(response.message);
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.responseJSON.message;
                            $('#uploadLogoURL').val(errorMessage);
                        }
                    });
                } else {
                    $('#message').text('Please select an image to upload.');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#uploadPanBtn').click(function() {
                var fileInput = $('#panNo_URL')[0].files[0];
                if (fileInput) {
                    var formData = new FormData();
                    formData.append('image', fileInput);
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/upload-image',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                        },
                        success: function(response) {
                            $('#uploadPAN_URL').val(response.message);
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.responseJSON.message;
                            $('#uploadPAN_URL').val(errorMessage);
                        }
                    });
                } else {
                    $('#message').text('Please select an image to upload.');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#uploadGSTBtn').click(function() {
                var fileInput = $('#gsT_URL')[0].files[0];
                if (fileInput) {
                    var formData = new FormData();
                    formData.append('image', fileInput);
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/upload-image',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                        },
                        success: function(response) {
                            $('#uploadgsT_URL').val(response.message);
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.responseJSON.message;
                            $('#uploadgsT_URL').val(errorMessage);
                        }
                    });
                } else {
                    $('#message').text('Please select an image to upload.');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#uploadAadharBtn').click(function() {
                var fileInput = $('#aadharCard_URL')[0].files[0];
                if (fileInput) {
                    var formData = new FormData();
                    formData.append('image', fileInput);
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/upload-image',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                        },
                        success: function(response) {
                            $('#uploadAadhar_URL').val(response.message);
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.responseJSON.message;
                            $('#uploadAadhar_URL').val(errorMessage);
                        }
                    });
                } else {
                    $('#message').text('Please select an image to upload.');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#uploadcomPanBtn').click(function() {
                var fileInput = $('#compannO_URL')[0].files[0];
                if (fileInput) {
                    var formData = new FormData();
                    formData.append('image', fileInput);
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/upload-image',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                        },
                        success: function(response) {
                            $('#uploadcompan_URL').val(response.message);
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.responseJSON.message;
                            $('#uploadcompan_URL').val(errorMessage);
                        }
                    });
                } else {
                    $('#message').text('Please select an image to upload.');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#uploadauthPANBtn').click(function() {
                var fileInput = $('#authPANNO_URL')[0].files[0];
                if (fileInput) {
                    var formData = new FormData();
                    formData.append('image', fileInput);
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/upload-image',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                        },
                        success: function(response) {
                            $('#uploadauthPAN_URL').val(response.message);
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.responseJSON.message;
                            $('#uploadauthPAN_URL').val(errorMessage);
                        }
                    });
                } else {
                    $('#message').text('Please select an image to upload.');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#uploadcinNoBtn').click(function() {
                var fileInput = $('#cinnO_URL')[0].files[0];
                if (fileInput) {
                    var formData = new FormData();
                    formData.append('image', fileInput);
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/upload-image',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                        },
                        success: function(response) {
                            $('#uploadcinNo').val(response.message);
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.responseJSON.message;
                            $('#uploadcinNo').val(errorMessage);
                        }
                    });
                } else {
                    $('#message').text('Please select an image to upload.');
                }
            });
        });
    </script>
@endsection
