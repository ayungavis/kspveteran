<div class="nk-header nk-header-fixed is-light">
  <div class="container-lg wide-xl">
    <div class="nk-header-wrap">
      <div class="nk-header-brand">
        <a href="{{ url('/') }}" class="logo-link">
          <!-- <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
          <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark"> -->
          <h3>KSP Veteran</h3>
          <span class="nio-version">Dashboard</span>
        </a>
      </div>
      <!-- .nk-header-brand -->
      <div class="nk-header-tools">
        <ul class="nk-quick-nav">
          <li class="dropdown user-dropdown">
            <a
              href="#"
              class="dropdown-toggle"
              data-toggle="dropdown"
            >
              <div class="user-toggle">
                <div class="user-avatar sm">
                  <em class="icon ni ni-user-alt"></em>
                </div>
                <div
                  class="user-name dropdown-indicator d-none d-sm-block"
                >
                  {{ auth()->user()->name }}
                </div>
              </div>
            </a>
            <div
              class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1"
            >
              <div
                class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block"
              >
                <div class="user-card">
                  <div class="user-avatar sm">
                  <em class="icon ni ni-user-alt"></em>
                </div>
                  <div class="user-info">
                    <span class="lead-text">{{ auth()->user()->name }}</span>
                    <span class="sub-text">{{ auth()->user()->email }}</span>
                  </div>
                  <div class="user-action">
                    <!-- <a
                      class="btn btn-icon mr-n2"
                      href="html/subscription/profile-setting.html"
                      ><em class="icon ni ni-setting"></em
                    ></a> -->
                  </div>
                </div>
              </div>
              <!-- <div class="dropdown-inner">
                <ul class="link-list">
                  <li>
                    <a href="html/subscription/profile.html"
                      ><em class="icon ni ni-user-alt"></em
                      ><span>Lihat Profil</span></a
                    >
                  </li>
                  <li>
                    <a href="html/subscription/profile-setting.html"
                      ><em class="icon ni ni-setting-alt"></em
                      ><span>Pengaturan AKun</span></a
                    >
                  </li>
                  <li>
                    <a href="html/subscription/profile-activity.html"
                      ><em class="icon ni ni-activity-alt"></em
                      ><span>Aktivitas Login</span></a
                    >
                  </li>
                </ul>
              </div> -->
              <div class="dropdown-inner">
                <ul class="link-list">
                  <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                      ><em class="icon ni ni-signout"></em
                      ><span>Keluar</span></a
                    >
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </ul>
              </div>
            </div>
          </li>
          <!-- .dropdown -->
          <li class="d-lg-none">
            <a
              href="#"
              class="toggle nk-quick-nav-icon mr-n1"
              data-target="sideNav"
              ><em class="icon ni ni-menu"></em
            ></a>
          </li>
        </ul>
        <!-- .nk-quick-nav -->
      </div>
      <!-- .nk-header-tools -->
    </div>
    <!-- .nk-header-wrap -->
  </div>
  <!-- .container-fliud -->
</div>