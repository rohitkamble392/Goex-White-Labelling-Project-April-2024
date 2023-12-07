@extends('layouts.main') 
@section('title', 'Edit Policy Features')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit Policy')}}</h5>
                            <span>{{ __('Edit Policy')}}</span>
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
                                <a href="add-depatment">{{ __('Add Policy')}}</a>
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
                        <form class="forms-sample" method="POST" action="/policy-feature/update">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label for="id">{{ __('Policy ID')}}<span class="text-red">*</span></label>
                                        <input id="id" type="text" class="form-control @error('name') is-invalid @enderror" name="id" value="{{ clean($policy->id, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">{{ __('Policy Name')}}<span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ clean($policy->name, 'titles')}}" >
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                        <label for="code">{{ __('Policy Code')}}<span class="text-red">*</span></label>
                                        <input id="code" type="text" class="form-control @error('name') is-invalid @enderror" name="code" value="{{ clean($policy->code, 'titles')}}" >
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
