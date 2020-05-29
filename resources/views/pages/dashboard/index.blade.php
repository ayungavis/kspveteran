@extends('layouts.app')

@section('page-title')
Selamat datang, {{ Auth::user()->name }}!
@endsection

@section('page-description')
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti adipisci saepe.
@endsection

@section('breadcumb')
<li class="breadcrumb-item active">
  Beranda
</li>
@endsection

@section('content')
  @include('pages.dashboard.menu')
  @include('pages.dashboard.customers')
@endsection