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
<body class="nk-body npc-subscription has-aside ui-clean">
  <div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main">
      <!-- wrap @s -->
      <div class="nk-wrap">

        @include('layouts.includes.header')

        <!-- content @s -->
        <div class="nk-content">
          <div class="container wide-xl">
            <div class="nk-content-inner">

              @include('layouts.includes.sidebar')

              <div class="nk-content-body">
                <div class="nk-content-wrap">

                  @include('layouts.includes.block')

                  @yield('content')

                </div>

                @include('layouts.includes.footer')

              </div>
            </div>
          </div>
        </div>
        <!-- content @e -->

      </div>
      <!-- wrap @e -->
    </div>
    <!-- main @e -->
  </div>
  <!-- app-root @e -->

  @yield('extra-script')

  <!-- JavaScript -->
  <script src="{{ asset('js/bundle.js?ver=1.4.0') }}"></script>
  <script src="{{ asset('js/scripts.js?ver=1.4.0') }}"></script>
</body>
</html>
