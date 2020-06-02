<div class="nk-block">
  <div class="nk-block-head">
    <div class="nk-block-head-content">
      <h5 class="nk-block-title">Aplikasi Pengajuan</h5>
      <div class="nk-block-des">
        <p>Informasi mengenai pengajuan pinjaman.</p>
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
          <span class="data-label">Jumlah Pinjaman</span>
          <span class="data-value">@currency($application->loan_amount)</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Jangka Waktu</span>
          <span class="data-value">{{ $application->loan_period }} bulan</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Jenis Kredit</span>
          <span class="data-value">{{ $application->loan_application }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Keperluan Kredit</span>
          <span class="data-value">{{ $application->loan_requirement }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Barang Jaminan</span>
          <span class="data-value">{{ $application->loan_item }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
      <div class="data-item">
        <div class="data-col">
          <span class="data-label">Status</span>
          <span class="data-value">{{ $application->status->name }}</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
    </div><!-- .nk-data -->
  </div><!-- .card -->
</div><!-- .nk-block -->