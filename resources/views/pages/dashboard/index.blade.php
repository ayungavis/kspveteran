@extends('layouts.app')

@section('page-title')
Selamat datang, {{ Auth::user()->name }}!
@endsection

@section('page-description')
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti adipisci saepe.
@endsection

@section('content')
  @if (auth()->user()->role->level >= 10)
    @include('pages.dashboard.menu')
  @endif

  @if (auth()->user()->role->level >= 2)
    @include('pages.customer-list.table')
  @endif
@endsection