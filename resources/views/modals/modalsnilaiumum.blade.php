 @if(empty($nilai_umum))

 @else
 <div class="modal fade" id="editnilaiumum">
          <div class="modal-dialog">
            <div class="box box-info">
         
              <form action="{{ route('update.nilai.umum', $siswa->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

                <div class="box-header with-border">
                  <h3 class="box-title"><b>Nilai</b> Umum & Kompetensi</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-6">
                
                          <div class="form-group">
                            <label for="input">1. Disiplin</label> (Umum)
                          <input name="disiplin" type="number" class="form-control" id="disiplin" placeholder="Masukan nilai 0-100" required="" max="100">
                          </div>
                          <div class="form-group">
                            <label for="input">2. Kerjasama</label> (Umum)
                            <input name="kerjasama" type="number" class="form-control" id="kerjasama" placeholder="Masukan nilai 0-100" required="" max="100">
                          </div>
                          <div class="form-group">
                            <label for="input">3. Kerajinan</label> (Umum)
                            <input name="kerajinan" type="number" class="form-control" id="kerajinan" placeholder="Masukan nilai 0-100" required="" max="100">
                          </div>
                          <div class="form-group">
                            <label for="input">4. Tanggung Jawab</label> (Umum)
                            <input name="tanggung_jawab" type="number" class="form-control" id="tanggung_jawab" placeholder="Masukan nilai 0-100" required="" max="100">
                          </div>
                           <div class="form-group">
                            <label for="input">5. Sikap</label> (Umum)
                            <input name="sikap" type="number" class="form-control" id="sikap" placeholder="Masukan nilai 0-100" required="" max="100"> 
                          </div>
                          <div class="form-group">
                            <label for="input">6. K3</label> (Umum)
                            <input name="k3" type="number" class="form-control" id="k3" placeholder="Masukan nilai 0-100" required="" max="100">
                          </div>
                          <div class="form-group">
                            <label for="input">7. Kreatif KL</label> (Umum)
                            <input name="kreatif_kl" type="number" class="form-control" id="kreatif_kl" placeholder="Masukan nilai 0-100" required="" max="100">
                          </div>                      
                          
                                
                    </div>         
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="input">1. Persiapan</label> (Kompetensi / Kemampuan)
                          <input name="persiapan" type="number" class="form-control" id="persiapan" placeholder="Masukan nilai 0-100" max="100">
                        </div>
                        <div class="form-group">
                          <label for="input">2. Analisa</label> (Kompetensi / Kemampuan)
                          <input name="analisa" type="number" class="form-control" id="analisa" placeholder="Masukan nilai 0-100" max="100">
                        </div>
                        <div class="form-group">
                          <label for="input">3. Perawatan pl</label> (Kompetensi / Kemampuan)
                          <input name="perawatan_p" type="number" class="form-control" id="perawatan_p" placeholder="Masukan nilai 0-100" max="100">
                        </div> 
                            <div class="form-group">
                          <label for="input">4. Metode LK</label> (Kompetensi / Kemampuan)
                          <input name="metode_lk" type="number" class="form-control" id="metode_lk" placeholder="Masukan nilai 0-100" max="100">
                        </div>              
                        <div class="form-group">
                          <label for="input">5. Ketetapan</label> (Kompetensi / Kemampuan)
                          <input name="ketetapan_h" type="number" class="form-control" id="ketetapan_h" placeholder="Masukan nilai 0-100" max="100">
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
     @endif
