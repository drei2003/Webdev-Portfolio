@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Welcome - My Website') <!-- This sets the title section -->

@section('content')
<section>
      <section class="photo-gallery py-4 py-xl-5">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
              <h2>Middleware</h2>
              <p class="w-lg-50">
                In this group activity we created and registered a new
                middleware by using the command line to create new middleware
                named CheckAge and LogRequests. We also assign middleware to
                routes by creating a route group that assigns &nbsp;the CheckAge
                middleware to a specific route and we also created a middleware
                to accept a parameter parameters.
              </p>
            </div>
          </div>
          <div
            class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos"
            data-bss-baguettebox=""
          >
            <div class="col item">
              <a href="assets/img/act4.png"
                ><img class="img-fluid" src="assets/img/act4.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act4_2.png"
                ><img class="img-fluid" src="assets/img/act4_2.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act4_3.png"
                ><img class="img-fluid" src="assets/img/act4_3.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act4_4.png"
                ><img class="img-fluid" src="assets/img/act4_4.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act4_5.png"
                ><img class="img-fluid" src="assets/img/act4_5.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act4_6.png"
                ><img class="img-fluid" src="assets/img/act4_6.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act4_7.png"
                ><img class="img-fluid" src="assets/img/act4_7.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act4_8.png"
                ><img class="img-fluid" src="assets/img/act4_8.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act4_9.png"
                ><img class="img-fluid" src="assets/img/act4_9.png"
              /></a>
            </div>
          </div>
        </div>
      </section>
    </section>
@endsection

