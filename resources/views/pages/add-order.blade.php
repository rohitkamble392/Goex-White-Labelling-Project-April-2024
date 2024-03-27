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
                                    <label for="zoho_ItemID">{{ __('zoho_ItemID')}}<span class="text-red">*</span></label>
                                    <input type="text" name="zoho_ItemID" class="form-control" placeholder="Enter zoho_ItemID">
                                </div>
                                <div class="col-sm-4">
                                    <label for="title">{{ __('title')}}<span class="text-red">*</span></label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                                </div>
                                <div class="col-sm-4">
                                    <label for="qty">{{ __('qty')}}<span class="text-red">*</span></label>
                                    <input type="number" name="qty" class="form-control" placeholder="Enter qty">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="amount">{{ __('amount')}}<span class="text-red">*</span></label>
                                    <input type="number" name="amount" class="form-control" placeholder="Enter amount">
                                </div>
                                <div class="col-sm-4">
                                    <label for="iS_Active">{{ __('iS_Active')}}<span class="text-red">*</span></label>
                                    <input type="number" name="iS_Active" class="form-control" placeholder="Enter iS_Active">
                                </div>
                                <div class="col-sm-4">
                                    <label for="mop">{{ __('mop')}}<span class="text-red">*</span></label>
                                    <input type="text" name="mop" class="form-control" placeholder="Enter mop">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="description">{{ __('description')}}<span class="text-red">*</span></label>
                                    <input type="text" name="description" class="form-control" placeholder="Enter description">
                                </div>
                                <div class="col-sm-4">
                                    <label for="for_Policy">{{ __('for_Policy')}}<span class="text-red">*</span></label>
                                    <input type="number" name="for_Policy" class="form-control" placeholder="Enter for_Policy">
                                </div>
                                <div class="col-sm-4">
                                    <label for="valid_Till">{{ __('valid_Till')}}<span class="text-red">*</span></label>
                                    <input type="text" name="valid_Till" class="form-control" placeholder="Enter valid_Till">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="imageURL">{{ __('imageURL')}}<span class="text-red">*</span></label>
                                    <input type="text" name="imageURL" class="form-control" placeholder="Enter imageURL">
                                </div>
                                <div class="col-sm-4">
                                    <label for="days_90_Price">{{ __('days_90_Price')}}<span class="text-red">*</span></label>
                                    <input type="number" name="days_90_Price" class="form-control" placeholder="Enter days_90_Price">
                                </div>
                                <div class="col-sm-4">
                                    <label for="days_180_Price">{{ __('days_180_Price')}}<span class="text-red">*</span></label>
                                    <input type="number" name="days_180_Price" class="form-control" placeholder="Enter days_180_Price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="days_365_Price">{{ __('days_365_Price')}}<span class="text-red">*</span></label>
                                    <input type="number" name="days_365_Price" class="form-control" placeholder="Enter days_365_Price">
                                </div>
                                <div class="col-sm-4">
                                    <label for="policy_type">{{ __('policy_type')}}<span class="text-red">*</span></label>
                                    <input type="number" name="policy_type" class="form-control" placeholder="Enter policy_type">
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
