@extends('layouts.main') 
@section('title', 'Distributor Request Keys')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-dollar-sign bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('Request for Keys')}}</h5>
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

        
        <section class="pricing">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                    <h6 class="card-price text-center">0<span class="period">/month</span></h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Free of Cost</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Only 5 Policies</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>31 Days Valid</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                    </ul>
                    <a href="#" class="btn btn-block btn-secondary text-uppercase">Button</a>
                  </div>
                </div>
              </div>
              <!-- Plus Tier -->
              <div class="col-lg-4">
                <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Regular Policy</h5>
                    <h6 class="card-price text-center">20,000<span class="period">/month</span></h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>200 Rupees Per Policy</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Only 100 Policies</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>365 Days Valid</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                    </ul>
                    <a href="#" class="btn btn-block btn-secondary text-uppercase">Button</a>
                  </div>
                </div>
              </div>
              <!-- Pro Tier -->
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Smart Policy</h5>
                    <h6 class="card-price text-center">30,000<span class="period">/month</span></h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>300 Rupees Per Policy</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Only 100 Policies</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>365 Days Valid</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                    </ul>
                    <a href="#" class="btn btn-block btn-secondary text-uppercase">Button</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
 
    </div>
@endsection
