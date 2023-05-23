<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('index.html')}}">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
          <span class="menu-title">Data Master</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/user">User</a></li>
            <li class="nav-item"> <a class="nav-link" href="/unitkerja">Unit Kerja</a></li>
            <li class="nav-item"> <a class="nav-link" href="/role">Role</a></li>
            <li class="nav-item"> <a class="nav-link" href="/rekanan">Rekanan</a></li>
            <li class="nav-item"> <a class="nav-link" href="/bagian">Bagian</a></li>
            <li class="nav-item"> <a class="nav-link" href="/status">Status</a></li>
            <li class="nav-item"> <a class="nav-link" href="/jenispekerjaan">Jenis Pekerjaan</a></li>
            <li class="nav-item"> <a class="nav-link" href="/negara">Negara</a></li>
            <li class="nav-item"> <a class="nav-link" href="/kota">Kota</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
          <span class="menu-title">Data Transaksi</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/inbox">inbox</a></li>
            <li class="nav-item"> <a class="nav-link" href="/form-penunjukkan">Form Penunjukkan</a></li>
            <li class="nav-item"> <a class="nav-link" href="/role">Role</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="user-details">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <div class="d-flex align-items-center">
                <div class="sidebar-profile-img">
                  <img src="{{asset('assets/images/faces/face28.png')}}" alt="image">
                </div>
                <div class="sidebar-profile-text">
                  <p class="mb-1">Henry Klein</p>
                </div>
              </div>
            </div>
            <div class="badge badge-danger">3</div>
          </div>
        </div>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
            <span class="menu-title">Settings</span>
          </a>
        </div>
      </li>

      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="/logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
            <span class="menu-title">Log Out</span></a>
        </div>
      </li>
    </ul>
  </nav>