@extends('content')

@section('titlehead' , 'Daftar Siswa')

@section('title')
<b>Daftar</b> Siswa
@endsection
@section('shortcut')
<li><i class="fa fa-list-ul active"></i> Daftar Siswa</li>
@endsection

@section('daftarsiswa','active')


@section('kontent')

     <div class="row">
        <div class="col-xs-12">
          @include('pesan')
          
          <!-- /.box -->
          

          <div class="box">
            <div class="box-header" align="right">
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
              <button style="width: 50px" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#cari"><i class="fa fa-search"></i></button>
              
            </div>
            <!-- /.box-header -->

            <div class="box-body">          
              <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr>
                  <th>Sertifikat</th>
                  <th>No/Thn</th>
                  <th>Nama</th>
                  <th>No.induk</th>
                  <th>Kelamin</th>
                  <th>Tgl Lahir</th>
                  <th>Tempat Lahir</th>
                  <th>Sekolah / Universitas</th>
                  <th>Program Keahlian / Studi</th>
                  <th>Tgl Masuk</th>
                  <th>Tgl Selesai</th>
                  <th width="12%">Action</th>
                </tr>
                </thead>
                <tbody>
                @isset($siswa)
                @foreach($siswa as $s)
                <tr>
                  <td>@if($s->sertifikat == 'Praktek Kerja Lapangan') PKL @elseif ($s->sertifikat == 'Praktek Kerja Industri') PKI @elseif ($s->sertifikat == 'Kuliah Kerja Nyata') KKN @endif</td>
                  <td>{{$s->no_sertifikat}}/{{date('Y' , strtotime($s->tgl_masuk))}}</td>
                  <td>{{$s->nama}}</td>
                  <td>{{$s->no_induk}}</td>
                  <td>{{$s->kelamin}}</td>
                  <td>{{$s->tgl_lahir}}</td>
                  <td>{{$s->tmpt_lahir}}</td>
                  <td>{{$s->asal_sklh}}</td>
                  <td>{{$s->program_keahlian}}</td>
                  <td>{{$s->tgl_masuk}}</td>
                  <td>{{$s->tgl_selesai}}</td>
                  <td><center>
                    <a class="btn btn-primary btn-sm"  href="{{ route('detail.siswa', $s->id)}}"><i class="fa fa-th-list"></i></a> 
                    <a class="btn btn-success btn-sm" href="{{ route('edit.siswa', $s->id)}}"><i class="fa fa-edit"></i></a> 
                    <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus data siswa bernama {{$s->nama}}?')" href="{{ route('delete.siswa', $s->id)}}">
                        <i class="fa fa-eraser"></i>
                    </a></center>
                  </td>
                </tr>
                @endforeach
                @endisset
               
                </tbody>
              
              </table>
              
            </div>

            <!-- /.box-body -->
        <div class="box-footer">
            <a class="btn btn-success btn-flat" href="{{ route('tambah.siswa')}}" role="button">Tambahkan</a>
        </div>
      </div>


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      @include('modals.modalspencarian') 
      

    @endsection


@section('script')
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection