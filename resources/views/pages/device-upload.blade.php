@extends('layouts.main') 
@section('title', 'Upload Device')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">

        <style>
            /* Custom styles */
          
            .container {
                max-width: 500px;
                margin-top: 50px;
            }
            .form-group {
                margin-bottom: 20px;
            }
            .btn-upload {
                background-color: #007bff;
                color: #fff;
            }
            .btn-upload:hover {
                background-color: #0056b3;
            }
        </style>

    @endpush

    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Upload Device')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Upload Device')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start message area-->
            @include('include.message')
            <!-- end message area-->
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h3>{{ __('Add user')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <h1 class="mb-4 text-center">Upload Excel File</h1>
                            <form action="/patch-devices" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="excelFile">Choose Excel File</label>
                                    <input type="file" class="form-control-file" id="excelFile" name="excel_file">
                                </div>
                                <button type="submit" class="btn btn-block btn-upload">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js -->
    @push('script') 
        <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
         <!--get role wise permissiom ajax script-->
    @endpush
@endsection