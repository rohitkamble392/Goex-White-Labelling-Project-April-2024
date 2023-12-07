@extends('inventory.layout')
@section('title', 'Add Vendor')
@section('content')
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-headphones bg-blue"></i>
                        <div class="d-inline">
                            <h5>Add Vendor</h5>
                            <span>Add New Vendor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="support-dashboard"><i class="ik ik-home"></i></a>
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
                        <input type="hidden" name="_token" value="R7Ddbbgxb1qEbQoTDakkow75fNl3gqY3q3qkjl94">                            
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name<span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control" name="name" value="" placeholder="Enter Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email<span class="text-red">*</span></label>
                                        <input id="email" type="email" class="form-control" name="email" value="" placeholder="Enter Email" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile<span class="text-red">*</span></label>
                                        <input id="mobile" type="number" class="form-control" name="mobile" value="" placeholder="Enter Mobile No." required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address<span class="text-red">*</span></label>
                                        <textarea id="address" type="text" class="form-control" name="address" value="" placeholder="Enter Address" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Policy Type</label>
                                        <select class="form-control" name="policy_type" >
                                            <option selected="selected" value="" >Select Type</option>
                                            <option value="1">Smart Policy</option>
                                            <option value="1">Regular Policy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label for="per_price">Per Policy Price<span class="text-red">*</span></label>
                                        <input id="per_price" type="number" class="form-control" name="per_price" value="" placeholder="Enter Policy Price" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="total_policy">Total Policy<span class="text-red">*</span></label>
                                        <input id="total_policy" type="number" class="form-control" name="total_policy" value="" placeholder="Enter Total Policy" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Total Amount<span class="text-red">*</span></label>
                                        <input id="amount" type="number" class="form-control" name="amount" value="" placeholder="Enter Total Amount" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="paid_amount">Paid Amount<span class="text-red">*</span></label>
                                        <input id="paid_amount" type="number" class="form-control" name="paid_amount" value="" placeholder="Enter Paid Amount" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="remaining_amount">Remaining Amount<span class="text-red">*</span></label>
                                        <input id="remaining_amount" type="number" class="form-control" name="remaining_amount" value="" placeholder="Enter Remaining Amount" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <button id="show-image-button" type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                            <img id="my-image" src="/img/test14.png" class="img-fluid" alt=""  style="display: none;">
                                    </div>
                                </div>
                                <script>
                                    const showImageButton = document.getElementById("show-image-button");
                                    const myImage = document.getElementById("my-image"); 
                                    showImageButton.addEventListener("click", () => { 
                                        myImage.style.display = "block"; 
                                    });
                                </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
