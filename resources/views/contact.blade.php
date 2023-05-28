@extends ('layouts.standard')

@section('content')

@include('inc.disclaimer')

<!--Contact Header-->
<section class="container-fluid p-0 bg-image text-center text-white" style="background-image: url('images/hero-coffee.webp'); background-position: center; height: 25vh; margin-top: 56px;">
    <div class="d-flex w-100 h-100 mask justify-content-center align-items-center" style="background-color: rgba(0,0,0,.6)">
        <div class="row">
            <div class="col">
                <h1>Roast Coffee Shop</h1>
                <br><br><br>
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="row d-flex gap-5 justify-content-center">
        <div class="col-12 col-lg-5 bg-light shadow p-3">
            <h1 class = "text-center">Send Us a Message</h1>
            <form action="">
                <div class="row px-5">
                    <div class="col">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name...">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject...">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" placeholder="Message..." id="" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-5 text-center bg-light shadow p-3">
            <h1>Alternate Contact Methods</h1>
            <br>
            <h3><u>Find us on Social Media</u></h3>
            <div class="d-flex gap-5 py-3 justify-content-center">
                <h1><a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a></h1>
                <h1><a href="https://www.facebook.com"><i class="bi bi-twitter"></i></a></h1>
                <h1><a href="https://www.facebook.com"><i class="bi bi-instagram"></i></a></h1>
            </div>
            <br>
            <h3><u>Call Us</u></h3>
            <p><strong>(616) 123-4567</strong></p>
            <br>
            <br>
            <h3><u>Email Us</u></h3>
            <p><strong>roastcoffeeshop@gmail.com</strong></p>
            <br>
        </div>
    </div>
</section>

@endsection