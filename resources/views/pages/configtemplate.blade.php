@extends('content')

@section('titlehead' , 'Konfigurasi template')

@section('title')
<b>Konfigurasi</b> Template
@endsection
@section('shortcut')
<li><i class="fa fa-gear active"></i> Konfigurasi Template</li>
@endsection

@section('template_c','active')


@section('kontent')
@include('pesan')


      <div class="row">
        <div class="col-md-3">
          

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Konfigurasi</h3>

              <!-- <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div> -->
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="@yield('ks')"><a href="{{route('ks')}}"><i class="fa fa-user"></i> Sign page
                  <!-- <span class="label label-primary pull-right">12</span> --></a></li>
                {{-- <li class="@yield('border')"><a href="{{route('border')}}"><i class="fa fa-file-photo-o"></i> Border</a></li> --}}
                {{-- <li class="@yield('preview')"><a href="{{route('preview')}}"><i class="fa fa-file-text-o"></i> Preview</a></li> --}}
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        @section('template')
        @show
        <!-- /.col -->
      </div>
      <!-- /.row -->


    @endsection