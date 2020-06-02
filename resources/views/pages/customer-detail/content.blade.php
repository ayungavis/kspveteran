<div class="nk-block">
  <div class="nk-block-head">
    <div class="nk-block-head-content">
      <h5 class="nk-block-title">Informasi Nasabah</h5>
      <div class="nk-block-des">
        <p>Info dasar, seperti nama, alamat, whatsapp, dan lain-lain.</p>
      </div>
    </div>
  </div><!-- .nk-block-head -->

  @if ($message = Session::get('message'))
  <div class="example-alert form-group">
    <div class="alert alert-success alert-icon">
      <em class="icon ni ni-check-circle"></em> {{ $message }}
    </div>
  </div>
  @endif


  <div class="card card-bordered">
    <div class="nk-data data-list">
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">No. KTP</span>
          <span class="data-value text-soft">{{ $customer->id_card }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item" data-toggle="modal" data-target="#customer-edit">
        <div class="data-col">
          <span class="data-label">Nama Lengkap</span>
          <span class="data-value">{{ $customer->name }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
      </div><!-- .data-item -->
      <div class="data-item" data-toggle="modal" data-target="#customer-edit">
        <div class="data-col">
          <span class="data-label">Nama Suami/ Istri</span>
          <span class="data-value">{{ $customer->couple_name }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
      </div><!-- .data-item -->
      <div class="data-item" data-toggle="modal" data-target="#customer-edit">
        <div class="data-col">
          <span class="data-label">Tempat, Tanggal Lahir</span>
          <span class="data-value">{{ $customer->birth_place }},
            {{ date('d M Y', strtotime($customer->birth_date)) }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
      </div><!-- .data-item -->
      <div class="data-item" data-toggle="modal" data-target="#customer-edit">
        <div class="data-col">
          <span class="data-label">WhatsApp</span>
          <span class="data-value">{{ $customer->whatsapp }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
      </div><!-- .data-item -->
      <div class="data-item" data-toggle="modal" data-target="#customer-edit">
        <div class="data-col">
          <span class="data-label">Pekerjaan</span>
          <span class="data-value">{{ $customer->job }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Saldo</span>
          <span class="data-value text-soft">@currency($customer->balance)</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item" data-toggle="modal" data-target="#customer-edit">
        <div class="data-col">
          <span class="data-label">Alamat</span>
          <span class="data-value">{{ $customer->address }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
      </div><!-- .data-item -->
    </div><!-- .nk-data -->
  </div><!-- .card -->
</div><!-- .nk-block -->