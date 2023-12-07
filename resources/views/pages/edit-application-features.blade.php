@extends('layouts.main') 
@section('title', 'Edit Applicatino Features')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit Application')}}</h5>
                            <span>{{ __('Edit Application')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('emm-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="add-depatment">{{ __('Add Application')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="/application-feature/update">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label for="id">{{ __('Application ID')}}<span class="text-red">*</span></label>
                                        <input id="id" type="text" class="form-control @error('name') is-invalid @enderror" name="id" value="{{ clean($application->id, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="packagename">{{ __('Application PackageName')}}<span class="text-red">*</span></label>
                                        <input id="packagename" type="text" class="form-control @error('name') is-invalid @enderror" name="packagename" value="{{ clean($application->packagename, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="installtype">{{ __('Application InstallType')}}<span class="text-red">*</span></label>
                                        <input id="installtype" type="text" class="form-control @error('name') is-invalid @enderror" name="installtype" value="{{ clean($application->installtype, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="defaultPermissionPolicy">{{ __('Application DefaultPermissionPolicy')}}<span class="text-red">*</span></label>
                                        <input id="defaultPermissionPolicy" type="text" class="form-control @error('name') is-invalid @enderror" name="defaultPermissionPolicy" value="{{ clean($application->defaultPermissionPolicy, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
