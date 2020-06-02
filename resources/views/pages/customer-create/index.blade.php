@extends('layouts.app')

@section('page-title')
Registrasi Nasabah
@endsection

@section('page-description')
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti adipisci saepe.
@endsection

@section('breadcumb')
<li class="breadcrumb-item active">
  Registrasi Nasabah
</li>
@endsection

@section('header-button')
<a
  href="{{ url('customers') }}"
  class="btn btn-white btn-dim btn-outline-primary"
>
  <em class="icon ni ni-user-list"></em>
  <span>Daftar Nasabah</span>
</a>
@endsection

@section('content')
  @include('pages.customer-create.form')
@endsection