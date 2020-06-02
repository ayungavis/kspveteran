<!doctype html>
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

<body class="nk-body bg-white npc-general pg-error">
  <div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
      <!-- wrap @s -->
      <div class="nk-wrap justify-center">
        <!-- content @s -->
        <div class="nk-content ">
          <div class="nk-block nk-block-middle wide-md mx-auto">
            <div class="nk-block-content nk-error-ld text-center">
              <img class="nk-error-gfx" src="{{ asset('images/gfx/error-404.svg') }}" alt="">
              <div class="wide-xs mx-auto">
                <h3 class="nk-error-title">Oops! Kenapa Anda ada di sini?</h3>
                <p class="nk-error-text">Kami mohon maaf atas ketidaknyamanan ini. Sepertinya Anda mencoba mengakses halaman yang telah dihapus atau tidak pernah ada.</p>
                <a href="{{ url()->previous() }}" class="btn btn-lg btn-primary mt-2">Kembali</a>
              </div>
            </div>
          </div><!-- .nk-block -->
        </div>
        <!-- wrap @e -->
      </div>
      <!-- content @e -->
    </div>
    <!-- main @e -->
  </div>
  <!-- app-root @e -->

  <!-- JavaScript -->
  <script src="{{ asset('js/bundle.js?ver=1.4.0') }}"></script>
  <script src="{{ asset('js/scripts.js?ver=1.4.0') }}"></script>

</html>