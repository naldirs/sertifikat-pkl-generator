@extends('pages.configtemplate')
@section('ks','active')

@section('shortcut')
<li><a href="{{route('template')}}"><i class="fa fa-gear"></i> Konfigurasi Template</a></li>
<li class="active">Sign page</li>
@endsection


@section('template')
<div class="col-md-9">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Sign page</h3>

      <!-- <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div> -->
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">

      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Nama</th>
              <th>NIP</th>
              <th>Jabatan</th>
              <th>Keterangan 1</th>
              <th>Keterangan 2</th>
              <th>Sebagai</th>
              <th>Page</th>
              <th>Action</th>
            </tr>
            <form action="{{ route('update.pagedepan')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
              <tr>
                <td><input type="text" name="nama" value="{{$depan->nama}}"></td>
                <td><input type="text" name="nip" value="{{$depan->nip}}"></td>
                <td><input type="text" name="jabatan" value="{{$depan->jabatan}}"></td>
                <td><input type="text" name="ket1" value="{{$depan->ket1}}"></td>
                <td><input type="text" name="ket2" value="{{$depan->ket2}}"></td>
                <td><input type="text" name="sebagai" value="{{$depan->sebagai}}"></td>
                <td>{{$depan->page}}</td>
                <td><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></td>
              </tr>
            </form>
            <tr>
              @isset($belakang)
              <td>{{$belakang->nama}}</td>
              <td>{{$belakang->nip}}</td>
              <td>{{$belakang->jabatan}}</td>
              <td>{{$belakang->ket1}}</td>
              <td>{{$belakang->ket2}}</td>
              <td>{{$belakang->sebagai}}</td>
              <td>{{$belakang->page}}</td>
              <td><a class="btn btn-success btn-sm" href="{{route('edit.pagebelakang')}}"><i class="fa fa-edit"></i></a>
              </td>
              @else
              <td colspan="6">-</td>
              <td>belakang</td>
              <td><a class="btn btn-success btn-sm" href="" role="button"><i class="fa fa-user-plus"></i></a></td>
              @endisset
            </tr>


          </tbody>
        </table>
        <!-- /.table -->
      </div>
      <!-- /.mail-box-messages -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer no-padding">

    </div>
  </div>
  <!-- /. box -->
</div>

@endsection