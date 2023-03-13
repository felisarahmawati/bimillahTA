@php
    use Carbon\Carbon;
@endphp
@extends('admin.dashboard.layouts.main')

@section("title", "Laporan Mading")

@section("title_breadcrumb")

<h1 class="h3 mb-0 text-gray-800">
    Laporan Mading
</h1>

@endsection

@section("component_css")

<link href="{{ url('/theme') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')

<div class="row">
    @if (count($errors) > 0)
    <div class="col-md-12">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <!-- Menampilkan Pesan -->
    <div class="col-md-12">
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <!-- END Pesan -->

    <div class="col-md-12">
        <div class="card shadow mb-4">
            <form action="" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="tanggal_mulai"> Tanggal Mulai </label>
                            <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" value="{{ empty($tanggal_mulai) ? '' : $tanggal_mulai }}">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_akhir"> Tanggal Akhir </label>
                            <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir" value="{{ empty($tanggal_akhir) ? '' : $tanggal_akhir }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-search"></i> Cari Data
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel -->
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Data @yield("title")
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th class="text-center">Judul Mading</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END Tabel -->
</div>

@endsection

@section("component_js")

<script src="{{ url('/theme') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/theme') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ url('/theme') }}/js/demo/datatables-demo.js"></script>

@endsection
