<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>E-Presensi Geolocation </title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule -->
    <section class="vh-101">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem; position: relative; top: -25px;">
                <div class="card-body p-5 text-center">

                  <div class="login-form mt-1">
                    <div class="section">
                      <img src="{{ asset('assets/img/login/login.png') }}" alt="Login Image" class="form-image">
                    </div>

                    <div class="section mt-1">
                      <h1>E-Presensi</h1>
                    </div>

                    <div class="section mt-1 mb-5">
                        @php
                            $messagewarning = Session::get('warning');
                        @endphp

                        @if (Session::get('warning'))
                        <div class="alert alert-outline-warning">
                          {{ $messagewarning }}
                        </div>
                        @endif

                      <form action="/proseslogin" method="POST">
                        @csrf

                        <!-- Input group with icon for NIK -->
                        <div class="input-group mb-4 mt-4">
                            <span class="input-group-text">
                            <i class="fa fa-drivers-license"></i>
                            </span>
                            <input type="text" id="nik" name="nik" class="form-control" placeholder="NIK" />
                        </div>

                        <!-- Input group for Password -->
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="eyeIcon" onclick="togglePassword()" style="cursor: pointer;">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                        </div>

                        <script>
                            function togglePassword() {
                                const passwordInput = document.getElementById("password"); // Ganti ID di sini
                                const eyeIcon = document.getElementById("eyeIcon").querySelector("i");

                                if (passwordInput.type === "password") {
                                    passwordInput.type = "text";
                                    eyeIcon.classList.remove("fa-eye");
                                    eyeIcon.classList.add("fa-eye-slash"); // Ganti ikon saat password ditampilkan
                                } else {
                                    passwordInput.type = "password";
                                    eyeIcon.classList.remove("fa-eye-slash");
                                    eyeIcon.classList.add("fa-eye"); // Kembalikan ikon saat password disembunyikan
                                }
                            }
                        </script>


                        <!-- Register and Forgot Password links -->
                        <div class="form-links d-flex justify-content-center mt-2 mb-4">
                          <a href="/register">Sign Up Now</a>
                        </div>

                        <hr class="my-4">

                        <!-- Submit Button -->
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">
                          Sign In
                        </button>

                      </form>

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- * App Capsule -->



    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/lib/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap-->
    <script src="{{ asset('assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{ asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset('assets/js/base.js') }}"></script>


</body>

</html>
