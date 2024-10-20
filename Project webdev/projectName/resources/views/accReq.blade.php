@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Welcome - My Website') <!-- This sets the title section -->

@section('content')

<!-- Age Verification Modal -->
<div id="ageModal" class="modal"> <!-- Removed inline style for display -->
    <div class="modal-content">
        <h5>Please enter your age to access this page</h5>
        
        <input type="number" class="AgeInput" id="ageInput" placeholder="Enter your age" required>
        <button id="submitAgeButton" class="modal-btn">Submit</button>
    </div>
</div>

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


<!-- Styles for Modal and Form -->
<style>
    .modal {
        display: flex; /* Use Flexbox for centering */
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center; /* Center horizontally */
        align-items: center;    /* Center vertically */
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        width: 35%;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        animation: fadeIn 0.5s ease;
    }

    .modal-content h5 {
        color: black;
        margin-bottom: 50px;
        margin-top: 20px;
    }



    .AgeInput {
        padding: 10px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 1.1em;
    }

    .modal-btn {
        padding: 10px 20px;
        background-color: rgb(33,37,41);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .modal-btn:hover {
        background-color: black;
        transform: scale(1.00);
    }

    .centered-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .box-container {
        width: 400px;
        padding: 20px;
        background-color: #f4f4f4;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    .username-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 1.1em;
    }

    .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: crimson;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .submit-btn:hover {
        background-color: darkred;
        transform: scale(1.05);
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>

<!-- JavaScript to handle modal functionality -->
<script>
    document.getElementById('submitAgeButton').addEventListener('click', function () {
        var age = document.getElementById('ageInput').value;

        if (age >= 21) {
            // Redirect to the restricted area if age is 21 or older
            window.location.href = '/index';
        } else if (age >= 18) {
            // Valid age: hide age modal and show username form
            document.getElementById('ageModal').style.display = 'none';
            // Store age in session
            fetch('/store-age', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ age: age })
            });
        } else {
            // Invalid age: redirect to access denied page
            window.location.href = '/access-denied';
        }
    });
</script>

@endsection
