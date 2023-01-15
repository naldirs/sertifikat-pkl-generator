    <div class="modal fade" id="tambahnilaikeahlian">
          <div class="modal-dialog">
            <div class="box box-info">
         
              <form action="{{ route('simpan.nilai.keahlian', $siswa->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

                <div class="box-header with-border">
                  <h3 class="box-title"><b>Nilai</b> Keahlian Yang Ditempuh</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                          <label for="input">Nama komponen keahlian</label>
                          <input name="nama_komponen" type="text" class="form-control" id="input" placeholder="Masukan nama komponen" required="">
                        </div>             
                    </div>         
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="input">Nilai</label>
                          <input name="nilai" type="number" class="form-control" id="input" placeholder="0-100" max="100" required="">
                        </div>             
                    </div>
                             
                    <!-- /.col -->
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



     <div class="modal fade" id="editnilaikeahlian">
          <div class="modal-dialog">
            <div class="box box-info">
         
              <form action="{{ route('update.nilai.keahlian')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <input type="hidden" name="id_nilaikeahlian" id="id_nilaikeahlian">

                <div class="box-header with-border">
                  <h3 class="box-title"><b>Nilai</b> Keahlian Yang Ditempuh</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                          <label for="input">Nama komponen keahlian</label>
                          <input name="nama_komponen" type="text" class="form-control" id="nama_komponen" placeholder="Masukan nama komponen" required="">
                        </div>             
                    </div>         
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="input">Nilai</label>
                          <input name="nilai" type="number" class="form-control" id="nilai" placeholder="0-100" max="100" required="">
                        </div>             
                    </div>
                             
                    <!-- /.col -->
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
