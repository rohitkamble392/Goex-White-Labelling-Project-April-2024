@extends('layouts.main') 
@section('title', 'Add Department')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Department')}}</h5>
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
                                <a href="create-policy">{{ __('Add Policy')}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="add-application">{{ __('Add Application')}}</a>
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
                        <form class="forms-sample" method="POST" action="save-department">   
                            @csrf                        
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label for="dname">Department Name<span class="text-red">*</span></label>
                                        <input id="dname" type="text" class="form-control" name="dname" value="" placeholder="Enter Department Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                <div class="form-group">
                                        <label for="demail">Department Email<span class="text-red">*</span></label>
                                        <input id="demail" type="text" class="form-control" name="demail" value="" placeholder="Enter Department Email" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                <div class="form-group">
                                        <label for="ddesc">Department Description<span class="text-red">*</span></label>
                                        <textarea id="ddesc" type="text" class="form-control" name="ddesc" value="" placeholder="Enter Department Description" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">

                                        <label>Advanced Features</label>
                                        
                                        @foreach($policyfeature as $feature)
                                        <div class="border-checkbox-group border-checkbox-group-success d-block">
                                            <input class="border-checkbox" type="checkbox" id="{{ 'checkbox' . $feature->id }}" value="{{ $feature->id }}" name="policy_features[]" checked>
                                            <label class="border-checkbox-label" for="{{ 'checkbox' . $feature->id }}">{{ $feature->name }}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="form-group">

                                        <label>Enabled Applications</label>
                                        
                                        @foreach($application as $feature)
                                        <div class="border-checkbox-group border-checkbox-group-success d-block">
                                            <input class="border-checkbox" type="checkbox" id="{{ 'checkbox' . $feature->id }}" value="{{ $feature->id }}" name="application_features[]" checked>
                                            <label class="border-checkbox-label" for="{{ 'checkbox' . $feature->id }}">{{ $feature->packagename }}</label>
                                        </div>
                                        @endforeach
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
