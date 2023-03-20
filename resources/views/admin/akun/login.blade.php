<!doctype html>
<html lang="en">
<head>
    <title>Login Petugas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('login') }}/css/style.css">
    <style>
        span .teks-span {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login Petugas</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Log In</h3>
                            </div>
                        </div>
                        <form action="{{ url('/admin/login') }}" class="login-form" method="POST" id="form-login">
                            @csrf
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <input type="email" class="form-control rounded-left" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-lock"></span>
                                </div>
                                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <div class="w-100 d-flex">
                                    <button type="submit" class="btn btn-primary rounded submit btn-block">
                                        <i class="fa fa-sign-in"></i> Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('/login') }}/js/jquery.min.js"></script>
    <script src="{{ url('/login') }}/js/popper.js"></script>
    <script src="{{ url('/login') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('/login') }}/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</body>
</html>

