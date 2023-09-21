<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alamni</title>

    {{-- Meta Tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">

    {{-- Dark mode --}}
    @include('dark-mode')

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.ico') }}">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    {{-- Plugins CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('template/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/vendor/bootstrap-icons/bootstrap-icons.css') }}">

    {{-- Theme CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/style.css') }}">
</head>

<body>

{{-- MAIN START --}}
<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid">
            <div class="row">
                {{-- LEFT START --}}
                <div
                    class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                    <div class="p-3 p-lg-5">
                        {{-- Title --}}
                        <div class="text-center">
                            <h2 class="fw-bold">Welcome to our largest community</h2>
                            <p class="mb-0 h6 fw-light">Let's learn something new today!</p>
                        </div>
                        {{-- SVG Image --}}
                        <img src="{{ asset('template/images/element/02.svg') }}" class="mt-5" alt="">
                        {{-- Info --}}
                        <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                            {{-- Avatar group --}}
                            <ul class="avatar-group mb-2 mb-sm-0">
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{ asset('template/images/avatar/01.jpg') }}"
                                         alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{ asset('template/images/avatar/02.jpg') }}"
                                         alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{ asset('template/images/avatar/03.jpg') }}"
                                         alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{ asset('template/images/avatar/04.jpg') }}"
                                         alt="avatar">
                                </li>
                            </ul>
                            {{-- Content --}}
                            <p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ Students joined us, now it's your turn.</p>
                        </div>
                    </div>
                </div>
                {{-- LEFT END --}}

                {{-- RIGHT START --}}
                @yield('right')
                {{-- RIGHT START --}}


            </div>
        </div>
    </section>
</main>
{{-- MAIN END --}}

{{-- Back to top --}}
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

{{-- Bootstrap JS --}}
<script src="{{ asset('template/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

{{-- Template Functions --}}
<script src="{{ asset('template/js/functions.js') }}"></script>

</body>
</html>
