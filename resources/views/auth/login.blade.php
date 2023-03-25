<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Ebookmadz</title>
    <link rel="stylesheet" type="text/css" href="/.../.../assets/css/bootstrap1.min.css">
    <link rel="stylesheet" type="text/css" href="/.../.../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/.../.../assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="/.../.../assets/css/iofrm-theme29.css">
</head>
<body>

    @include("landing.header.header")
    <div class="form-body without-side">

        <div class="row mt-4">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="assets/images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login to account</h3>
                        <p>Warga sekolah SMK Negeri 2 Indramayu</p>
                        <form method="POST" action="{{ url('/login') }}">
                            @csrf
                            <input class="form-control" type="text" name="username" placeholder="Nomor Induk Siswa" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="/.../.../assets/js/jquery.min.js"></script>
<script src="/.../.../assets/js/popper.min.js"></script>
<script src="/.../.../assets/js/bootstrap.min.js"></script>
<script src="/.../.../assets/js/main.js"></script>
</body>
</html>
