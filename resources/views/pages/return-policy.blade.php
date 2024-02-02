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
                            <h5>{{ __('Return Keys')}}</h5>
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
                    <div class="card-header"><h3><b>{{ __('Enter Details')}}</b></h3></div>
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
                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            <button class="btn btn-light">{{ __('Cancel')}}</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
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
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><b>{{ __('Return To')}}</b></h3></div>
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('ID')}}</th>
                                    <th>{{ __('Role')}}</th>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Mobile')}}</th>
                                    <th>{{ __('Email')}}</th>
                                    <th class="nosort">{{ __('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ __('001')}}</td>
                                    <td>{{ __('Company')}}</td>
                                    <td>{{ __('Company Name')}}</td>
                                    <td>{{ __('9812437612')}}</td>
                                    <td>{{ __('company@gmail.com')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a data-toggle="modal" data-target="#demoModal"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('002')}}</td>
                                    <td>{{ __('Super Stokist')}}</td>
                                    <td>{{ __('Super Stokist Name')}}</td>
                                    <td>{{ __('9812437612')}}</td>
                                    <td>{{ __('superstokist@gmail.com')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a data-toggle="modal" data-target="#demoModal"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('003')}}</td>
                                    <td>{{ __('Distributor')}}</td>
                                    <td>{{ __('Distributor Name')}}</td>
                                    <td>{{ __('9812437612')}}</td>
                                    <td>{{ __('distributor@gmail.com')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a data-toggle="modal" data-target="#demoModal"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
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
                        <h5 class="modal-title" id="demoModalLabel"><b>{{ __('Enter Details')}}</b></h5>
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
                                    <label for="assigner_email">{{ __('Smart Keys')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="Enter Reason Here"/>
                                </div>
                                <div class="col-sm-6">
                                    <label for="assigner_email">{{ __('Regular Keys')}}<span class="text-red">*</span></label>
                                    <input type="email" name="assigner_email" class="form-control" placeholder="Enter Reason Here"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="assigner_email">{{ __('Smart Keys')}}<span class="text-red">*</span></label>
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
                        <button type="button" class="btn btn-primary">{{ __('Submit')}}</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel')}}</button>
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
