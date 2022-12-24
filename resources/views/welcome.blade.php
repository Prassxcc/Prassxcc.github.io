<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>prassx</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: #dfdfdf">
        @include('navbar.index')

          <main>
            <!-- start header -->
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row align-items-center g-5 py-5">
                  <div class="col-10 col-sm-8 col-lg-6">
                    <img src="avatar_face_man_boy_profile_smiley_happy_people_icon_181659.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                  </div>
                  <div class="col-lg-6">
                    {{-- <h1 class="display-6 fw-bold lh- 1 mb-1">Responsive left-aligned hero with image</h1> --}}
                    <h1 class="display-6 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                      <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end header -->

              <hr size="1px">
              {{-- <div class="judul" style="padding-left: 18rem;
              padding-top: 3rem;">
                <h3>
                    Projects
                </h3>
              </div> --}}
              <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold">Centered screenshot</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                  </div>
                </div>
                <div class="overflow-hidden" >
                  <div class="container px-5">
                    <img src="image 4.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="1050" height="600" loading="lazy">
                  </div>
                </div>
              </div>
              <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold">Centered screenshot</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                  </div>
                </div>
                <div class="overflow-hidden" >
                  <div class="container px-5">
                    <img src="image 4.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="1050" height="600" loading="lazy">
                  </div>
                </div>
              </div>
              <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold">Centered screenshot</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                  </div>
                </div>
                <div class="overflow-hidden" >
                  <div class="container px-5">
                    <img src="image 4.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="1050" height="600" loading="lazy">
                  </div>
                </div>
              </div>
          </main>

          @include('footer.index')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
