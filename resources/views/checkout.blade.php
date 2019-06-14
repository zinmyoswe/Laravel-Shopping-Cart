@extends('layouts.master')

@section('content')
 <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}

    </style>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  
   	<br><br>
    <h2>DELIVERY METHOD</h2>
    <p class="lead">Free Shipping and Free Returns</p>
  
	<hr>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <div class="cart_sidebar">
        <br>
        <button type="button" class="btn btn-dark btn-lg btn-block" style=" margin-right: :4px;">Checkout <i class="fa fa-arrow-right" style="margin-left: 35px;"></i></button>
        <p class="text-center" style="padding: 7px;">By placing your order, you agree to <br>the Delivery Terms</p>
        <h4 style="font-weight: 600; font-size: 22px; margin-left: 9px;">ORDER SUMMARY:</h4>
        <div class="cart-calculator">
          <table class="table">
          <tr>
            <td>{{Cart::count()}} PRODUCTS</td>
            <td></td>
          </tr>   
          <tr>
            <td>Product total</td>
            <td>${{Cart::subtotal()}}</td>
                        
          </tr>
          <tr>
            <td>Discount ({{session()->get('coupon')['name']}}) : Remove</td>
            <td></td>
          </tr>
          <tr>
            <td>Tax(13%)</td>
            <td>${{Cart::tax()}}</td>
          </tr>
          <tr>
            <td>Delivery</td>
            <td>FREE</td>
          </tr>
          <tr style="font-weight: bold">
            <td>Total</td>
            <td>${{Cart::total()}}</td>
          </tr>
          </table>
        </div>
      </div>
      <br>

        {{--  Coupon start --}}
   <div class="coupon_fr" >

    <div class="coupon_in">
      <table class="table">
        <tr>
          <td>
        <a class="btn btn-link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="color: #000;"><b>PROMO CODE</b></a>
          </td>
          <td><a class="btn btn-link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="color: #000;">
            <i class="fa fa-chevron-down"></i> </a></td>
        </tr>
      </table>
  
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        <form method="post" action="{{route('coupon.store')}}">
          {{csrf_field()}}
          <input type="text" name="coupon_code" class="form-control" placeholder="CODES ARE CASE-SENSITIVE">
          <p style="font-size: 12px; color: grey;">Casing & hyphens need to be exact</p>
          
          <button type="submit" class="btn btn-dark btn-lg btn-block">Apply <i class="fa fa-arrow-right" style="margin-left: 35px;"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
  {{--  Coupon end --}}
      <div class="cart_needhelp">
      <h4>NEED HELP?</h4>
      <p><a href="" style="color: #000;">Shipping</a></p>
      <p><a href="" style="color: #000;">Returns & Exchanges</a></p>
      <p><a href="" style="color: #000;">Contact Us</a></p>
      </div>
        <div class="cart_sidebar2">
    <h4>ACCEPTED PAYMENT METHODS</h4>
    <img src="https://www.adidas.com/on/demandware.static/-/Sites-adidas-US-Library/en_US/dw88ec105e/us_payment_methods.png" width="300px">

    <p> <div class="cart-fontstyle">FREE SHIPPING, NO MINIMUM.
</div>
<a href="" style="color: #000;">Learn More</a></p>

<p> <div class="cart-fontstyle">SECURE CHECKOUT</div>
Pay safely with SSL technology.</p>

<p> <div class="cart-fontstyle">FREE RETURNS*
</div>
Within 30 days<br>
<a href="" style="color: #000;">read more</a></p>
    </div>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">SHIPPING ADDRESS</h4>



      @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
      @endif

      <form id="payment-form" action="{{route('checkout.store')}}" method="post">
        {{csrf_field()}}
        <div class="row">
        
        </div>

        <div class="mb-3">
          <label for="username">Name</label>
         
            <input type="text" name="name" class="form-control" id="username" placeholder="name" >
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" name="email" class="form-control" id="email" >
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

      

        <div class="row">
          
          <div class="col-md-4 mb-3">
            <label for="country">State</label>
                <input type="text" name="province" class="form-control">
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="country">City</label>
                <input type="text" name="city" class="form-control">
            <div class="invalid-feedback">
              Please select a valid city.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" name="postalcode" class="form-control" id="zip" placeholder="" >
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
  {{--       <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div> --}}
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

     {{--    <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div> --}}
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" name="name_on_card" id="cc-name" placeholder="" >
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>

          </div>

      <div class="col-md-12">
        <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
      </div>
        
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" id="complete-order">checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script type="text/javascript">
  (function(){
        // Create a Stripe client.
var stripe = Stripe('{{ config('services.stripe.key') }}');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {
  style: style,
  hidePostalCode: true
});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  //Order complete
  document.getElementById('complete-order').disabled = true;

  var sourceData = {
    owner: {
      name: document.querySelector('input[name="name_on_card"]').value,
      email: document.querySelector('input[name="email"]').value,
      address_line1: document.querySelector('input[name="address"]').value,
      address_city: document.querySelector('input[name="city"]').value,
      address_state: document.querySelector('input[name="province"]').value,
      address_zip: document.querySelector('input[name="postalcode"]').value,
    },
    mandate: {
      // Automatically send a mandate notification email to your customer
      // once the source is charged.
      notification_method: 'email',
    }
  };


  stripe.createToken(card, sourceData).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
  })();
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        {{-- <script src="{{asset('js/form-validation.js')}}"></script> --}}


@endsection


