<!-- @@ Profile Edit Modal @e -->
<div class="modal fade" tabindex="-1" role="dialog" id="customer-edit">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
      <div class="modal-body modal-body-lg">
        <h5 class="title">Edit Data Nasabah</h5>
        <div class="tab-content">
          <div class="tab-pane active" id="personal">
            <form method="post" action="{{ url('customers/'. $customer->id) }}">
              @csrf
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="name">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name"
                      value="{{ $customer->name }}" placeholder="John Doe" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="couple_name">Nama Suami/ Istri</label>
                    <input type="text" class="form-control form-control-lg" id="couple_name" name="couple_name"
                      value="{{ $customer->couple_name }}" placeholder="Johan Doe" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="birth_place">Tempat Lahir</label>
                    <input type="text" class="form-control form-control-lg date-picker" id="birth_place"
                      name="birth_place" value="{{ $customer->birth_place }}" placeholder="Karyawan Swasta" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="birth_date">Tanggal Lahir</label>
                    <input type="text" class="form-control date-picker" id="birth_date" name="birth_date"
                      value="{{ $customer->birth_date }}" data-date-format="yyyy-mm-dd" placeholder="1990-06-17"
                      required />
                    <div class="form-note">
                      Format tanggal <code>yyyy-mm-dd</code>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="whatsapp">WhatsApp</label>
                    <input type="text" class="form-control form-control-lg" id="whatsapp" name="whatsapp"
                      value="{{ $customer->whatsapp }}" placeholder="8123456789" required>
                    <div class="form-note">
                      Tanpa menggunakan angka <code>0</code> di depannya!
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="job">Pekerjaan</label>
                    <input type="text" class="form-control form-control-lg date-picker" id="job" name="job"
                      value="{{ $customer->job }}" placeholder="Karyawan Swasta" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-label" for="address">Alamat</label>
                    <div class="form-control-wrap">
                      <textarea type="text" class="form-control" rows="3" id="address" name="address"
                        placeholder="Karyawan Swasta" required>{{ $customer->address }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                    <li>
                      <input type="hidden" name="_method" value="put">
                      <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
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