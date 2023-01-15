@extends('content')
@section('title','Edit nilai siswa')

@section('shortcut')
<li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Daftar Siswa</a></li>
<li><a href="{{ route('detail.siswa', $nilai_keahlian->siswa)}}">Data Siswa</a></li>
<li class="active">Edit</li>
@endsection

@section('kontent')
<form action="{{ route('update.nilai.keahlian', [$nilai_keahlian->siswa_id ,$nilai_keahlian->id] )}}" method="post" enctype="multipart/form-data">
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
                  <input name="nama_komponen" type="text" class="form-control" id="input" placeholder="Masukan nama komponen" value="{{$nilai_keahlian->nama_komponen}}" required="">
                </div>             
            </div>
            <!-- /.col -->
            <div class="col-md-2">
                <div class="form-group">
                  <label for="input">Nilai</label>
                  <input name="nilai" type="number" class="form-control" id="input" placeholder="Masukan nilai" required="" value="{{$nilai_keahlian->nilai}}">
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