<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Elakip | Versi 3.0 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/feather/feather.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/mdi/css/materialdesignicons.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/ti-icons/css/themify-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/font-awesome/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/typicons/typicons.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/simple-line-icons/css/simple-line-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/css/vendor.bundle.base.css') }} ">
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }} ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/dist/assets/css/style.css') }} ">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('staradmin/dist/assets/images/logo_den.png') }} " />
    <style>
        body {
            background-image: url('{{ asset('staradmin/dist/assets/images/bg2.jpg')}}'); /* Replace 'your-image-url.jpg' with the actual URL or path to your image */
            background-size: cover; /* Make the image cover the whole page */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Do not repeat the image */
            height: 100vh; /* Full height to cover the viewport */
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        
        <div class="content-wrapper d-flex align-items-center auth px-0">
            
          <div class="row w-100 mx-0" >

            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-2 px-4 px-sm-4">
                <div class="brand-logo">
                  <img src="{{ asset('staradmin/dist/assets/images/logo_den.png') }} " alt="logo" class="mx-auto d-block">
                </div>
                
                <h3 align="center">Elakip Versi 3.0</h3>
                <br>
                
                @if($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <p style="text-align:center;margin-top:0px;margin-bottom:0px;font-size:14px;">{{ $error }}</p>      
            @endforeach
          </div>
          @endif
          <form action="{{ url('/auth') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="input" name="username" id="username" class="form-control  @error('username') is-invalid @enderror" placeholder="Username">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fa fa-user-circle-o"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" id="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fa fa-snowflake-o"></span>
                </div>
              </div>
            </div>
           
            <div class="mt-3 d-grid gap-2">
              <button type="submit" class="btn btn-info btn-block">Sign In</button>
            </div>
          </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('staradmin/dist/assets/vendors/js/vendor.bundle.base.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }} "></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('staradmin/dist/assets/js/off-canvas.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/js/template.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/js/settings.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/js/hoverable-collapse.js') }} "></script>
    <script src="{{ asset('staradmin/dist/assets/js/todolist.js') }} "></script>
    <!-- endinject -->
  </body>
</html>