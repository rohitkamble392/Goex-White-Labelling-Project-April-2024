@extends('layouts.main') 
@section('title', 'Ticket Reason')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Ticket Reason')}}</h5>
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
                    {{-- <div class="card-header"><h3>{{ __('Add Employee')}}</h3></div> --}}
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('create-ticket-reason') }}" >
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="name">{{ __('Enter New Ticket Reason')}}<span class="text-red">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Type here" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="card-header"><button type="submit" class="btn btn-secondary">{{ __('Submit')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection