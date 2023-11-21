<div class="modal fade" id="tambahpagebelakang">
    <div class="modal-dialog">
        <div class="box box-info">

            <form method="POST" action="{{route('tambah.pagebelakang')}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="box-header with-border">
                    <h3 class="box-title"><b>Tambah</b> Pembina Utama</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input">Nama</label>
                                <input id="nama" type="text" class="form-control" name="nama" value="Dr. Sudirman, M.Si"
                                    autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input">NIP</label>
                                <input id="nip" type="text" class="form-control" name="nip"
                                    value="19611231 199003 1 061" autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input">Jabatan</label>
                                <input id="jabatan" type="text" class="form-control" name="jabatan" value="Sekertaris"
                                    autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input">Keterangan 1</label>
                                <input id="ket1" type="text" class="form-control" name="ket1" value="" autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input">Keterangan 2</label>
                                <input id="ket2" type="text" class="form-control" name="ket2" value="" autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input">Sebagai</label>
                                <input id="sebagai" type="text" class="form-control" name="sebagai" value="Pembina Tk.I"
                                    autofocus>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-flat">Simpan</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>