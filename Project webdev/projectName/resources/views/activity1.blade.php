@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Welcome - My Website') <!-- This sets the title section -->

@section('content')
        <section>
            <section class="photo-gallery py-4 py-xl-5">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h2>Setup</h2>
                            <p class="w-lg-50">
                                In this lab activity I installed and setup
                                Laravel&nbsp;along with its dependencies. Set up
                                the .env file to include database connection
                                details and created at least 3 views for the
                                homepage, about and content.&nbsp;
                            </p>
                        </div>
                    </div>
                    <div
                        class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos"
                        data-bss-baguettebox=""
                    >
                        <div class="col item">
                            <a href="assets/img/act1.jpg"
                                ><img
                                    class="img-fluid"
                                    src="assets/img/act1.jpg"
                            /></a>
                        </div>
                        <div class="col item">
                            <a href="assets/img/act1_2.jpg"
                                ><img
                                    class="img-fluid"
                                    src="assets/img/act1_2.jpg"
                            /></a>
                        </div>
                        <div class="col item">
                            <a href="assets/img/act1_3.jpg"
                                ><img
                                    class="img-fluid"
                                    src="assets/img/act1_3.jpg"
                            /></a>
                        </div>
                        <div class="col item">
                            <a href="assets/img/act1_4.jpg"
                                ><img
                                    class="img-fluid"
                                    src="assets/img/act1_4.jpg"
                            /></a>
                        </div>
                        <div class="col item">
                            <a href="assets/img/act1_5.jpg"
                                ><img
                                    class="img-fluid"
                                    src="assets/img/act1_5.jpg"
                            /></a>
                        </div>
                        <div class="col item">
                            <a href="assets/img/act1_6.jpg"
                                ><img
                                    class="img-fluid"
                                    src="assets/img/act1_6.jpg"
                            /></a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

  @endsection

