@extends ('layouts.standard')

@section('content')

@include('inc.disclaimer')

<!--Hero Section-->
<section id="hero" class="container-fluid d-flex position-relative p-5 text-center bg-image bg-light border-bottom border-dark justify-content-center align-items-center">
  <div class="container p-3" style="">
    <div class="d-flex justify-content-center align-items-center h-100 mb-5 pb-5">
      <div class="text-dark text-center p-3 shadow" style="background-color: #FBFBFB;">
        <h1 class="mb-3 text-uppercase">Premium roast coffee</h1>
        <h4 class="mb-5">The coffee and community you love with the tasty treats you desire</h4>
        <a class="btn btn-outline-dark btn-lg" href="/menu" role="button">View Our Menu</a>
      </div>
    </div>
  </div>
  <a href="#menu" class="position-absolute bottom-0 mb-3"><h1><i class="bi bi-caret-down-fill"></i></h1></a>
</section>

<!--Menu Section-->
<section id="menu" class="container-fluid p-5 bg-light border-bottom border-dark">
  <div class="row gap-5 my-5 py-5 justify-content-center align-items-center text-center">
    <div class="col-12 col-md-3">
      <img src="/images/coffee-product-img.png" alt="" width="150px" height="125px">
      <h3 class = "mt-3">Rich Coffee</h3>
      <p>Specialty coffee blends which will surely have you coming back for a refill.  Always roasted
        to order for 100% satisfaction
      </p>
      <div class="text-center">
        <a class="btn btn-outline-dark btn-md" href="/menu" role="button">View Coffee</a>
      </div>
    </div>
    <div class="col-12 col-md-3">
      <img src="/images/cupcake-product-img.png" alt="" width="150px" height="125px">
      <h3 class = "mt-3">Savory Sweets</h3>
      <p>Hand made treats crafted to complement each drink and deliver a first bite you'll never forget</p>
      <div class="text-center">
        <a class="btn btn-outline-dark btn-md" href="/menu" role="button">View Eats</a>
      </div>
    </div>
    <div class="col-12 col-md-3">
      <img src="/images/tea-product-img.png" alt="" width="150px" height="125px">
      <h3 class = "mt-3">Relaxing Teas</h3>
      <p>Try one of our dozens of organic teas - imported from around the world for your enjoyment</p>
      <div class="text-center">
        <a class="btn btn-outline-dark btn-md" href="/menu" role="button">View Teas</a>
      </div>
    </div>
  </div>
  <div class="row mb-5">
    <div class="text-center">
      <a class="btn btn-outline-dark btn-lg" href="/menu" role="button">Browse Our Complete Menu</a>
    </div>
  </div>
</section>

<!--Catering Info Section-->
<div id="catering" class="container-fluid p-5 bg-image">
  <div class="row gap-5 h-100 align-items-center justify-content-center">
    <div class="col-12 col-lg-5 mask p-3 text-white text-center border border-dark" style="background-color: rgba(0,0,0,.7);">
      <h1 class = "text-center mb-3">Catering</h1>
      <p>Get all of the mouth watering drinks and treats that you love professionally catered directly to your event!</p>
      <p>We offer highly competitive prices and packages to ensure your day is even more special.</p>
      <p>Perfect for weddings, parties, business meetings, and more!</p>
      <div class="text-center mt-5">
        <a class="btn btn-outline-light btn-lg" href="/catering" role="button">Learn More</a>
      </div>
    </div>
    <div class="col-12 col-lg-5 mask p-3 text-white border border-dark" style="background-color: rgba(0,0,0,.7);">
      <h1 class = "text-center mb-5">Reserve Your Spot Now</h1>
      <form>

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
          <div class="col">
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email...">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="(xxx) xxx-xxxx">
            </div>
          </div>
        </div>

        <div class="row"> 
          <div class="col">
            <div class="mb-3">
              <label for="date" class="form-label">Date</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="location" class="form-label">Location</label>
              <input type="text" class="form-control" id="location" name="location" placeholder="Address...">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
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

        <div class="row">
          <div class="col">
            <label for="notes">Comments</label>
            <textarea class="form-control" rows="5" placeholder="Additional notes..." id="notes" name="notes"></textarea>
          </div>
        </div>
        
        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Reserve Spot</button>
        </div>

        <div class="row text-center mt-3">
          <p class = "fw-light">Please note that a reservation is not guaranteed until it has been confirmed by the store</p>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Store Info Section-->
<div class="container-fluid p-5 bg-light">
  <div class="row justify-content-evenly text-center">
    <div class="col-12 col-md-4">
      <i class="bi bi-geo-alt-fill" style="font-size: 4rem;"></i>
      <h3 class = ""><u>Visit Us</u></h3>
      <p>1234 Fulton St. Grand Rapids, MI 49501</p>
    </div>
    <div class="col-12 col-md-4">
      <i class="bi bi-clock-fill" style="font-size: 4rem;"></i>
      <h3 class = ""><u>Store Hours</u></h3>
      <div class="col text-nowrap">
        <p>Sunday: 8am - 3pm</p>
        <p>Monday: 8am - 8pm</p>
        <p>Tuesday: 8am - 8pm</p>
        <p>Wednesday: 8am - 8pm</p>
        <p>Thursday: 8am - 8pm</p>
        <p>Friday: 8am - 10pm</p>
        <p>Saturday: 8am - 10pm</p>
      </div>
    </div>
    <div class="col-12 col-md-4 text-nowrap">
      <i class="bi bi-telephone-fill" style="font-size: 4rem;"></i>
      <h3 class = ""><u>Contact Us</u></h3>
      <p>Phone: (616) 123-4567</p>
      <div class="text-center">
        <a class="btn btn-outline-dark btn-md" href="/contact" role="button">Send Us a Message</a>
      </div>
    </div>
  </div>
</div>

@endsection