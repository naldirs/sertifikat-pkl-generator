@extends('content')
@section('title','Tambah data siswa')
@section('shortcut')
<li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Daftar Siswa</a></li>
<li><a href="{{ route('detail.siswa', $siswa)}}">Data Siswa</a></li>
<li class="active">Tambah nilai</li>
@endsection

@section('kontent')
<form action="{{ route('simpan.nilai.keahlian', $siswa->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Keahlian</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                  <label for="input">Nama komponen keahlian</label>
                  <input name="nama_komponen" type="text" class="form-control" id="input" placeholder="Masukan nama komponen" required="">
                </div>             
            </div>         
            <!-- /.col -->
            <div class="col-md-2">
                <div class="form-group">
                  <label for="input">Nilai</label>
                  <input name="nilai" type="number" class="form-control" id="input" placeholder="Masukan nilai" required="">
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
      </div>

  </form>





@endsection

@section('script')
<script type="text/javascript">
</script>
@endsection