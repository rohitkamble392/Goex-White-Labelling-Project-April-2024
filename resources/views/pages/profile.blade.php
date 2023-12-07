@extends('layouts.main') 
@section('title', 'Profile')
@section('content')
    

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Profile')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Pages')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Profile')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center"> 
                            <img src="../img/user.jpg" class="rounded-circle" width="150" />
                            <h4 class="card-title mt-10">{{ __('John Doe')}}</h4>
                            <p class="card-subtitle">{{ __('Front End Developer')}}</p>
                        </div>
                    </div>
                    <hr class="mb-0"> 
                    <div class="card-body"> 
                        <small class="text-muted d-block">{{ __('Email address')}} </small>
                        <h6>johndoe@admin.com</h6> 
                        <small class="text-muted d-block pt-10">{{ __('Phone')}}</small>
                        <h6>(123) 456 7890</h6> 
                        <small class="text-muted d-block pt-10">{{ __('Address')}}</small>
                        <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Please Attach GST Certificate</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Please Attach PAN Card</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Please Attach Aadhar Card</label>
                            <input class="form-control" type="file" id="formFile">
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('Profile')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">{{ __('Setting')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-6"> <strong>{{ __('Full Name')}}</strong>
                                        <br>
                                        <p class="text-muted">Johnathan Deo</p>
                                    </div>
                                    <div class="col-md-3 col-6"> <strong>{{ __('Mobile')}}</strong>
                                        <br>
                                        <p class="text-muted">(123) 456 7890</p>
                                    </div>
                                    <div class="col-md-3 col-6"> <strong>{{ __('Email')}}</strong>
                                        <br>
                                        <p class="text-muted">johnathan@admin.com</p>
                                    </div>
                                    <div class="col-md-3 col-6"> <strong>{{ __('Location')}}</strong>
                                        <br>
                                        <p class="text-muted">London</p>
                                    </div>
                                </div>
                                <hr>
                                <p class="mt-30">{{ __('Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.')}}</p>
                                <p>{{ __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries')}} </p>
                                <p>{{ __('It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.')}}</p>
                                <hr>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="example-name">{{ __('Full Name')}}</label>
                                        <input type="text" placeholder="Johnathan Doe" class="form-control" name="example-name" id="example-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">{{ __('Email')}}</label>
                                        <input type="email" placeholder="johnathan@admin.com" class="form-control" name="example-email" id="example-email">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-password">{{ __('Password')}}</label>
                                        <input type="password" value="password" class="form-control" name="example-password" id="example-password">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-phone">{{ __('Phone No')}}</label>
                                        <input type="text" placeholder="123 456 7890" id="example-phone" name="example-phone" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-message">{{ __('Message')}}</label>
                                        <textarea name="example-message" name="example-message" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-country">{{ __('Select Country')}}</label>
                                        <select name="example-message" id="example-message" class="form-control">
                                            <option>{{ __('London')}}</option>
                                            <option>{{ __('India')}}</option>
                                            <option>{{ __('Usa')}}</option>
                                            <option>{{ __('Canada')}}</option>
                                            <option>{{ __('Thailand')}}</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
