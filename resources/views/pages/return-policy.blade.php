@extends('layouts.main') 
@section('title', 'Return Keys')
@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-user-plus bg-secondary"></i>
                    <div class="d-inline">
                        <h5><b>{{ __('KEY PULL BACK') }}</b></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('superadmin-dashboard') }}"><i class="ik ik-home"></i></a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('create-customer') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12 mt-2">
                                <label for="MobileNo"><b>{{ __('Select Role') }}</b><span
                                        class="text-red">*</span></label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Role</option>
                                            <option value="">Super Admin</option>
                                            <option value="">Sub Admin</option>
                                            <option value="">Company</option>
                                            <option value="">Super Stokist</option>
                                            <option value="">Distributor</option>
                                            <option value="">Employee</option>
                                            <option value="">Retailer</option>
                                        </select>
                            </div>
                            <div class="col-sm-12 col-md-12 mt-2">
                                <label for="MobileNo"><b>{{ __('Enter ID') }}</b><span
                                        class="text-red">*</span></label>
                                <input type="text" id="MobileNo" name="MobileNo" class="form-control"
                                    placeholder="Enter Mobile Number" autocomplete="off">
                            </div>

                            <div class="card-header">
                                <button type="button" class="btn btn-secondary"
                                    id="ajaxButton"><b>{{ __('SUBMIT') }}</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                {{-- <div class="card-header"><h3><b>{{ __('BALANCED KEYS')}}</b></h3></div> --}}
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12 mt-2">
                            <label for="Shop_Name"><b>{{ __('Name') }} : </b></label>
                            <p id="Shop_Name"></p>
                            <label for="Address"><b>{{ __('Address') }} : </b></label>
                            <p id="Address"></p>
                        </div>
                        <div class="col-sm-12 col-md-12 mt-2">
                            <label for="Shop_Name"><b>{{ __('Mobile') }} : </b></label>
                            <p id="Shop_Name"></p>
                        </div>
                        <div class="col-sm-6 col-md-6 mt-2">
                            <label for="mobile"><b>{{ __('Smart Keys') }} : </b></label>
                            <p id="mobile"></p>
                        </div>
                        <div class="col-sm-6 col-md-6 mt-2">
                            <label for="Email"><b>{{ __('Regular Keys') }} : </b></label>
                            <p id="Email"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<div class="container-fluid">
    	{{-- <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5><b>{{ __('KEY PULL BACK')}}</b></h5>
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
        </div> --}}

        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="role">{{ __('Select Role')}}<span class="text-red">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Role</option>
                                        <option value="">Super Admin</option>
                                        <option value="">Sub Admin</option>
                                        <option value="">Company</option>
                                        <option value="">Super Stokist</option>
                                        <option value="">Distributor</option>
                                        <option value="">Employee</option>
                                        <option value="">Retailer</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Enter ID')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="Enter Reason Here"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary mr-2"><b>{{ __('SUBMIT')}}</b></button>
                            <button type="submit" class="btn btn-secondary mr-2"><b>{{ __('CANCEL')}}</b></button>
                          </form>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><b>{{ __('Unused Keys')}}</b></h3></div>
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Name')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="Sample Shop" readonly/>
                                </div>
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Mobile')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="9812435678" readonly/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Email')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="sample@gmail.com" readonly/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Smart Keys')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="150" readonly/>
                                </div>
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Regular Keys')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="200" readonly/>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5><b>{{ __('KEY PULL BACK TO ') }}</b></h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('superadmin-dashboard') }}"><i class="ik ik-home"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="data_table" class="table table-striped table-hover">
                            <thead class="text-center bg-secondary">
                                <tr>
                                    <th class="text-light"><b>{{ __('ID')}}</b></th>
                                    <th class="text-light"><b>{{ __('Role')}}</b></th>
                                    <th class="text-light"><b>{{ __('Name')}}</b></th>
                                    <th class="text-light"><b>{{ __('Mobile')}}</b></th>
                                    <th class="text-light"><b>{{ __('Email')}}</b></th>
                                    <th class="nosort text-light"><b>{{ __('Action')}}</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><b>{{ __('101')}}</b></td>
                                    <td class="text-center">{{ __('Company')}}</td>
                                    <td class="text-center">{{ __('Company Name')}}</td>
                                    <td class="text-center">{{ __('9812437612')}}</td>
                                    <td class="text-center">{{ __('company@gmail.com')}}</td>
                                    <td>
                                        <div class="table-actions text-center">
                                            <a data-toggle="modal" data-target="#demoModal"><i class="ik ik-eye text-dark"></i></a>
                                            {{-- <a href="#"><i class="ik ik-edit-2 text-dark"></i></a>
                                            <a href="#"><i class="ik ik-trash-2 text-dark"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>{{ __('102')}}</b></td>
                                    <td class="text-center">{{ __('Super Stokist')}}</td>
                                    <td class="text-center">{{ __('Super Stokist Name')}}</td>
                                    <td class="text-center">{{ __('9812437612')}}</td>
                                    <td class="text-center">{{ __('superstokist@gmail.com')}}</td>
                                    <td>
                                        <div class="table-actions text-center">
                                            <a data-toggle="modal" data-target="#demoModal"><i class="ik ik-eye text-dark"></i></a>
                                            {{-- <a href="#"><i class="ik ik-edit-2 text-dark"></i></a>
                                            <a href="#"><i class="ik ik-trash-2 text-dark"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>{{ __('103')}}</b></td>
                                    <td class="text-center">{{ __('Distributor')}}</td>
                                    <td class="text-center">{{ __('Distributor Name')}}</td>
                                    <td class="text-center">{{ __('9812437612')}}</td>
                                    <td class="text-center">{{ __('distributor@gmail.com')}}</td>
                                    <td>
                                        <div class="table-actions text-center">
                                            <a data-toggle="modal" data-target="#demoModal"><i class="ik ik-eye text-dark"></i></a>
                                            {{-- <a href="#"><i class="ik ik-edit-2 text-dark"></i></a>
                                            <a href="#"><i class="ik ik-trash-2 text-dark"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="demoModalLabel"><b>{{ __('ENTER KEY DETAILS')}}</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                                <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="assigner_email"><b>{{ __('Smart Keys')}}</b><span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="Enter Reason Here"/>
                                </div>
                                <div class="col-sm-6">
                                    <label for="assigner_email"><b>{{ __('Regular Keys')}}</b><span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="Enter Reason Here"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="assigner_email"><b>{{ __('Smart Keys')}}</b><span class="text-red">*</span></label>
                                    <textarea type="email" name="assigner_email" class="form-control" placeholder="Enter Reason Here"></textarea>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"><b>{{ __('SUBMIT')}}</b></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><b>{{ __('CANCEL')}}</b></button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><b>{{ __('Return To')}}</b></h3></div>
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Smart Keys')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="Enter Reason Here"/>
                                </div>
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Regular Keys')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="Enter Reason Here"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Smart Keys')}}<span class="text-red">*</span></label>
                                    <textarea type="email" name="assigner_email" class="form-control" placeholder="Enter Reason Here"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            <button class="btn btn-light">{{ __('Cancel')}}</button>
                          </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

<div class="container-fluid"></div>
@endsection
