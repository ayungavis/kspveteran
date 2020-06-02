<div
  class="nk-aside"
  data-content="sideNav"
  data-toggle-overlay="true"
  data-toggle-screen="lg"
  data-toggle-body="true"
>
  <div class="nk-sidebar-menu" data-simplebar>
    <!-- Menu -->
    <ul class="nk-menu">
      <li class="nk-menu-heading">
        <h6 class="overline-title">Menu</h6>
      </li>
      <li class="nk-menu-item">
        <a
          href="{{ url('/') }}"
          class="nk-menu-link"
        >
          <span class="nk-menu-icon"
            ><em class="icon ni ni-dashboard"></em
          ></span>
          <span class="nk-menu-text">Beranda</span>
        </a>
      </li>
      @if (auth()->user()->role->level >= 10)
      <li class="nk-menu-item">
        <a
          href="{{ url('/customers/create') }}"
          class="nk-menu-link"
        >
          <span class="nk-menu-icon"
            ><em class="icon ni ni-file-text"></em
          ></span>
          <span class="nk-menu-text">Registrasi Nasabah</span>
        </a>
      </li>
      @endif
      @if (auth()->user()->role->level >= 2)
      <li class="nk-menu-item">
        <a
          href="{{ url('/customers') }}"
          class="nk-menu-link"
        >
          <span class="nk-menu-icon"
            ><em class="icon ni ni-report-profit"></em
          ></span>
          <span class="nk-menu-text">Lihat Nasabah</span>
        </a>
      </li>
      @endif
      @if (auth()->user()->role->level >= 10)
      <li class="nk-menu-item">
        <a
          href="{{ url('savings/create') }}"
          class="nk-menu-link"
        >
          <span class="nk-menu-icon"
            ><em class="icon ni ni-download-cloud"></em
          ></span>
          <span class="nk-menu-text">Tabung (Simpan)</span>
        </a>
      </li>
      <li class="nk-menu-item">
        <a
          href="{{ url('installments/create') }}"
          class="nk-menu-link"
        >
          <span class="nk-menu-icon"
            ><em class="icon ni ni-account-setting"></em
          ></span>
          <span class="nk-menu-text">Angsuran Pinjaman</span>
        </a>
      </li>
      @endif
    </ul>
    <!-- Menu -->
    <ul class="nk-menu nk-menu-sm">
      <!-- Menu -->
      <li class="nk-menu-heading">
        <span>Pusat Bantuan</span>
      </li>
      <li class="nk-menu-item">
        <a
          href="{{ url('/') }}"
          class="nk-menu-link"
        >
          <span class="nk-menu-text">FAQs</span>
        </a>
      </li>
      <li class="nk-menu-item">
        <a
          href="{{ url('/') }}"
          class="nk-menu-link"
        >
          <span class="nk-menu-text">Hubungi Kami</span>
        </a>
      </li>
      <li class="nk-menu-item">
        <a
          href="{{ url('/') }}"
          class="nk-menu-link"
        >
          <span class="nk-menu-text">Dukungan Akun</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- .nk-sidebar-menu -->
  <div class="nk-aside-close">
    <a href="#" class="toggle" data-target="sideNav"
      ><em class="icon ni ni-cross"></em
    ></a>
  </div>
  <!-- .nk-aside-close -->
</div>