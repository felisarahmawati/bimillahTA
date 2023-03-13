<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Apakah {{ Auth::user()->name }} Yakin Ingin Keluar?
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Klik Tombol Keluar Untuk Logout
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal"> Kembali </button>
                <a class="btn btn-primary btn-sm" href="{{('/logout')}}">Keluar
                </a>
            </div>
        </div>
    </div>
</div>
