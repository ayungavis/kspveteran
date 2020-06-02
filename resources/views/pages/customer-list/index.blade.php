@extends('layouts.app')

@section('page-title')
Daftar Nasabah
@endsection

@section('page-description')
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti adipisci saepe.
@endsection

@section('breadcumb')
<li class="breadcrumb-item active">
  Daftar Nasabah
</li>
@endsection

@section('header-button')
<a
  href="{{ route('customers.create') }}"
  class="btn btn-white btn-dim btn-outline-primary"
>
  <em class="icon ni ni-user-add"></em>
  <span>Registrasi Nasabah</span>
</a>
@endsection

@section('content')
  @include('pages.customer-list.table')
@endsection