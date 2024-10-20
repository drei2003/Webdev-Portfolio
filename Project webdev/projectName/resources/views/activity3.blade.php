@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Welcome - My Website') <!-- This sets the title section -->

@section('content')
<section>
      <section class="photo-gallery py-4 py-xl-5">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
              <h2>Layout</h2>
              <p class="w-lg-50">
                In this group lab activity we created a layout file by creating
                first a new folder named "Components" In the resources/views
                directory and inside the folder we created a file named
                Layout.blade.php that contains the basic html structure. We also
                created 3 new blade files where each view we extend the layout
                file and include page-specific content.
              </p>
            </div>
          </div>
          <div
            class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos"
            data-bss-baguettebox=""
          >
            <div class="col item">
              <a href="assets/img/act3.png"
                ><img class="img-fluid" src="assets/img/act3.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act3_2.png"
                ><img class="img-fluid" src="assets/img/act3_2.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act3_3.png"
                ><img class="img-fluid" src="assets/img/act3_3.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act3_4.png"
                ><img class="img-fluid" src="assets/img/act3_4.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act3_5.png"
                ><img class="img-fluid" src="assets/img/act3_5.png"
              /></a>
            </div>
            <div class="col item">
              <a href="assets/img/act3_6.png"
                ><img class="img-fluid" src="assets/img/act3_6.png"
              /></a>
            </div>
          </div>
        </div>
      </section>
    </section>
@endsection

