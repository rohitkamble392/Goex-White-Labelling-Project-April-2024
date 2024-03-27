@extends('layouts.main') 
@section('title', 'Add Company')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5><b>{{ __('ADD COMPANY')}}</b></h5>
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
                    <form method="post" action="{{ route('create-enterprise') }}">
                        @csrf
                            <div class="form-group row">
                                {{-- <div class="col-sm-4">
                                    <label for="companid">{{ __('Company ID')}}<span class="text-red">*</span></label>
                                    <input type="text" name="companid" class="form-control" placeholder="Enter Company ID">
                                </div> --}}
                                <div class="col-sm-4">
                                    <label for="EnterpriseID">{{ __('Enterprise ID')}}<span class="text-red">*</span></label>
                                    <input type="text" name="EnterpriseID" class="form-control" placeholder="Enter Enterprise ID">
                                </div>
                                <div class="col-sm-4">
                                    <label for="RetailerID">{{ __('Retailer ID')}}<span class="text-red">*</span></label>
                                    <input type="text" name="RetailerID" class="form-control" placeholder="Enter Retailer ID">
                                </div>
                                {{-- <div class="col-sm-4">
                                    <label for="upi_number">{{ __('Select Policy')}}<span class="text-red">*</span></label>
                                    <select name="Shop_Name" id="Shop_Name" class="form-control">
                                        @foreach($policyname['Result'] as policy)
                                            <option value="{{$policy['ID']}}">{{$policy['Policy_Name']}}</option>
                                        @endforeach
                                        @foreach($retailerDetails['Result'] as $retailer)
                                        <option value="{{$retailer['CompanyID']}}">{{$retailer['Com_Name']}}</option>
                                    @endforeach
                                    </select>
                                </div> --}}
                                {{-- @if(session('roleName')==2)
                                <div class="col-lg-3">
                                    <label for="">{{ __('Select Retailer')}}<span class="text-red">*</span></label>
                                    <select name="" class="form-control" style="font-size:15px;border-radius:10px;"
                                    id="retailerId"></select>
                                </div>
                            @endif --}}
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="jsonfile">{{ __('Upload JSON File')}}<span class="text-red">*</span></label>
                                    <input type="file" name="jsonfile" id="jsonfile" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="QRfile">{{ __('Upload QR')}}<span class="text-red">*</span></label>
                                    <input type="file" name="QRfile" id="QRfile" class="form-control">
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
        $(document).ready(function(){
            
            $('#retailerId').change(function(){
                var retailerId = $(this).val();
               
                // AJAX call
                $.ajax({
                    url: "{{ url('/get-retailer') }}/",
                    method: 'GET',
                    data: {
                        retailerId: retailerId
                },
                    success: function(response){
                        // Clear existing table rows
    
                        console.log(response);
                        $('#data_table tbody').empty();
                        // Populate table with fetched data
                        response.data.forEach(function(user){
                            $('#data_table tbody').append('<tr>' +
                                '<td>' + user.ID + '</td>' +
                                '<td>' + user.Name + '</td>' +
                                '<td>' + user.MobileNo + '</td>' +
                                '<td>' + user.Email + '</td>' +
                                '<td>' + user.Address + '</td>' +
                                '<td>' + 'Action Buttons here' + '</td>' +
                                '</tr>');
                        });
                    },
                    error: function(xhr, status, error){
                        // Handle errors
                        console.error(error);
                    }
                });
            });
        });
    </script>

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
