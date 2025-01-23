@extends('user_nav')

@section('user_navbar')

    <!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single-product.html">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        

       
        <div class="billing_details">
        <div class="row">
                    <div class="col-lg-8">
                   
                    
                    <!-- @foreach($records as $r)
                    <h3>{{$r->BookId}}</h3>
                    @endforeach -->


                    <div class="container">
        <div class="shadow-sm pt-4 pl-2 pr-2 pb-2">
        <!-- Credit card form tabs -->
        <style>
    /* Custom CSS for active tab */
    .nav-pills .nav-link.active {
      background-color: #37B05D;
    }
  </style>
        <ul role="tablist" class="nav nav-pills rounded nav-fill mb-3" style="background-color: #0A5C46">
            <li class="nav-item"> <a data-toggle="pill" href="#coupon" class="nav-link active" style="color: #333333;"> <i class="fa fa-tags mr-2"></i> Coupon </a> </li>
            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link" style="color: #333333;"> <i class="fa fa-credit-card mr-2"></i> Credit Card</a> </li>
            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link" style="color: #333333;"> <i class="fa fa-bank mr-2"></i> Net Banking </a> </li>
        </ul>
    </div> <!-- End -->
    <!-- Credit card form content -->
    <div class="tab-content">
        <!-- credit card info-->
        <div id="credit-card" class="tab-pane fade pt-3">
            <form role="form">
                <div class="form-group"> <label for="username">
                        <h6>Card Owner</h6>
                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                <div class="form-group"> <label for="cardNumber">
                        <h6>Card number</h6>
                    </label>
                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group"> <label><span class="hidden-xs">
                                    <h6>Expiration Date</h6>
                                </span></label>
                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                <h6>CVV</h6>
                            </label> <input type="text" required class="form-control"> </div>
                    </div>
                </div>
                <div class="card-footer"> <button type="button" class="subscribe btn btn-success btn-block shadow-sm"> Confirm Payment </button>
            </form>
        </div>
    </div> <!-- End -->
    <!-- coupon info -->
    <div id="coupon" class="tab-pane fade show active pt-3">
    <div class="cupon_area">
    <div class="alert alert-success discount-alert ml-5" style="display: none;" role="alert">
            <h3>Congratulations</h3>
            <h5>You got 30% Discout</h5>
        </div>
        <div class="card invalid-coupon ml-5" style="display: none; background-color: #e35f6c;" role="alert">
            <h3>Warning</h3>
            <h5>Invalid Coupon Code.</h5>
        </div>
        <input type="text" id="coupon_input" placeholder="Enter coupon code">
        <a class="tp_btn" href="#" onclick="applyCoupon()">Apply Coupon</a>
    </div>
</div> <!-- End -->
    <!-- bank transfer info -->
    <div id="net-banking" class="tab-pane fade pt-3" style="color: #37B05B;">
        <div class="form-group ">
        <div class="mb-3">
      <label for="paymentType" class="form-label " >Select Payment Type:</label>
      <select id="paymentType" name="payment_type" class="form-select form-control form-control-user"  onchange="showPaymentInput()">
        <option value="">Select Payment Type</option>
        <option value="easypaisa">Easypaisa</option>
        <option value="jazzcash">Jazzcash</option>
      </select>
    </div><br><br>
    <div id="paymentInputContainer">
      <!-- Placeholder for payment type-specific input fields -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function showPaymentInput() {
    const paymentType = document.getElementById("paymentType").value;
    const paymentInputContainer = document.getElementById("paymentInputContainer");
    paymentInputContainer.innerHTML = ""; // Clear previous inputs (if any)

    switch (paymentType) {

        case "easypaisa":
        paymentInputContainer.innerHTML = `
          <div class="mb-3">
            <label for="easypaisaNumber" class="form-label">Easypaisa Number:</label>
            <input type="text" id="easypaisaNumber" name="payment_details" class="form-control form-control-user"  required>
          </div>
        `;
        break;

      case "jazzcash":
        paymentInputContainer.innerHTML = `
          <div class="mb-3">
            <label for="jazzcashNumber" class="form-label">Jazzcash Number:</label>
            <input type="text" id="jazzcashNumber" name="payment_details" class="form-control form-control-user"  required>
          </div>
        `;
        break;

      default:
        // No additional input required
        break;
    }
  }
</script>
                </div>
                </div>
    
</div>
                    </div>
                    
                </div>
                <div class="col-md-4">
    <div class="alert alert-success billing-alert">
        <div class="list">
            <h2>Billing Details</h2>
            <ul>
                <li><a>Books in Cart: <span>{{ $recordCount }}</span></a></li>
                <li><a>Price: <span>Rs.{{ $total }}</span></a></li>
                <li><a><p>Discount Coupon: <span class="not-discount">Rs.00.00</span> <span style="display: none;" class="discount">{{ $total * 30 / 100 }}</span></p></a></li>
                <li><a><p>Total: <span class="no-discount">Rs.{{ $total }}</span> <span style="display: none;" class="Ftotal">{{ $total - ($total * 30 / 100) }}</span></p></a></li>
            </ul>
        </div>
    </div>
                        
    <script>
        function applyCoupon() {
            var couponInputValue = document.getElementById('coupon_input').value.toLowerCase();
            $.ajax({
                url: "{{ route('apply_coupon') }}",
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    coupon: couponInputValue
                },
                success: function(response) {
                    if (response.success) {
                        document.querySelector('.discount').style.display = 'block';
                        document.querySelector('.Ftotal').style.display = 'block';
                        document.querySelector('.discount-alert').style.display = 'block';
                        document.querySelector('.not-discount').style.display = 'none';
                        document.querySelector('.no-discount').style.display = 'none';
                    } else {
                        document.querySelector('.invalid-coupon').style.display = 'block';
                    }
                }
            });
        }
    </script>
    
                    </div>
                    
            </div>
            
        </div>           
</section>


    <!--================End Checkout Area =================-->
    @endsection