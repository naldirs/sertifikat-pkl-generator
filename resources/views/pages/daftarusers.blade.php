@extends('content')

@section('titlehead', 'Daftar user')

@section('title')
<b>Daftar</b> User
@endsection
@section('shortcut')
<li><i class="fa fa-users active"></i> Daftar User</li>
@endsection


@section('daftaruser','active')


@section('kontent')

<div class="row">
  <div class="col-xs-12">
    @include('pesan')
    @if ($errors->has('name'))
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
      {{ $errors->first('name') }}
    </div>
    @endif

    @if ($errors->has('email'))
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
      {{ $errors->first('email') }}
    </div>
    @endif
    @if ($errors->has('password'))
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
      {{ $errors->first('password') }}
    </div>
    @endif

    <!-- /.box -->


    <div class="box">
      <div class="box-header" align="right">
        <!-- <h3 class="box-title">Data Table With Full Features</h3> -->

      </div>
      <!-- /.box-header -->

      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">

          <thead>
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th width="5%">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($user as $s)
            <tr>
              <td>{{$s->name}}</td>
              <td>{{$s->email}}</td>
              <td>
                @if(Auth::user()->name != $s->name)
                <center><a class="btn btn-danger btn-sm" onclick="return confirm('Hapus username : {{$s->name}}')"
                    href="{{route('delete.user', $s->id)}}"><i class="fa fa-user-times"></i></a></center>
                @endif
              </td>
            </tr>
            @endforeach


          </tbody>

        </table>

      </div>

      <!-- /.box-body -->
      <div class="box-footer">
        <a data-toggle="modal" data-target="#tambahuser" class="btn btn-success btn-flat" href="" role="button"><i
            class="fa fa-user-plus"></i></a>
      </div>
    </div>


    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
@include('modals.modalstambahuser')



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