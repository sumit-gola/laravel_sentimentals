<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>Sign In </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/brands/logo/TCS-Sentiments-logo-Pink_c612ca56-9d39-468a-8502-275d4d99643c_150x.webp ') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper ">
        <!-- auth page bg -->
    

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-1 ">
                            <div>
                                <a href="#" class="d-inline-block auth-logo">
                                    <img  height="100" src="{{ asset('assets/images/brands/logo/TCS-Sentiments-logo-Pink_c612ca56-9d39-468a-8502-275d4d99643c_150x.webp') }} " alt="" height="20">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center ">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-bg-fill ">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to .</p>
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger"> {{ $error }}</div>
                                    @endforeach
                               
                                   
                                </div>
                                <div class="p-2 mt-4">
                                    <form class="needs-validation"  novalidate action="{{ route('admin.login') }}"  method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="username" placeholder="Enter Email" required>
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="auth-pass-reset-basic.html"  class="text-muted">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" required>
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            
                                        </div>                                     
                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Sign In</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Don't have an account ? <a href="{{ route('admin.signup') }}" class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> . Crafted with <i class="mdi mdi-heart text-danger"></i> by LNBird
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- particles js -->
    <script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
    <!-- particles app js -->
    <script src="{{ asset('assets/js/pages/particles.app.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>

    <!-- password-addon init -->
    <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
</body>


</html>