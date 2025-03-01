<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>

    <title>Dashboard | Berry Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
    <meta name="author" content="codedthemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/star-rating.min.css') }}">

    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
        id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/phosphor/duotone/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />



</head>


<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    @include('layouts.sidebar')
    @include('layouts.topbar')


    <div class="pc-container">
        <div class="pc-content">

            @yield('default')
            @yield('production')
            @yield('boundary')
            @yield('direct')
            @yield('indirect')
            @yield('organisation')
            @yield('directformone')
            @yield('directformtwo')
            @yield('directformthree')

            @yield('indirectFirstFormOne')
            @yield('indirectFirstFormTwo')
            @yield('indirectSecondFormOne')
            @yield('indirectSecondFormTwo')
            @yield('indirectSecondFormThree')


        </div>
    </div>



    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/plugins/i18next.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/i18nextHttpBackend.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/multi-lang.js') }}"></script> --}}

    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/icon/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/plugins/wizard.min.js') }}"></script> --}}

    {{-- <script src="{{ asset('assets/js/plugins/tiny-slider.js')}}"></script>
    <script src="{{ asset('assets/js/elements/ac-slider.js')}}"></script> --}}


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const formSelectors = [
                "#companyDetailForm",
                "#directFormOne",
                "#directFormTwo",
                "#directFormThree",
                "#indirectFirstFormOne",
                "#indirectFirstFormTwo",
                "#indirectSecondFormOne",
                "#indirectSecondFormTwo",
                "#indirectSecondFormThree"
            ];

            formSelectors.forEach(selector => {
                const inputs = document.querySelectorAll(`${selector} input`);

                inputs.forEach(input => {
                    input.addEventListener("input", function() {
                        this.classList.add("is-valid"); // Add Bootstrap success class
                        this.classList.remove("is-invalid"); // Remove error class if valid
                    });

                    input.addEventListener("blur", function() { // When user leaves input
                        if (!this.checkValidity()) { // Check if input is valid
                            this.classList.add(
                            "is-invalid"); // Apply error class if invalid
                            this.classList.remove("is-valid");
                        } else {
                            this.classList.add("is-valid");
                            this.classList.remove("is-invalid");
                        }
                    });
                });
            });
        });
    </script>


</body>
<!-- [Body] end -->

</html>
