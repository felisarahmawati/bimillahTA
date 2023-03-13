@extends('admin.dashboard.layouts.main')

@section("title", "Users Anggota")

@section("title_breadcrumb")

<h1 class="h3 mb-0 text-gray-800">Users Anggota</h1>

@endsection

@section("component_css")

<link href="{{ url('/theme') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')

<div class="row">
    <!-- Menampilkan Pesan -->
    <div class="col-md-12">
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <!-- END Pesan -->

    <!-- Tabel -->
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="display: inline;">
                    Data @yield("title")
                </h6>
                <div style="display: inline; float: right;">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalTambah">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th class="text-center">No. Telepon</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Data -->
<div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-plus"></i> Tambah Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="username"> Username </label>
                        <input type="username" class="form-control" name="username" id="username" placeholder="Masukkan Username">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nomer_telepon"> No. Telepon </label>
                                <input type="text" class="form-control" name="nomer_telepon" id="nomer_telepon" placeholder="Masukkan No. Telepon">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender"> Jenis Kelamin </label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="">- Pilih -</option>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="5" placeholder="Masukkan Alamat"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    @include("admin.dashboard.button.btn-tambah")
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

<!-- Edit Data -->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-edit"></i> Edit Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nomer_telepon"> No. Telepon </label>
                                <input type="text" class="form-control" name="nomer_telepon" id="nomer_telepon" placeholder="Masukkan No. Telepon" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender"> Jenis Kelamin </label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="">- Pilih -</option>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="5" placeholder="Masukkan Alamat"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    @include("admin.dashboard.button.btn-edit")
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

<!-- Hapus Data -->
<div class="modal fade" id="exampleModalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-trash"></i> Hapus Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <p>
                        Apakah Anda Yakin Ingin Menghapus Data
                        <strong>
                        </strong>
                    </p>
                </div>
                <div class="modal-footer">
                    @include("admin.dashboard.button.btn-hapus")
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

@endsection

@section("component_js")

<script src="{{ url('/theme') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/theme') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ url('/theme') }}/js/demo/datatables-demo.js"></script>

@endsection
