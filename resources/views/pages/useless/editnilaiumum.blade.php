@extends('content')
@section('title','Edit nilai siswa')

@section('shortcut')
<li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Daftar Siswa</a></li>
<li><a href="{{ route('detail.siswa', $nilai_umum->siswa)}}">Data Siswa</a></li>
<li class="active">Edit</li>
@endsection

@section('kontent')
<form action="{{ route('update.nilai.umum', $nilai_umum->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
      <div class="row">
<!-- Tab kiri -->
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Nilai umum</h3>
            </div>

            <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="input">1. Disiplin</label>
                    <input name="disiplin" type="number" class="form-control" id="input" placeholder="Masukan nilai" required="" value="{{$nilai_umum->disiplin}}">
                  </div>
                  <div class="form-group">
                    <label for="input">2. Kerjasama</label>
                    <input name="kerjasama" type="number" class="form-control" id="input" placeholder="Masukan nilai" required="" value="{{$nilai_umum->kerjasama}}">
                  </div>
                  <div class="form-group">
                    <label for="input">3. Kerajinan</label>
                    <input name="kerajinan" type="number" class="form-control" id="input" placeholder="Masukan nilai" required="" value="{{$nilai_umum->kerajinan}}">
                  </div>
                  <div class="form-group">
                    <label for="input">4. Tanggung Jawab</label>
                    <input name="tanggung_jawab" type="number" class="form-control" id="input" placeholder="Masukan nilai" required="" value="{{$nilai_umum->tanggung_jawab}}">
                  </div>              
              </div>         
              <!-- /.col -->
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="input">5. Sikap</label>
                    <input name="sikap" type="number" class="form-control" id="input" placeholder="Masukan nilai" required="" value="{{$nilai_umum->sikap}}">
                  </div>
                  <div class="form-group">
                    <label for="input">6. K3</label>
                    <input name="k3" type="number" class="form-control" id="input" placeholder="Masukan nilai" required="" value="{{$nilai_umum->k3}}">
                  </div>
                  <div class="form-group">
                    <label for="input">7. Kreatif KL</label>
                    <input name="kreatif_kl" type="number" class="form-control" id="input" placeholder="Masukan nilai" required="" value="{{$nilai_umum->kreatif_kl}}">
                  </div>             
              </div>         
              <!-- /.col -->
            </div>
          </div>


            <!-- /.box-body -->
          </div>


          <!-- /.box -->
        </div>
        <!-- /.col (left) -->

<!-- Tab kanan -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Nilai Kompetensi</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="input">1. Persiapan</label>
                      <input name="persiapan" type="number" class="form-control" id="input" placeholder="Masukan nilai" value="{{$nilai_umum->persiapan}}">
                    </div>
                    <div class="form-group">
                      <label for="input">2. Analisa</label>
                      <input name="analisa" type="number" class="form-control" id="input" placeholder="Masukan nilai" value="{{$nilai_umum->analisa}}">
                    </div>
                    <div class="form-group">
                      <label for="input">3. Perawatan pl</label>
                      <input name="perawatan_p" type="number" class="form-control" id="input" placeholder="Masukan nilai" value="{{$nilai_umum->perawatan_p}}">
                    </div>
                </div>         
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="input">4. Metode LK</label>
                      <input name="metode_lk" type="number" class="form-control" id="input" placeholder="Masukan nilai" value="{{$nilai_umum->metode_lk}}">
                    </div>              
                    <div class="form-group">
                      <label for="input">5. Ketetapan</label>
                      <input name="ketetapan_h" type="number" class="form-control" id="input" placeholder="Masukan nilai" value="{{$nilai_umum->ketetapan_h}}">
                    </div>          
                </div>         
                <!-- /.col -->
              </div>
            </div>
            <!-- /.box-body -->
          <div class="box-footer">
              <button type="submit" class="btn btn-info btn-flat">Simpan</button>
          </div>

          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col (right) -->
      </div>

<!-- 

      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Keahlian</h3>
        </div>
      
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                  <label for="input">Nama komponen keahlian</label>
                  <input type="text" class="form-control" id="input" placeholder="Masukan nama komponen">
                </div>             
            </div>         

            <div class="col-md-2">
                <div class="form-group">
                  <label for="input">Nilai</label>
                  <input type="number" class="form-control" id="input" placeholder="Masukan nilai">
                </div>             
            </div>
            <div class="col-md-1">
                <div class="form-group">
                  <label for="input">action</label>
                  <button class="btn btn-primary btn-fill">Tambah</button>
                </div>             
            </div>          
    
          </div>
   
        </div>
       
        <div class="box-footer">
              <button type="submit" class="btn btn-info btn-fill">Simpan</button>
        </div>
      </div>


 -->
  </form>



@endsection

@section('script')
<script type="text/javascript">
</script>
@endsection