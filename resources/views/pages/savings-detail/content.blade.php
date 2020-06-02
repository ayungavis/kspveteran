<div class="nk-block">
  <div class="nk-block-head">
    <div class="nk-block-head-content">
      <h5 class="nk-block-title">Tabungan Nasabah</h5>
      <div class="nk-block-des">
        <p>Informasi total tabungan nasbah</p>
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
          <span class="data-label">Jumlah Tabungan</span>
          <span class="data-value text-soft">@currency($saving->amount)</span>
        </div>
        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span>
        </div>
      </div><!-- .data-item -->
    </div><!-- .nk-data -->
  </div><!-- .card -->
</div><!-- .nk-block -->