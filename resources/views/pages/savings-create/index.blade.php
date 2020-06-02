@extends('layouts.app')

@section('page-title')
Tabung (Simpan)
@endsection

@section('page-description')
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti adipisci saepe.
@endsection

@section('breadcumb')
<li class="breadcrumb-item active">
  Tabung (Simpan)
</li>
@endsection

@section('content')
@include('pages.savings-create.form')
@endsection

@section('extra-script')
<script>
  $('.search').on('select2:select', function(e) {
    const data = e.params.data;
    const customer = JSON.parse(data.id);
    $('#customer_id').val(customer.id);
    $('#name').val(customer.name);
    $('#address').val(customer.address);
    $('#whatsapp').val(customer.whatsapp);
  })
</script>
@endsection