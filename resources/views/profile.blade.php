@extends('layouts.app')

@section('content')
  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg1"
           @if(!Auth::user()->subscriber())
           style="padding: 140px 0px 0px 0px;"
           @else
           style="padding: 70px 0px 0px 0px;"
    @endif>
    <div class="container">
      <div class="page-title-content">
        <h1 title="My profile" style="font-size: 80px;">My profile</h1>
      </div>
    </div>
  </section>
  <!-- End Page Title Area -->
  <!-- Start Checkout Area -->
  <section class="checkout-area ptb-100">
    <div class="container">
      <form>
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="billing-details">
              <h3 class="title">Billing Details</h3>
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label>Country <span class="required">*</span></label>
                    <div class="select-box">
                      <select>
                        <option>United Arab Emirates</option>
                        <option>China</option>
                        <option>United Kingdom</option>
                        <option>Germany</option>
                        <option>France</option>
                        <option>Japan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>First Name <span class="required">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Last Name <span class="required">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="form-group">
                    <label>Address <span class="required">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="form-group">
                    <label>Town / City <span class="required">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>State / County <span class="required">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Postcode / Zip <span class="required">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Email Address <span class="required">*</span></label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Phone <span class="required">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="create-an-account">
                    <label class="form-check-label" for="create-an-account">Create an account?</label>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ship-different-address">
                    <label class="form-check-label" for="ship-different-address">Ship to a different address?</label>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="order-details">
              <h3 class="title">Your status</h3>
              <div class="payment-box">
                <div class="payment-method">
                  @if(!$data["user"]->subscriber)
                    <h1>Please subscribe to this channels</h1>
                    @foreach($data["user"]->requiredSubscriptions as $sponsor)
                      <div>
                        <h2 class="text-center" style="text-decoration: underline">
                          <a target="_blank" href="{{$sponsor->link}}">{{$sponsor->name}}</a>
                        </h2>
                      </div>
                      <a class="default-btn" href="{{ route('youtube-create-url')}}">CHECK</a>
                    @endforeach
                  @else
                    <h1>Your account is activated</h1>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- End Checkout Area -->
@endsection