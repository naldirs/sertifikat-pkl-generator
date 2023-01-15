 <div class="modal fade" id="cari">
          <div class="modal-dialog">
            <div class="box box-info">
         
              <form action="{{ route('cari')}}" method="get" enctype="multipart/form-data">
             

                <div class="box-header with-border">
                  <h3 class="box-title"><b>Advenced</b> Search</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-4">
                        <label>Jenis Sertifikat</label>
                        <div class="form-group">
                          <select class="form-control" name="sertifikat">
                            <option value="">Semua Sertifikat</option>
                            <option value="Praktek Kerja Industri">PKI</option>
                            <option value="Praktek Kerja Lapangan">PKL</option>
                            <option value="Kuliah Kerja Nyata">KKN</option>
                          </select>
                        </div>             
                    </div>         
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="form-group">
                          <label>No. Sertifikat</label>
                          <input name="no_sertifikat" type="number" class="form-control" id="input" placeholder="No. Sertifikat" >
                        </div>             
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" type="text" class="form-control" id="input" placeholder="Namat" >
                        </div>             
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input name="tmpt_lahir" type="text" class="form-control" id="input" placeholder="tempat lahir" >
                        </div>             
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Sekolah/Universitas</label>
                          <input name="asal_sklh" type="text" class="form-control" id="input" placeholder="Sekolah/Universitas" >
                        </div>             
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                           <select class="form-control" name="kelamin">
                            <option value="">Semua Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>             
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                          <label>Tahun Lahir</label>

                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input name="tgl_lahir" type="year" class="form-control pull-right" id="datepicker" >
                              </div>
                              <!-- /.input group -->
                            </div>              
                    </div>  

                    <div class="col-md-7">
                        <div class="form-group">
                          <div class="form-group">
                          <label>Program Keahlian/Studi</label>
                          <input name="asal_sklh" type="text" class="form-control" id="input" placeholder="Sekolah/Universitas" >
                        </div>  
                          </div>           
                      </div>

                    <div class="col-md-7">
                                   
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Bulan dan Tahun Masuk</label>

                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input name="tgl_masuk" type="month" class="form-control pull-right" id="datepicker" >
                            </div>
                            <!-- /.input group -->
                          </div>           
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Bulan dan Tahun Selesai</label>

                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input name="tgl_selesai" type="month" class="form-control pull-right" id="datepicker" >
                            </div>
                            <!-- /.input group -->
                          </div>           
                      </div>

                    

                             
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                      <button type="submit" class="btn btn-info btn-flat">Cari</button>
                </div>
 
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
     </div>
