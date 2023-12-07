@extends('inventory.layout')
@section('title', 'Edit User')
@section('content')
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-headphones bg-blue"></i>
                        <div class="d-inline">
                            <h5>Edit User</h5>
                            <span>Edit User in Accounts Department</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/emm-dashboard"><i class="ik ik-home"></i></a>
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
                        <form class="forms-sample" method="POST" action="/inventory/products">
                        <input type="hidden" name="_token" value="R7Ddbbgxb1qEbQoTDakkow75fNl3gqY3q3qkjl94">                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="title">ID<span class="text-red">*</span></label>
                                        <input id="title" type="text" class="form-control" name="title" value="" placeholder="User ID" required="" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Name<span class="text-red">*</span></label>
                                        <input id="title" type="text" class="form-control" name="title" value="" placeholder="Milind Bankar" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Email<span class="text-red">*</span></label>
                                        <input id="title" type="text" class="form-control" name="title" value="" placeholder="milind@gmail.com" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Mobile<span class="text-red">*</span></label>
                                        <input id="title" type="text" class="form-control" name="title" value="" placeholder="8765987698" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Device<span class="text-red">*</span></label>
                                        <input id="title" type="text" class="form-control" name="title" value="" placeholder="Redmi Note 8 Pro" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Images</label>
                                        <div class="input-images" data-input-name="product-images" data-label="Drag & Drop product images here or click to browse"></div>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Select Department</label>
                                        <select class="form-control" name="warehouse" >
                                            <option selected="selected" value="" >Select Department</option>
                                            <option value="1">Sales</option>
                                            <option value="2">Accounts</option>
                                            <option value="2">Marketing</option>
                                            <option value="2">Field</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Policy</label>
                                        <select class="form-control" name="warehouse" >
                                            <option selected="selected" value="" >Select Department</option>
                                            <option value="1">Hard Lock</option>
                                            <option value="2">Soft Lock</option>
                                            <option value="2">Unlock</option>
                                            <option value="2">Unistall</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">IMEI 1<span class="text-red">*</span></label>
                                        <input id="title" type="text" class="form-control" name="title" value="" placeholder="876987123876234" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">IMEI 2<span class="text-red">*</span></label>
                                        <input id="title" type="text" class="form-control" name="title" value="" placeholder="876987123876234" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
