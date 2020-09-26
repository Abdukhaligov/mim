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
      <div class="user-actions">
        <i class='bx bx-log-in'></i>
        <span>Returning customer? <a href="profile-authentication.html">Click here to login</a></span>
      </div>
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
              <h3 class="title">Your Order</h3>
              <div class="order-table table-responsive">
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Total</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td class="product-name">
                      <a href="#">Note Book Mockup</a>
                    </td>
                    <td class="product-total">
                      <span class="subtotal-amount">$250.00</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="product-name">
                      <a href="#">Motivational Book Cover</a>
                    </td>
                    <td class="product-total">
                      <span class="subtotal-amount">$200.00</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="product-name">
                      <a href="#">Book Cover Softcover</a>
                    </td>
                    <td class="product-total">
                      <span class="subtotal-amount">$200.00</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="product-name">
                      <a href="#">Stop and Take a Second</a>
                    </td>
                    <td class="product-total">
                      <span class="subtotal-amount">$150.00</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="order-subtotal">
                      <span>Cart Subtotal</span>
                    </td>
                    <td class="order-subtotal-price">
                      <span class="order-subtotal-amount">$1683.50</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="order-shipping">
                      <span>Shipping</span>
                    </td>
                    <td class="shipping-price">
                      <span>$30.00</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="total-price">
                      <span>Order Total</span>
                    </td>
                    <td class="product-subtotal">
                      <span class="subtotal-amount">$750.00</span>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <div class="payment-box">
                <div class="payment-method">
                  <p>
                    <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                    <label for="direct-bank-transfer">Direct Bank Transfer</label>
                    Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                    Your order will not be shipped until the funds have cleared in our account.
                  </p>
                  <p>
                    <input type="radio" id="paypal" name="radio-group">
                    <label for="paypal">PayPal</label>
                  </p>
                  <p>
                    <input type="radio" id="cash-on-delivery" name="radio-group">
                    <label for="cash-on-delivery">Cash on Delivery</label>
                  </p>
                </div>
                <a href="#" class="default-btn">Place Order</a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- End Checkout Area -->
@endsection