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
        <form class="card-inner" method="post" action="{{ route('savings.store') }}">
          @csrf
          <div class="form-group">
            <label class="form-label" for="id_card">No. KTP</label>
            <div class="form-control-wrap">
              <select class="form-select form-control form-control-lg search" data-search="on" id="id_card"
                name="id_card" required>
                <option value=""></option>
                @foreach ($customers as $customer)
                <option value="{{ $customer }}">{{ $customer->id_card }} - {{ $customer->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="name">Nama Nasabah</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required disabled />
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="address">Alamat</label>
            <div class="form-control-wrap">
              <textarea class="form-control" rows="3" id="address" name="address"
                placeholder="Jl. Ahmad Yani 16/A Surabaya, Jawa Timur" required disabled></textarea>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="whatsapp">Telepon</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="08123456789"
                    required disabled />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="amount">Jumlah Uang Yang Ditabung</label>
                <div class="form-control-wrap">
                  <div class="form-text-hint">
                    <span class="overline-title">RUPIAH</span>
                  </div>
                  <input type="text" class="form-control rupiah" id="amount" name="amount" placeholder="1000" />
                </div>
              </div>
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
                      <input type="hidden" id="customer_id" name="customer_id">
                      <button type="submit" class="btn btn-primary">Simpan</button>
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