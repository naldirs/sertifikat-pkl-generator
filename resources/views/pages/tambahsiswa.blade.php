@extends('content')
@section('titlehead','Tambah data siswa')

@section('title')
<b>Tambah</b> Data Siswa
@endsection

@section('shortcut')
<li><a href="{{route('home')}}"><i class="fa fa-list-ul"></i> Daftar Siswa</a></li>
<li class="active">Tambah Siswa</li>
@endsection

@section('daftarsiswa','active')


@section('kontent')
<div class="box box-primary">
  <form action="{{ route('simpan.siswa')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
        <div class="box-header with-border">
          <!-- <h3 class="box-title">Masukan data siswa</h3> -->

          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Sertifikat untuk</label>
                  <select class="form-control" name="sertifikat">
                    <option value="Praktek Kerja Industri">Praktek Kerja Industri (PKI)</option>
                    <option value="Praktek Kerja Lapangan">Praktek Kerja Lapangan (PKL)</option>
                    <option value="Kuliah Kerja Nyata">Kuliah Kerja Nyata (KKN)</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="input">Nomor Sertifikat</label>
                  <input name="no_sertifikat" value="{{$last->no_sertifikat+1}}" type="text" class="form-control" id="input" placeholder="Masukan nomor sertifikat" required="">
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="Siswa">Siswa</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="input">No Induk</label>
                  <input name="no_induk" type="text" class="form-control" id="input" placeholder="Masukan nomor induk siswa" required="">
                </div>
                <div class="form-group">
                  <label for="input">Nama</label>
                  <input name="nama" type="text" class="form-control" id="input" placeholder="Masukan nama siswa" required="">
                </div>
              <!-- radio -->
              <div class="form-group">
                <label for="input"> Jenis Kelamin : 
                  <input type="radio" name="kelamin" class="minimal" value="Laki-laki" checked>Laki-laki                
                  <input type="radio" name="kelamin" class="minimal" value="Perempuan">Perempuan
                </label>
              </div>

                <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="tgl_lahir" type="date" class="form-control pull-right" id="datepicker" required="">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="">
                  <label for="input">Tempat Lahir</label>
                  <input name="tmpt_lahir" type="text" class="form-control" id="input" placeholder="Masukan tempat lahir siswa" required="">
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">





                <div class="form-group">
                  <label for="input">Sekolah / Universitas</label>
                  <input name="asal_sklh" type="text" class="form-control" id="input" placeholder="Masukan asal sekolah siswa" required="">
                </div>

                <div class="form-group">
                  <label for="input">Program Keahlian / Program studi</label>
                  <input name="program_keahlian" type="text" class="form-control" id="input" placeholder="Masukan program keahlian siswa" required="">
                </div>

                <div class="form-group">
                <label>Tanggal Masuk</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="tgl_masuk" type="date" class="form-control pull-right" id="datepicker" required="">
                  </div>
                  <!-- /.input group -->
                </div>


                <div class="form-group">
                <label>Tanggal Selesai</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="tgl_selesai" type="date" class="form-control pull-right" id="datepicker" required="">
                  </div>
                  <!-- /.input group -->
                </div>


                
                <!-- <div class="form-group col-xs-6">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                -->
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
        </div>
      </div>

@endsection

@section('script')
<link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css')}}">
<script src="{{ asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
</script>
@endsection