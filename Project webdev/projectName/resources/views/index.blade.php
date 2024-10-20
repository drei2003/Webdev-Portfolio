@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Welcome - My Website') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->
    <section>
      <section>
        <div
          data-bss-parallax-bg="true"
          style="
            height: 600px;
            background: linear-gradient(
                40deg,
                black 22%,
                rgba(255, 255, 255, 0)
              ),
              url('assets/img/pexels-merlin-10874584.jpg') bottom / cover;
          "
        >
          <div class="container h-100">
            <div class="row h-100">
              <div
                class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center"
              >
                <div style="max-width: 350px; height: 373.391px">
                  <h1
                    class="text-uppercase fw-bold text-light"
                    style="font-size: 59px"
                  >
                    Web development<br />Portfolio
                  </h1>
                  <p class="text-light my-3">
                    This website will serve as my portfolio of all of my Laravel
                    lab activities showing my&nbsp;understanding of middleware,
                    routes, views, and layout
                  </p>
                  <a
                    class="btn btn-light btn-lg me-2"
                    role="button"
                    href="https://github.com/qwynth/webdev_lab2/tree/main/Herd/LAB2/docs"
                    >Documentation</a
                  ><a
                    class="btn btn-outline-light btn-lg"
                    role="button"
                    href="https://github.com/qwynth/webdev_lab2.git"
                    >Git repository</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <section>
      <div class="container py-4 py-xl-5">
        <div class="row mb-5">
          <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2 style="font-size: 35px">Completed Lab Activities</h2>
            <p class="w-lg-50">These are my completed Laravel lab activities</p>
          </div>
        </div>
        <div
          class="row gx-4 gy-4 row-cols-1 row-cols-md-2 row-cols-xl-2 d-xl-flex justify-content-center"
        >
          <div class="col-auto col-xl-5 col-xxl-4">
            <div
              class="card"
              style="box-shadow: 0px 0px 7px 0px rgb(198, 198, 198)"
            >
              <img
                class="card-img-top w-100 d-block fit-cover"
                style="height: 200px"
                src="assets/img/act1_3.jpg"
              />
              <div class="card-body p-4">
                <p class="text-dark-emphasis card-text mb-0">Lab Activity 1</p>
                <h4 class="card-title">Laravel Setup</h4>
                <p class="card-text">
                  In this activity I install Laravel along with its dependencies
                  and&nbsp;Create a Laravel project
                </p>
                <div class="d-flex">
                  <a class="btn btn-dark" role="button" href="{{ url('/activity1') }}"
                    >View</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto col-xl-5 col-xxl-4">
            <div
              class="card"
              style="box-shadow: 0px 0px 7px 0px rgb(198, 198, 198)"
            >
              <img
                class="card-img-top w-100 d-block fit-cover"
                style="height: 200px"
                src="assets/img/act2.jpg"
              />
              <div class="card-body p-4">
                <p class="text-dark-emphasis card-text mb-0">Lab Activity 2</p>
                <h4 class="card-title">Routes</h4>
                <p class="card-text">
                  In this activity I&nbsp;defined the basic routes and used
                  route parameters
                </p>
                <div class="d-flex">
                  <a class="btn btn-dark" role="button" href="{{ url('/activity2') }}"
                    >View</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto col-xl-5 col-xxl-4">
            <div
              class="card"
              style="box-shadow: 0px 0px 7px 0px rgb(198, 198, 198)"
            >
              <img
                class="card-img-top w-100 d-block fit-cover"
                style="height: 200px"
                src="assets/img/act3_4.png"
              />
              <div class="card-body p-4">
                <p class="text-dark-emphasis card-text mb-0">Lab Activity 3</p>
                <h4 class="card-title">Layout</h4>
                <p class="card-text">
                  In this activity I created a&nbsp;a Layout File and views as
                  well as updating the routes
                </p>
                <div class="d-flex">
                  <a class="btn btn-dark" role="button" href="{{ url('/activity3') }}"
                    >View</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto col-xl-5 col-xxl-4">
            <div
              class="card"
              style="box-shadow: 0px 0px 7px 0px rgb(198, 198, 198)"
            >
              <img
                class="card-img-top w-100 d-block fit-cover"
                style="height: 200px"
                src="assets/img/act4.png"
              />
              <div class="card-body p-4">
                <p class="text-dark-emphasis card-text mb-0">
                  Lab Activity 4&nbsp;
                </p>
                <h4 class="card-title">Middleware</h4>
                <p class="card-text">
                  In this activity I created and register new middleware with
                  Parameters and assign Middleware to Routes
                </p>
                <div class="d-flex">
                  <a class="btn btn-dark" role="button" href="{{ url('/activity4') }}"
                    >View</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection



