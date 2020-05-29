<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">
<head>
  <meta charset="utf-8" />
  <meta name="author" content="Wahyu Adi Kurniawan" />
  <meta name="description" content="KSP Veteran adalah koperasi simpan pinjam" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>KSP Veteran</title>

  <!-- StyleSheets  -->
  <link rel="stylesheet" href="{{ asset('css/dashlite.css?ver=1.4.0') }}" />
  <link id="skin-default" rel="stylesheet" href="{{ asset('css/theme.css?ver=1.4.0') }}" />
</head>
<body class="nk-body npc-crypto ui-clean pg-auth">
  <!-- app body @s -->
  <div class="nk-app-root">
    <div class="nk-split nk-split-page nk-split-md">
      
      @yield('content')

      <!-- Sliders -->
      <div
        class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
        data-content="athPromo"
        data-toggle-screen="lg"
        data-toggle-overlay="true"
      >
        <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
          <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
            <div class="slider-item">
              <div class="nk-feature nk-feature-center">
                <div class="nk-feature-img">
                  <img
                    class="round"
                    src="{{ asset('images/slides/slides-1.svg') }}"
                    alt=""
                  />
                </div>
                <div class="nk-feature-content py-4 p-sm-5">
                  <h4>Pengajuan Mudah</h4>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Eos reiciendis corporis amet.
                  </p>
                </div>
              </div>
            </div>
            <!-- .slider-item -->
            <div class="slider-item">
              <div class="nk-feature nk-feature-center">
                <div class="nk-feature-img">
                  <img
                    class="round"
                    src="{{ asset('images/slides/slides-2.svg') }}"
                    alt=""
                  />
                </div>
                <div class="nk-feature-content py-4 p-sm-5">
                  <h4>Bunga Rendah</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quam id blanditiis nam excepturi laboriosam.
                  </p>
                </div>
              </div>
            </div>
            <!-- .slider-item -->
            <div class="slider-item">
              <div class="nk-feature nk-feature-center">
                <div class="nk-feature-img">
                  <img
                    class="round"
                    src="{{ asset('images/slides/slides-3.svg') }}"
                    alt=""
                  />
                </div>
                <div class="nk-feature-content py-4 p-sm-5">
                  <h4>Modal Bangun Bisnis</h4>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Maiores magnam ullam nisi saepe inventore, suscipit.
                  </p>
                </div>
              </div>
            </div>
            <!-- .slider-item -->
          </div>
          <!-- .slider-init -->
          <div class="slider-dots"></div>
          <div class="slider-arrows"></div>
        </div>
        <!-- .slider-wrap -->
      </div>
      <!-- .nk-split-content -->
    </div>
    <!-- .nk-split -->
  </div>
  <!-- app body @e -->

  <!-- JavaScript -->
  <script src="{{ asset('js/bundle.js?ver=1.4.0') }}"></script>
  <script src="{{ asset('js/scripts.js?ver=1.4.0') }}"></script>
</body>
</html>