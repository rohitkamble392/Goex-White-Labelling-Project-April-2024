@extends('inventory.layout')
@section('title', 'Edit Shop')
@section('content')
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-headphones bg-blue"></i>
                        <div class="d-inline">
                            <h5>Edit Shop</h5>
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
                                        <label for="name">{{ __('Name')}}<span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ clean($department->name, 'titles')}}" readonly>
                                        <div class="help-block with-errors"></div>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{ __('Email')}}<span class="text-red">*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ clean($department->email, 'titles')}}" readonly>
                                        <div class="help-block with-errors"></div>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">{{ __('Mobile')}}<span class="text-red">*</span></label>
                                        <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ clean($department->mobile, 'titles')}}" readonly>
                                        <div class="help-block with-errors"></div>

                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="address">{{ __('Address')}}<span class="text-red">*</span></label>
                                        <textarea id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ clean($department->address, 'titles')}}" readonly></textarea>
                                        <div class="help-block with-errors"></div>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                        <label for="per_price">{{ __('Per Policy Price')}}<span class="text-red">*</span></label>
                                        <input id="per_price" type="number" class="form-control @error('per_price') is-invalid @enderror" name="per_price" value="{{ clean($department->per_price, 'titles')}}" readonly>
                                        <div class="help-block with-errors"></div>

                                        @error('per_price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="total_policy">{{ __('Total Policy')}}<span class="text-red">*</span></label>
                                        <input id="total_policy" type="number" class="form-control @error('total_policy') is-invalid @enderror" name="total_policy" value="{{ clean($department->total_policy, 'titles')}}" readonly>
                                        <div class="help-block with-errors"></div>

                                        @error('total_policy')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">{{ __('Total Amount')}}<span class="text-red">*</span></label>
                                        <input id="amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ clean($department->amount, 'titles')}}" readonly>
                                        <div class="help-block with-errors"></div>

                                        @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="paid_amount">{{ __('Paid Amount')}}<span class="text-red">*</span></label>
                                        <input id="paid_amount" type="number" class="form-control @error('paid_amount') is-invalid @enderror" name="paid_amount" value="{{ clean($department->paid_amount, 'titles')}}" readonly>
                                        <div class="help-block with-errors"></div>

                                        @error('paid_amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="remaining_amount">{{ __('Remaining Amount')}}<span class="text-red">*</span></label>
                                        <input id="remaining_amount" type="number" class="form-control @error('remaining_amount') is-invalid @enderror" name="remaining_amount" value="{{ clean($department->remaining_amount, 'titles')}}" readonly>
                                        <div class="help-block with-errors"></div>

                                        @error('remaining_amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
