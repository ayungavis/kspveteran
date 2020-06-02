@extends('layouts.app')

@section('page-title')
Angsuran Nasabah
@endsection

@section('page-description')
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti adipisci saepe.
@endsection

@section('breadcumb')
<li class="breadcrumb-item">
  <a href="{{ url('customers/'. $customer->id) }}">Detail Nasabah</a>
</li>
<li class="breadcrumb-item active">
  Angsuran
</li>
@endsection

@section('header-button')
<a href="{{ url('customers') }}" class="btn btn-white btn-dim btn-outline-primary">
  <em class="icon ni ni-back-ios"></em>
  <span>Kembali</span>
</a>
@endsection

@section('content')
@include('layouts.includes.navbar')
@include('pages.installment-detail.content')

@if (auth()->user()->role->level == 2)
  @include('layouts.includes.confirmation')
@endif
@endsection