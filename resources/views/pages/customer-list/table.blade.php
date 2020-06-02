<div class="nk-block">
  <div class="row g-gs">
    <div class="col-md-12">
      <div class="card card-bordered">
        @if ($customers->isEmpty())
        <div class="example-alert form-group">
          <div class="alert alert-info alert-icon">
            <em class="icon ni ni-info-fill"></em> Belum ada data.
          </div>
        </div>
        @else
        <table class="table table-member">
          <thead class="tb-member-head thead-light">
            <tr class="tb-member-item">
              <th class="tb-member-info">
                <span class="overline-title">Nasabah</span>
              </th>
              <th class="tb-member-type tb-col-sm">
                <span class="overline-title">Dibuat Sejak</span>
              </th>
              <th class="tb-member-role tb-col-md">
                <span class="overline-title">WhatsApp</span>
              </th>
              <th class="tb-member-role tb-col-md">
                <span class="overline-title">Status</span>
              </th>
              <th class="tb-member-action">
                <span class="overline-title">Aksi</span>
              </th>
            </tr>
          </thead>
          <tbody class="tb-member-body">
            @foreach ($customers as $customer)
            <tr class="tb-member-item">
              <td class="tb-member-info">
                <div class="user-card">
                  <div class="user-info">
                    <span class="lead-text">{{ $customer->name }}</span>
                    <span class="sub-text">{{ $customer->id_card }}</span>
                  </div>
                </div>
              </td>
              <td class="tb-member-type tb-col-sm">
                <span>{{ date('d M Y', strtotime($customer->created_at)) }}</span>
              </td>
              <td class="tb-member-role tb-col-md">
                <span>{{ $customer->whatsapp }}</span>
              </td>
              <td class="tb-member-role tb-col-md">
                <span class="badge badge-dim badge-info">{{ $customer->application->status->name }}</span>
              </td>
              <td class="tb-member-action">
                <div class="d-none d-md-inline">
                  <a href="{{ url('customers/'. $customer->id) }}"
                    class="btn btn-dim btn-sm btn-primary"><span>Lihat</span></a>
                  <!-- <a href="{{ url('custoemrs/'. $customer->id .'/edit') }}" class="link link-sm"><span>Edit</span></a>
                  <a href="#"
                    onclick="event.preventDefault(); document.getElementById('remove-data-' + <?php echo $customer->id ?>).submit();"
                    class="link link-sm link-danger"><span>Hapus</span></a> -->
                </div>
                <div class="dropdown d-md-none">
                  <a class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em
                      class="icon ni ni-more-v"></em></a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                    <ul class="link-list-plain no-bdr">
                      <li>
                        <a href="{{ url('customers/'. $customer->id) }}"
                          class="link link-sm link-secondary"><span>Lihat</span></a>
                      </li>
                      <!-- <li>
                        <a href="{{ url('custoemrs/'. $customer->id .'/edit') }}"
                          class="link link-sm"><span>Edit</span></a>
                      </li> -->
                      <!-- <li>
                        <a href="#"
                          onclick="event.preventDefault(); document.getElementById('remove-data-' + <?php echo $customer->id ?>).submit();"
                          class="link link-sm link-danger"><span>Hapus</span></a>
                      </li> -->
                    </ul>
                  </div>
                </div>
              </td>
              <form id="remove-data-{{ $customer->id }}" method="post" action="{{ url('customers/'. $customer->id) }}">
                @csrf
                <input type="hidden" name="_method" value="delete" />
              </form>
            </tr>
            @endforeach
            <!-- .tb-member-item -->
          </tbody>
        </table>
        @endif

        {{ $customers->links('vendor.pagination.default') }}

      </div>
    </div>
    <!-- .col -->
  </div>
  <!-- .row -->
</div>