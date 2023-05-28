@extends ('layouts.standard')

@section('content')

@include('inc.disclaimer')

<!--Catering Header-->
<section class="container-fluid p-0 bg-image text-center text-white" style="background-image: url('images/banner-catering.jpg'); background-position: center; height: 25vh; margin-top: 56px;">
    <div class="d-flex w-100 h-100 mask justify-content-center align-items-center" style="background-color: rgba(0,0,0,.6)">
        <div class="row">
            <div class="col">
                <h1>Roast Coffee Shop</h1>
                <br><br><br>
                <h1>Catering</h1>
            </div>
        </div>
    </div>
</section>

<!--Services section-->
<section class="container d-flex flex-column my-5 pb-5 gap-5 text-center">
    <div class="row">
        <div class="col">
            <h1>Our Services</h1>
        </div>
    </div>
    <div class="row gap-5 py-5 mb-5 justify-content-evenly align-items-center">
        <div class="col-5">
            <h3>Full Catering</h3>
            <p>Let your tastebuds travel around the world as our professional baristas take you on a tour of <strong>20+</strong> different
                coffee flavors and delicious treat pairings
            </p>
        </div>
        <div class="col-5">
            <img class = "img-fluid rounded shadow"src="/images/barista.jpg" alt="">
        </div>
    </div>
    <div class="row py-5 my-5 gap-5 justify-content-evenly align-items-center">
        <div class="col-5">
            <img class = "img-fluid rounded shadow"src="/images/delivery.jpg" alt="">
        </div>
        <div class="col-5">
            <h3>Delivery</h3>
            <p>No matter where you are, we have you covered.  Get all of our premium products
                delivered directly to your event.  On time, every time.
            </p>
        </div>
    </div>
    <div class="row pt-5 mt-5 gap-5 justify-content-evenly align-items-center">
        <div class="col-5">
            <h3>Order & Pickup</h3>
            <p>Planning a party in advance?  Don't forget to add all of our latest coffees, teas, espressos, and baked-goods to your list!</p>
        </div>
        <div class="col-5">
            <img class = "img-fluid rounded shadow"src="/images/baked-goods.jpg" alt="">
        </div>
    </div>
</section>

<section id="catering-order" class="container-fluid d-flex justify-content-center align-items-center my-5" style="padding: 0;">
    <div class="container-fluid mask p-5 text-white border border-dark" style="background-color: rgba(0,0,0,.5);">
        <h1 class = "text-center mb-5">Get Your Free Quote Today</h1>
        <form class="" id="catering-order-form">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name...">
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name...">
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email...">
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="(xxx) xxx-xxxx">
              </div>
            </div>
          </div>
    
          <div class="row"> 
            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date">
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Address...">
              </div>
            </div>
          </div>
    
          <div class="row justify-content-center">
            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label for="num_guests" class="form-label">Number of Guests</label>
                <select class="form-select" name="num_guestss">
                  <option selected value="1-25">1-25</option>
                  <option value="26-75">26-75</option>
                  <option value="76-150">76-150</option>
                  <option value="150">150+</option>
                </select>
              </div>
            </div>
          </div>
    
          <div class="row justify-content-center">
            <div class="col-12 col-md-8">
              <label for="notes">Comments</label>
              <textarea class="form-control" rows="5" placeholder="Additional notes..." id="notes" name="notes"></textarea>
            </div>
          </div>
          
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
    
          <div class="row text-center mt-3">
            <p class = "fw-light">*Please note that a reservation is not guaranteed until it has been confirmed by the store</p>
          </div>
        </form>
      </div>
    </div>
</section>

@endsection