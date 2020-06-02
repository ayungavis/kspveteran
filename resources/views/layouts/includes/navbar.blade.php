<ul class="nk-nav nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link @if (url()->current() == url('customers/'. $customer->id)) active @endif"
      href="{{ url('customers/'. $customer->id) }}">Profil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if (url()->current() == url('customers/'. $customer->id .'/applications')) active @endif"
      href="{{ url('customers/'. $customer->id .'/applications') }}">Aplikasi Pengajuan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if (url()->current() == url('customers/'. $customer->id .'/savings')) active @endif"
      href="{{ url('customers/'. $customer->id .'/savings') }}">Tabungan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if (url()->current() == url('customers/'. $customer->id .'/installments')) active @endif"
      href="{{ url('customers/'. $customer->id .'/installments') }}">Angsuran</a>
  </li>
</ul><!-- nav-tabs -->