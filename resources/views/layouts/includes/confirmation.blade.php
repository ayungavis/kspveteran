@if ($application->status->slug == 'waiting-confirmation')
<div class="nk-block nk-block-lg">
  <div class="card card-bordered border-primary">
    <div class="card-inner">
      <div class="nk-cta">
        <div class="nk-cta-block">
          <div class="nk-cta-img">
            <em class="icon icon-circle ni ni-alert-fill-c"></em>
          </div>
          <div class="nk-cta-text">
            <p>Apakah Anda menyetujui pengajuan pinjaman ini?</p>
          </div>
        </div>
        <div class="nk-cta-action">
          <a href="{{ url('applications/'. $customer->id .'/disapprove') }}" class="btn btn-danger mr-2"
            data-toggle="modal" data-target="#application-disapprove">Tidak Setuju</a>
          <a href="{{ url('applications/'. $customer->id .'/approve') }}" class="btn btn-success" data-toggle="modal"
            data-target="#application-approve">Setuju</a>
        </div>
      </div>
    </div>
  </div><!-- .card -->
</div>
@endif

@section('before-script')
<!-- @@ Profile Edit Modal @e -->
<div class="modal fade" tabindex="-1" role="dialog" id="application-disapprove">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
      <div class="modal-body modal-body-lg">
        <h5 class="title">Alasan Tidak Disetujui</h5>
        <div class="tab-content">
          <div class="tab-pane active" id="personal">
            <form method="post" action="{{ url('applications/'. $application->id .'/disapprove') }}">
              @csrf
              <div class="row gy-4">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-label" for="rejected_reason">Alasan</label>
                    <div class="form-control-wrap">
                      <textarea type="text" class="form-control" rows="3" id="rejected_reason" name="rejected_reason"
                        placeholder="Ketik alasan di sini..." required></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                    <li>
                      <input type="hidden" name="_method" value="put">
                      <input type="hidden" name="whatsapp" value="{{ $customer->whatsapp }}">
                      <button type="submit" class="btn btn-lg btn-primary">Kirim</button>
                    </li>
                    <li>
                      <a href="#" data-dismiss="modal" class="link link-light">Batal</a>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div><!-- .tab-pane -->
        </div><!-- .tab-content -->
      </div><!-- .modal-body -->
    </div><!-- .modal-content -->
  </div><!-- .modal-dialog -->
</div><!-- .modal -->

<!-- @@ Profile Edit Modal @e -->
<div class="modal fade" tabindex="-1" role="dialog" id="application-approve">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
      <div class="modal-body modal-body-lg">
        <h5 class="title">Tentukan Waktu Ketemuan</h5>
        <div class="tab-content">
          <div class="tab-pane active" id="personal">
            <form method="post" action="{{ url('applications/'. $application->id .'/approve') }}">
              @csrf
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="approved_invitation_date">Tanggal Nasabah Datang Ke Kantor</label>
                    <input type="text" class="form-control date-picker" id="approved_invitation_date"
                      name="approved_invitation_date" data-date-format="yyyy-mm-dd" placeholder="1990-06-17" required />
                    <div class="form-note">
                      Format tanggal <code>yyyy-mm-dd</code>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                    <li>
                      <input type="hidden" name="_method" value="put">
                      <input type="hidden" name="whatsapp" value="{{ $customer->whatsapp }}">
                      <button type="submit" class="btn btn-lg btn-primary">Kirim</button>
                    </li>
                    <li>
                      <a href="#" data-dismiss="modal" class="link link-light">Batal</a>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div><!-- .tab-pane -->
        </div><!-- .tab-content -->
      </div><!-- .modal-body -->
    </div><!-- .modal-content -->
  </div><!-- .modal-dialog -->
</div><!-- .modal -->
@endsection