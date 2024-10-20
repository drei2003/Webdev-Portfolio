@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Welcome - My Website') <!-- This sets the title section -->

@section('content')
    <section>
      <section class="photo-gallery py-4 py-xl-5">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
              <h2>Routes</h2>
              <p class="w-lg-50">
                This lab activity is a group activity where we defined basic
                routes that returns a view for the homepage and display a
                welcome message as well as dditional routes that return a view
                for an "About Us" page, redirect from /home to / (the homepage),
                and display a "Contact Us" form. We also used route parameters
                such as route with a required parameter, with an optional
                parameter and regular expression constraints to the route
                parameters
              </p>
            </div>
          </div>
          <div
            class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos"
            data-bss-baguettebox=""
          >
            <div class="col item">
              <a href="assets/img/act2.jpg"
                ><img class="img-fluid" src="assets/img/act2.jpg"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act2_2.jpg"
                ><img class="img-fluid" src="assets/img/act2_2.jpg"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act2_3.jpg"
                ><img class="img-fluid" src="assets/img/act2_3.jpg"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act2_4.jpg"
                ><img class="img-fluid" src="assets/img/act2_4.jpg"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act2_5.jpg"
                ><img class="img-fluid" src="assets/img/act2_5.jpg"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act2_6.jpg"
                ><img class="img-fluid" src="assets/img/act2_6.jpg"
              /></a>
            </div>
          </div>
        </div>
      </section>
    </section>
@endsection

