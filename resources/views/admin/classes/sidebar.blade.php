
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

   

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- ol -->
        <li class="nav-item">
            <a href="{{ route('admin') }}" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                AdminPanel
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            </li>
<!-- ol -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{ route('banners.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>HomeBanner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('aboutsus.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>HomeAbouts</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('services.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Servicer</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('projects.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('posts.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blogs.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blogs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contacts.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('showrooms.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Showrooms</p>
                </a>
              </li>
            </ul>
          </li>
<!-- ol -->
         
<!-- ol -->
        
         
            </ul>
        </nav>
        </div>
    </aside>





