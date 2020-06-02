<div class="nk-block">
  <div class="nk-block-head">
    <div class="nk-block-head-content">
      <h5 class="nk-block-title">Angsuran Nasabah</h5>
      <div class="nk-block-des">
        <p>Informasi jumlah angsuran nasabah.</p>
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
          <span class="data-label">Tanggal</span>
          <span class="data-value">{{ date('d M Y', strtotime($installment->date)) }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Total Pinjaman</span>
          <span class="data-value">@currency($installment->total_loan)</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Jumlaah Angsuran</span>
          <span class="data-value">@currency($installment->total_amount)</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Jumlah Tiap Kali Angsur</span>
          <span class="data-value">@currency($installment->each_amount)</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Mulai Angsur</span>
          <span class="data-value">@currency($installment->start_amount)</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
    </div><!-- .nk-data -->
  </div><!-- .card -->
</div><!-- .nk-block -->