@extends('admin.dashboard.layouts.main')

@section("title", "Buku")

@section("title_breadcrumb")

<h1 class="h3 mb-0 text-gray-800">Buku</h1>

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
                    <a href="" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">ID Buku</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th class="text-center">Tanggal Terbit</th>
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

<!-- Modal Hapus -->
{{-- @foreach ($buku as $item)
<div class="modal fade" id="exampleModalHapus-{{ $item->id_buku }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <form action="{{ url('/admin/master/buku/'.$item->id_buku) }}" method="POST">
                @method("DELETE")
                @csrf
                <div class="modal-body">
                    <p>
                        Apakah Anda Yakin Untuk Menghapus Data
                        <strong>{{ $item->judul_buku }}</strong> ?
                    </p>
                </div>
                <div class="modal-footer">
                    @include("admin.components.btn-hapus")
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach --}}
<!-- END -->

@endsection

@section("component_js")

<script src="{{ url('/theme') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/theme') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ url('/theme') }}/js/demo/datatables-demo.js"></script>

@endsection
