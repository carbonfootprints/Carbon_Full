<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>Login | Berry Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="codedthemes" />

     <!-- [Favicon] icon -->
     <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />
     <!-- [Google Font] Family -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
         id="main-font-link" />
     <!-- [phosphor Icons] https://phosphoricons.com/ -->
     <link rel="stylesheet" href="{{ asset('assets/fonts/phosphor/duotone/style.css') }}" />
     <!-- [Tabler Icons] https://tablericons.com -->
     <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
     <!-- [Feather Icons] https://feathericons.com -->
     <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" />
     <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
     <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" />
     <!-- [Material Icons] https://fonts.google.com/icons -->
     <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />
     <!-- [Template CSS Files] -->
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}" />


  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
      <div class="auth-wrapper v3">
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <a href="#" class="d-flex justify-content-center">
                <img src="../assets/images/logo-dark.svg" alt="image" class="img-fluid brand-logo" />
              </a>
              <div class="row">
                <div class="d-flex justify-content-center">
                  <div class="auth-header">
                    <h2 class="text-secondary mt-5"><b>Welcome Back, Eco-Warrior!</b></h2>
                    <p class="f-16 mt-2 text-center">The Earth appreciates your efforts. Let’s calculate, track, and save our home, one footprint at a time 🌿</p>
                  </div>
                </div>
              </div>
              <h5 class="my-4 d-flex justify-content-center text-green-900">Act Today for a Greener Tomorrow</h5>
    
              <!-- Login Form Starts -->
              <form action="{{ route('login') }}" method="POST">
                @csrf <!-- CSRF Token for security -->
    
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email address / Username" required />
                  <label for="email">Email address / Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                  <label for="password">Password</label>
                </div>
                <div class="d-flex mt-1 justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input input-primary" type="checkbox" id="remember" name="remember" />
                    <label class="form-check-label text-muted" for="remember">Remember my footprint</label>
                  </div>
                  <a href="#" class="text-secondary">Forgot Password?</a>
                </div>
                <div class="d-grid mt-4">
                  <button type="submit" class="btn btn-secondary">Lets Dive in..</button>
                </div>
              </form>
              <!-- Login Form Ends -->
    
              <hr />
              <h5 class="d-flex justify-content-center">Don't have an account? <a href="#" class="ms-2">Sign Up</a></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

       
    <script>
      layout_change('light');
    </script>
       
    <script>
      font_change('Roboto');
    </script>
     
    <script>
      change_box_container('false');
    </script>
     
    <script>
      layout_caption_change('true');
    </script>
       
    <script>
      layout_rtl_change('false');
    </script>
     
    <script>
      preset_change('preset-1');
    </script>
    

  </body>
  <!-- [Body] end -->
</html>
