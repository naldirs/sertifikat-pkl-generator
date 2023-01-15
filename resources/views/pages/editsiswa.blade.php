@extends('content')
@section('titlehead','Edit data siswa')

@section('title')
<b>Edit</b> Data Siswa
@endsection

@section('shortcut')
<li><a href="{{route('home')}}"><i class="fa fa-list-ul"></i> Daftar Siswa</a></li>
<li><a href="{{ route('detail.siswa', $siswa)}}">Data Siswa</a></li>
<li class="active">Edit Data Siswa</li>
@endsection

@section('daftarsiswa','active')

@section('kontent')
<div class="box box-primary">
  <form action="{{ route('update.siswa', $siswa->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
        <div class="box-header with-border">
         <!--  <h3 class="box-title">Edit data Siswa</h3> -->

          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">

              <div class="form-group">
                  <label>Sertifikat untuk</label>
                  <select class="form-control" name="sertifikat">
                    <option value="Praktek Kerja Industri" @if($siswa->sertifikat == 'Praktek Kerja Industri') selected="" @endif>Praktek Kerja Industri (PKI)</option>
                    <option value="Praktek Kerja Lapangan"  @if($siswa->sertifikat == 'Praktek Kerja Lapangan') selected="" @endif>Praktek Kerja Lapangan (PKL)</option>
                    <option value="Kuliah Kerja Nyata"  @if($siswa->sertifikat == 'Kuliah Kerja Nyata') selected="" @endif >Kuliah Kerja Nyata (KKN)</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="input">Nomor Sertifikat</label>
                  <input name="no_sertifikat" type="text" class="form-control" id="input" placeholder="Masukan nomor sertifikat" required="" value="{{$siswa->no_sertifikat}}">
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" >
                    <option value="Siswa"  @if($siswa->status == 'Siswa') selected="" @endif>Siswa</option>
                    <option value="Mahasiswa" @if($siswa->status == 'Mahasiswa') selected="" @endif>Mahasiswa</option>
                  </select>
                </div>

              <div class="form-group">
                  <label for="input">No Induk</label>
                  <input name="no_induk" type="text" class="form-control" id="input" placeholder="Masukan nomor induk siswa" value="{{$siswa->no_induk}}">
                </div>
                <div class="form-group">
                  <label for="input">Nama</label>
                  <input name="nama" type="text" class="form-control" id="input" placeholder="Masukan nama siswa" value="{{$siswa->nama}}">
                </div>
              <!-- radio -->
              <div class="form-group">
                <label for="input"> Jenis Kelamin : 
                  <input type="radio" name="kelamin" class="minimal" value="Laki-laki" @if($siswa->kelamin == 'Laki-laki') {{'checked'}} @endif>Laki-laki                
                  <input type="radio" name="kelamin" class="minimal" value="Perempuan" @if($siswa->kelamin == 'Perempuan') {{'checked'}} @endif>Perempuan
                </label>
              </div>

                <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="tgl_lahir" type="date" class="form-control pull-right" id="datepicker" value="{{$siswa->tgl_lahir}}">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="">
                  <label for="input">Tempat Lahir</label>
                  <input name="tmpt_lahir" type="text" class="form-control" id="input" placeholder="Masukan tempat lahir siwa" value="{{$siswa->tmpt_lahir}}">
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">

                <div class="form-group">
                  <label for="input">Sekolah / Universitas</label>
                  <input name="asal_sklh" type="text" class="form-control" id="input" placeholder="Maukan asal sekolah siswa" value="{{$siswa->asal_sklh}}">
                </div>

                <div class="form-group">
                  <label for="input">Program Keahlian / Studi</label>
                  <input name="program_keahlian" type="text" class="form-control" id="input" placeholder="Masukan program keahlian siswa" value="{{$siswa->program_keahlian}}" required="">
                </div>

                <div class="form-group">
                <label>Tanggal Masuk</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="tgl_masuk" type="date" class="form-control pull-right" id="datepicker" value="{{$siswa->tgl_masuk}}">
                  </div>
                  <!-- /.input group -->
                </div>


                <div class="form-group">
                <label>Tanggal Selesai</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="tgl_selesai" type="date" class="form-control pull-right" id="datepicker" value="{{$siswa->tgl_selesai}}">
                  </div>
                  <!-- /.input group -->
                </div>


                <!-- 
                <div class="form-group col-xs-6">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->

              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
          </div>
        </div>
    </form>
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