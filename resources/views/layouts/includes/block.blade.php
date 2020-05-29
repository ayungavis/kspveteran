<div class="nk-block-head nk-block-head-lg">
  <div class="nk-block-head-sub">
    <nav>
      <ul class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/') }}">Beranda</a>
        </li>
        @yield('breadcumb')
      </ul>
    </nav>
  </div>
  <div class="nk-block-between-md g-4">
    <div class="nk-block-head-content">
      <h2 class="nk-block-title fw-normal">

        @yield('page-title')

      </h2>
      <div class="nk-block-des">
        <p>

          @yield('page-description')

        </p>
      </div>
    </div>
    <div class="nk-block-head-content">
      <ul class="nk-block-tools gx-3">
        <li class="order-md-last">

          @yield('header-button')
          
        </li>
      </ul>
    </div>
  </div>
</div>