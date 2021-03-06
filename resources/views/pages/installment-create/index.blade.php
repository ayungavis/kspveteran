@extends('layouts.app')

@section('page-title')
Angusran Pinjaman
@endsection

@section('page-description')
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti adipisci saepe.
@endsection

@section('breadcumb')
<li class="breadcrumb-item active">
  Angsuran Pinjaman
</li>
@endsection

@section('header-button')
<a
  href="{{ route('customers.create') }}"
  class="btn btn-white btn-dim btn-outline-primary"
>
  <em class="icon ni ni-list"></em>
  <span>Riwayat Angsuran</span>
</a>
@endsection

@section('content')
  @include('pages.installment-create.form')
@endsection

@section('extra-script')
<script>
  $('.search').on('select2:select', function(e) {
    const data = e.params.data;
    const customer = JSON.parse(data.id);
    $('#customer_id').val(customer.id);
    $('#name').val(customer.name);
    $('#address').val(customer.address);
  })
</script>
@endsection