
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/defaultuser.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="@yield('daftarsiswa')">
          <a href="{{route('home')}}">
            <i class="fa fa-list-ul"></i> <span>Daftar siswa</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
        </li>

        <li class="@yield('daftaruser')">
          <a href="{{route('user.list')}}">
            <i class="fa fa-users"></i> <span>User</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
        </li>
        
      </ul>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">KONFIGURASI</li>
        
        <li class="@yield('template_c')">
          <a href="{{route('template')}}">
            <i class="fa fa-gear"></i> <span>Template</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>