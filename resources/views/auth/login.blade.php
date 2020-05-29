@extends('layouts.auth')

@section('content')
<div
  class="nk-split-content nk-block-area nk-block-area-column nk-auth-container"
>
  <div class="absolute-top-right d-lg-none p-3 p-sm-5">
    <a
      href="#"
      class="toggle btn-white btn btn-icon btn-light"
      data-target="athPromo"
      ><em class="icon ni ni-info"></em
    ></a>
  </div>
  <div class="nk-block nk-block-middle nk-auth-body">
    <div class="brand-logo pb-5">
      <a href="{{ url('/') }}" class="logo-link">
        <!-- <img
          class="logo-light logo-img logo-img-lg"
          src="./images/logo.png"
          srcset="./images/logo2x.png 2x"
          alt="logo"
        />
        <img
          class="logo-dark logo-img logo-img-lg"
          src="./images/logo-dark.png"
          srcset="./images/logo-dark2x.png 2x"
          alt="logo-dark"
        /> -->
        <h3>KSP Veteran</h3>
      </a>
    </div>
    <div class="nk-block-head">
      <div class="nk-block-head-content">
        <h5 class="nk-block-title">Masuk</h5>
        <div class="nk-block-des">
          <p>
            Silahkan masuk menggunakan email dan password Anda.
          </p>
        </div>
      </div>
    </div>
    <!-- .nk-block-head -->
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group">
        <div class="form-label-group">
          <label class="form-label" for="email">Email</label>
        </div>
        <input
          type="text"
          class="form-control form-control-lg @error('email') error @enderror"
          id="email"
          name="email"
          value="{{ old('email') }}"
          placeholder="johndoe@domain.com"
          required
          autocomplete="email"
          autofocus
        />
        @error('email')
          <span id="fv-topics-error" class="invalid">{{ $message }}</span>
        @enderror
      </div>
      <!-- .foem-group -->
      <div class="form-group">
        <div class="form-label-group">
          <label class="form-label" for="password">Password</label>
          @if (Route::has('password.request'))
            <a
              class="link link-primary link-sm"
              tabindex="-1"
              href="{{ route('password.request') }}"
              >Lupa Password?</a
            >
          @endif
        </div>
        <div class="form-control-wrap">
          <a
            tabindex="-1"
            href="#"
            class="form-icon form-icon-right passcode-switch"
            data-target="password"
          >
            <em class="passcode-icon icon-show icon ni ni-eye"></em>
            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
          </a>
          <input
            type="password"
            class="form-control form-control-lg @error('password') error @enderror"
            id="password"
            name="password"
            placeholder="Masukkan password"
            required
            autocomplete="current-password"
          />
          @error('password')
            <span id="fv-topics-error" class="invalid">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <!-- .foem-group -->
      <div class="form-group">
        <div class="custom-control custom-control-xs custom-checkbox">
          <input
            type="checkbox"
            class="custom-control-input"
            id="remember"
            name="remember"
            {{ old('remember') ? 'checked' : '' }}
          />
          <label class="custom-control-label" for="remember"
            >Ingat saya?</label
          >
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
          Masuk
        </button>
      </div>
    </form>
    <!-- form -->
    <div class="form-note-s2 pt-4">
      Belum punya akun?
      <a href="{{ route('register') }}"
        >Daftar sekarang</a
      >
    </div>
    <div class="text-center pt-4 pb-3">
      <h6 class="overline-title overline-title-sap">
        <span>atau masuk dengan</span>
      </h6>
    </div>
    <ul class="nav justify-center gx-4">
      <li class="nav-item">
        <a class="nav-link" href="#">Facebook</a>
      </li>
      <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
    </ul>
  </div>
  <!-- .nk-block -->
  <div class="nk-block nk-auth-footer">
    <div class="nk-block-between">
      <ul class="nav nav-sm">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Syarat & Ketentuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Kebijakan Privasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Basntuan</a>
        </li>
      </ul>
      <!-- .nav -->
    </div>
    <div class="mt-3">
      <p>&copy; 2020 KSP Veteran. Dibuat dengan ❤ di Indonesia.</p>
    </div>
  </div>
  <!-- .nk-block -->
</div>
@endsection
