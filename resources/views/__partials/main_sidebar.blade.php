<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<<<<<<< HEAD
    <!-- <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/img')}}/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Perpustakaan Online</span>
    </a> -->
=======
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/img')}}/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Perpustakaan Online</span>
    </a>
>>>>>>> dbd31f0b6e107e81b27fefa9628be7f6cd83ed8a

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img')}}/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if (auth()->user()->level == "1")
          <li class="nav-item">
            <a href="{{route('book.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
<<<<<<< HEAD
            <a href="{{route('datapeminjam.list')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                List Data Peminjam
=======
            <a href="{{route('sewa.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sewa
>>>>>>> dbd31f0b6e107e81b27fefa9628be7f6cd83ed8a
              </p>
            </a>
          </li>
          @endif
              <li class="nav-item">
              @if (auth()->user()->level == "2")
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>