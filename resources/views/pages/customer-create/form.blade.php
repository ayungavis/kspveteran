<div class="nk-block">
  <div class="row g-gs">
    <div class="col-md-12">

      @if ($message = Session::get('message'))
      <div class="example-alert form-group">
        <div class="alert alert-success alert-icon">
          <em class="icon ni ni-check-circle"></em> {{ $message }}
        </div>
      </div>
      @endif

      <div class="card card-bordered">
        <form class="card-inner" method="post" action="{{ route('customers.store') }}">
          @csrf

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <div class="form-group">
            <label class="form-label" for="id_card">No. KTP</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="id_card" name="id_card" value="{{ old('id_card') }}"
                placeholder="1234567890" required autofocus />
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="name">Nama Pemohon</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                placeholder="John Doe" required />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="birth_place">Tempat Lahir</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control" id="birth_place" name="birth_place"
                    value="{{ old('birth_place') }}" placeholder="Surabaya" required />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="birth_date">Tanggal Lahir</label>
                <div class="form-control-wrap">
                  <div class="form-icon form-icon-left">
                    <em class="icon ni ni-calendar"></em>
                  </div>
                  <input type="text" class="form-control date-picker" id="birth_date" name="birth_date"
                    value="{{ old('birth_date') }}" data-date-format="yyyy-mm-dd" placeholder="1990-06-17" required />
                </div>
                <div class="form-note">
                  Format tanggal <code>yyyy-mm-dd</code>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="couple_name">Nama Suami/ Istri</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="couple_name" name="couple_name"
                value="{{ old('couple_name') }}" placeholder="Jane Doe" required />
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="job">Pekerjaan</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control" id="job" name="job" value="{{ old('job') }}"
                    placeholder="Karyawan Swasta" required />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="whatsapp">WhatsApp</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}"
                    placeholder="8123456789" required />
                  <div class="form-note">
                    Tanpa menggunakan angka <code>0</code> di depannya!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="address">Alamat</label>
            <div class="form-control-wrap">
              <textarea type="text" class="form-control" rows="3" id="address" name="address"
                placeholder="Karyawan Swasta" required>{{ old('address') }}</textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="loan_application">Mengajukan Kredit</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control" id="loan_application" name="loan_application"
                    value="{{ old('loan_application') }}" placeholder="Jenis Kredit" required />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="loan_period">Akan Dilunasi Dalam Waktu</label>
                <div class="form-control-wrap">
                  <input type="number" class="form-control" id="loan_period" name="loan_period"
                    value="{{ old('loan_period') }}" placeholder="12" required />
                </div>
                <div class="form-note">
                  Dalam kurun <code>bulan</code>
                </div>
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="loan_requirement">Keperluan Kredit</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control" id="loan_requirement" name="loan_requirement"
                    value="{{ old('loan_requirement') }}" placeholder="Modal Usaha" required />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="loan_amount">Jumlah Pinjaman</label>
                <div class="form-control-wrap">
                  <div class="form-text-hint">
                    <span class="overline-title">RUPIAH</span>
                  </div>
                  <input type="text" class="form-control rupiah" id="loan_amount" name="loan_amount"
                    value="{{ old('loan_amount') }}" placeholder="1000" />
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="loan_item">Barang Jaminan</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="loan_item" name="loan_item" value="{{ old('loan_item') }}"
                placeholder="BPKB Mobil" required />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="form-action">
                  <ul class="form-btn-group">
                    <li class="form-btn-primary">
                      <a href="{{ url()->previous() }}" class="btn btn-dim btn-outline-light">Batal</a>
                    </li>
                    <li class="form-btn-secondary">
                      <input type="hidden" name="application_status_id" value="1">
                      <button type="submit" class="btn btn-primary">Daftar</button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- .col -->
  </div>
  <!-- .row -->
</div>