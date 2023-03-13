{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard - Mazer Admin Dashboard</title>

        <link rel="stylesheet" href="assets/css/main/app.css" />
        <link rel="stylesheet" href="assets/css/main/app-dark.css" />
        <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"/>
        <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/shared/iconly.css" />
    </head>

    <body>
        <script src="assets/js/initTheme.js"></script>
            <div id="app">
                <div id="sidebar" class="active">
                    <div class="sidebar-wrapper active">
                        <div class="sidebar-header position-relative">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo/logo-light.png" alt="Logo" style="width:100%;" style="height: 100%" srcset=""/></a>
                                </div>

                                <div class="sidebar-toggler x">
                                    <a href="#" class="sidebar-hide d-xl-none d-block">
                                        <i class="bi bi-x bi-middle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        @include("petugas.dashboard.layouts.sidebar")
                        <div id="main">
                            <header class="mb-3">
                                <a href="#" class="burger-btn d-block d-xl-none">
                                    <i class="bi bi-justify fs-3"></i>
                                </a>
                            </header>

                            <div class="page-heading">
                                <h3>Ebook SMK Negeri 2 Indramayu</h3>
                            </div>

                            <div class="page-content">
                                <section class="row">
                                    <div class="col-12 col-lg-9">
                                        <div class="row">
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-body px-4 py-4-5">
                                                        <div class="row">
                                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                <div class="stats-icon blue mb-2 mr-2">
                                                                    <i class="bi bi-person-fill mb-4"></i>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                <h6 class="text-muted font-semibold">Anggota</h6>
                                                                <h6 class="font-extrabold mb-0">183.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-lg-3 col-md-8">
                                                <div class="card">
                                                    <div class="card-body px-4 py-4-5">
                                                        <div class="row">
                                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                <div class="stats-icon green mb-2">
                                                                    <i class="bi bi-book-fill mb-4 ml-4"></i>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                <h6 class="text-muted font-semibold">Ebook</h6>
                                                                <h6 class="font-extrabold mb-0">80.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-body px-4 py-4-5">
                                                        <div class="row">
                                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                <div class="stats-icon red mb-2 mr-8">
                                                                    <i class="bi bi-file-earmark-image mb-4 ml-4"></i>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                <h6 class="text-muted font-semibold">Mading</h6>
                                                                <h6 class="font-extrabold mb-0">112</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-body px-4 py-4-5">
                                                        <div class="row">
                                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                <div class="stats-icon purple mb-2">
                                                                    <i class="bi bi-clipboard2-data-fill mb-4 ml-2"></i>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                <h6 class="text-muted font-semibold">
                                                                    Laporan
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Profile Visit</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="chart-profile-visit"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-xl-4">
                                              <div class="card">
                                                    <div class="card-header">
                                                        <h4>Profile Visit</h4>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-center">
                                                                    <svg
                                                                        class="bi text-primary"
                                                                        width="32"
                                                                        height="32"
                                                                        fill="blue"
                                                                        style="width: 10px">
                                                                        <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill"/>
                                                                    </svg>
                                                                    <h5 class="mb-0 ms-3">Europe</h5>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <h5 class="mb-0">862</h5>
                                                            </div>

                                                            <div class="col-12">
                                                                <div id="chart-europe"></div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-center">
                                                                    <svg
                                                                        class="bi text-success"
                                                                        width="32"
                                                                        height="32"
                                                                        fill="blue"
                                                                        style="width: 10px">
                                                                        <use
                                                                            xlink:href="assets/images/bootstrap-icons.svg#circle-fill"/>
                                                                    </svg>
                                                                    <h5 class="mb-0 ms-3">America</h5>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <h5 class="mb-0">375</h5>
                                                            </div>
                                                                <div class="col-12">
                                                                    <div id="chart-america"></div>
                                                                </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-center">
                                                                    <svg
                                                                    class="bi text-danger"
                                                                    width="32"
                                                                    height="32"
                                                                    fill="blue"
                                                                    style="width: 10px">
                                                                    <use
                                                                        xlink:href="assets/images/bootstrap-icons.svg#circle-fill"/>
                                                                    </svg>
                                                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <h5 class="mb-0">1025</h5>
                                                            </div>
                                                            <div class="col-12">
                                                                <div id="chart-indonesia"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Latest Comments</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-lg">
                                                                <thead>
                                                                    <tr>
                                                                    <th>Name</th>
                                                                    <th>Comment</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="col-3">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-md">
                                                                                    <img src="assets/images/faces/5.jpg" />
                                                                                </div>
                                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="col-auto">
                                                                            <p class="mb-0">
                                                                            Congratulations on your graduation!
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-3">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-md">
                                                                                    <img src="assets/images/faces/2.jpg" />
                                                                                </div>
                                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="col-auto">
                                                                            <p class="mb-0">
                                                                                Wow amazing design! Can you make another
                                                                                tutorial for this design?
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-3">
                                        <div class="card">
                                            <div class="card-body py-4 px-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-xl">
                                                        <img src="assets/images/faces/1.jpg" alt="Face 1" />
                                                    </div>

                                                    <div class="ms-3 name">
                                                        <h5 class="font-bold">John Duck</h5>
                                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Recent Messages</h4>
                                            </div>
                                            <div class="card-content pb-4">
                                                <div class="recent-message d-flex px-4 py-3">
                                                    <div class="avatar avatar-lg">
                                                        <img src="assets/images/faces/4.jpg" />
                                                    </div>

                                                    <div class="name ms-4">
                                                        <h5 class="mb-1">Hank Schrader</h5>
                                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                                    </div>
                                                </div>
                                                <div class="recent-message d-flex px-4 py-3">
                                                    <div class="avatar avatar-lg">
                                                        <img src="assets/images/faces/5.jpg" />
                                                    </div>
                                                    <div class="name ms-4">
                                                        <h5 class="mb-1">Dean Winchester</h5>
                                                        <h6 class="text-muted mb-0">@imdean</h6>
                                                    </div>
                                                </div>
                                                <div class="recent-message d-flex px-4 py-3">
                                                    <div class="avatar avatar-lg">
                                                        <img src="assets/images/faces/1.jpg" />
                                                    </div>
                                                    <div class="name ms-4">
                                                        <h5 class="mb-1">John Dodol</h5>
                                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                                    </div>
                                                </div>
                                                <div class="px-4">
                                                    <button class="btn btn-block btn-xl btn-outline-primary font-bold mt-3">
                                                        Start Conversation
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Visitors Profile</h4>
                                            </div>
                                            <div class="card-body">
                                                <div id="chart-visitors-profile"></div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2021 &copy; Mazer</p>
            </div>
            <div class="float-end">
              <p>
                Crafted with
                <span class="text-danger"><i class="bi bi-heart"></i></span> by
                <a href="https://saugi.me">Saugi</a>
              </p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
  </body>
</html> --}}


@extends('admin.dashboard.layouts.main')

@section("title", "Dashboard")

@section("title_breadcrumb")

<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

@endsection

@section('content')

<div class="alert alert-warning" role="alert">
    <h4 class="alert-heading">Selamat Datang
        <strong>
            {{ Auth::user()->nama }}
        </strong>
    </h4>
    <p>
        di <strong>Aplikasi Ebook</strong>
        Anda Login Sebagai
        <strong>
            Petugas
        </strong>
    </p>
    <hr>
    <p class="mb-0">
        Silahkan Pilih Menu Untuk Memulai Program
    </p>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row mb-2">
            <div class="col-md-4 mb-4">
                <a href="{{ url('/admin/users/editor') }}">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Akun Editor
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ url('/admin/users/penulis') }}">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Akun Penulis
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ url('/admin/users/administrator') }}">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Akun Administrator
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ url('/admin/master/buku') }}">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Buku
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ url('/admin/web/artikel') }}">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Artikel
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ url('/admin/web/carousel') }}">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Carousel
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ url('/admin/web/pesan') }}">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Pesan
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
