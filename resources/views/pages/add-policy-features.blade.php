@extends('layouts.main') 
@section('title', 'Add Policy Features')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Policy')}}</h5>
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
                                <a href="add-depatment">{{ __('Add Department')}}</a>
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
                        <form class="forms-sample" method="POST" action="save-policy">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label for="name">Policy Name<span class="text-red">*</span></label>
                                        <select id="name" type="text" class="form-control" name="name" value="" placeholder="Enter Policy Name" required="">
                                            <option value="addUserDisabled">{{ __('addUserDisabled')}}</option>
                                            <option value="adjustVolumeDisabled">{{ __('adjustVolumeDisabled')}}</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                        <label for="code">Policy Code<span class="text-red">*</span></label>
                                        <select id="code" type="text" class="form-control" name="code" value="" placeholder="Enter Policy Code " required="">
                                            <option value="true">{{ __('True')}}</option>
                                            <option value="false">{{ __('False')}}</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                      data-mdb-toggle="dropdown" aria-expanded="false">
                                      Dropdown button
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                      </li>
                                      <li>
                                        <a class="dropdown-item" href="#">
                                          Submenu &raquo;
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                          <li>
                                            <a class="dropdown-item" href="#">Submenu item 1</a>
                                          </li>
                                          <li>
                                            <a class="dropdown-item" href="#">Submenu item 2</a>
                                          </li>
                                          <li>
                                            <a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                            <ul class="dropdown-menu dropdown-submenu">
                                              <li>
                                                <a class="dropdown-item" href="#">Multi level 1</a>
                                              </li>
                                              <li>
                                                <a class="dropdown-item" href="#">Multi level 2</a>
                                              </li>
                                            </ul>
                                          </li>
                                          <li>
                                            <a class="dropdown-item" href="#">Submenu item 4</a>
                                          </li>
                                          <li>
                                            <a class="dropdown-item" href="#">Submenu item 5</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
