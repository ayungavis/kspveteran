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
        <h5 class="nk-block-title">Reset Password</h5>
        <div class="nk-block-des">
          <p>
            Jika Anda lupa kata sandi, maka kami akan mengirimi Anda instruksi untuk menyetel ulang kata sandi.
          </p>
        </div>
      </div>
    </div>
    <!-- .nk-block-head -->
    <form method="POST" action="{{ route('password.email') }}">
      @csrf

      @if (session('status'))
        <div class="alert alert-icon alert-success" role="alert">
          <em class="icon ni ni-check-circle"></em> 
          {{ session('status') }}
        </div>
      @endif

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
      <div class="form-group pt-2">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
          Kirim Link Reset
        </button>
      </div>
    </form>
    <!-- form -->
    <div class="form-note-s2 pt-5">
      <a href="{{ route('login') }}"
        ><strong>Kembali ke login</strong></a
      >
    </div>
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