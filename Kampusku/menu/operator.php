 <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="index2.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Akademik
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index2.php?page=data-mahasiswa" class="nav-link">
                <i class="fa fa-address-card"></i>
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index2.php?page=data-dosen" class="nav-link">
                  <i class="fas fa-chalkboard-teacher"></i>
                  <p>Data Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index2.php?page=data-mk" class="nav-link">
                  <i class="fas fa-book-open"></i>
                  <p>Data Mata Kuliah</p>
                </a>
              </li>
                 <li class="nav-item ">
            <a href="logout.php" class="nav-link text-red">
              <i class="fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
              
            </ul>
          </li>  
        </ul>
      </nav>