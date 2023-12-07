@extends('layouts.main') 
@section('title', 'Add Applications')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Application')}}</h5>
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
                        <form class="forms-sample" method="POST" action="save-application">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                            <label for="installtype">Application InstallType<span class="text-red">*</span></label>
                                            <input id="installtype" type="text" class="form-control" name="installtype" value="" placeholder="Enter Policy Code " required="">
                                            <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="packagename">Application PackageName<span class="text-red">*</span></label>
                                        <input id="packagename" type="text" class="form-control" name="packagename" value="" required="">
                                        <div class="help-block with-errors"></div>
                                </div>
                                    <div class="form-group">
                                            <label for="defaultPermissionPolicy">Application DefaultPermissionPolicy<span class="text-red">*</span></label>
                                            <input id="defaultPermissionPolicy" type="text" class="form-control" name="defaultPermissionPolicy" value="" placeholder="Enter Policy Code " required="">
                                            <div class="help-block with-errors"></div>
                                    </div>
                                {{-- <div class="form-group">
                                        <label for="installtype">Application InstallType<span class="text-red">*</span></label>
                                        <select id="installtype" type="text" class="form-control" name="installtype" value="" required="">
                                            <option value="INSTALL_TYPE_UNSPECIFIED">{{ __('INSTALL_TYPE_UNSPECIFIED')}}</option>
                                            <option value="PREINSTALLED">{{ __('PREINSTALLED')}}</option>
                                            <option value="FORCE_INSTALLED">{{ __('FORCE_INSTALLED')}}</option>
                                            <option value="BLOCKED">{{ __('BLOCKED')}}</option>
                                            <option value="AVAILABLE">{{ __('AVAILABLE')}}</option>
                                            <option value="REQUIRED_FOR_SETUP">{{ __('REQUIRED_FOR_SETUP')}}</option>
                                            <option value="KIOSK">{{ __('KIOSK')}}</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="packagename">Application PackageName<span class="text-red">*</span></label>
                                    <input id="packagename" type="text" class="form-control" name="packagename" value="" required="">
                                    <div class="help-block with-errors"></div>
                            </div>
                                
                                <div class="form-group">
                                        <label for="defaultPermissionPolicy">Application DefaultPermissionPolicy<span class="text-red">*</span></label>
                                        <select id="defaultPermissionPolicy" type="text" class="form-control" name="defaultPermissionPolicy" value="" required="">
                                            <option value="PERMISSION_POLICY_UNSPECIFIED">{{ __('PERMISSION_POLICY_UNSPECIFIED')}}</option>
                                            <option value="PROMPT">{{ __('PROMPT')}}</option>
                                            <option value="GRANT">{{ __('GRANT')}}</option>
                                            <option value="DENY">{{ __('DENY')}}</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                </div> --}}
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
