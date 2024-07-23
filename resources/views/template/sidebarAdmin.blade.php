
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Admin</span></li>
<li class="nav-item{{ request()->is('pengguna') ? ' active' : '' }}"><a href="{{ url('/admin/pengguna') }}"><i class="fas fa-user-friends"></i><span> Pengguna</span></a></li>
<li class="nav-item{{ request()->is('customer') ? ' active' : '' }}"><a href="{{ url('/admin/customer') }}"><i class="fas fa-chalkboard-teacher"></i><span>Customer</span></a></li>
<li class="nav-item{{ request()->is('hargahariini') ? ' active' : '' }}"><a href="{{ url('/admin/hargahariini') }}"><i class="fas fa-book-open"></i><span>Harga Hari Ini</span></a></li>
<li class="nav-item{{ request()->is('invoice') ? ' active' : '' }}"><a href="{{ url('/admin/invoice') }}"><i class="fas fa-users"></i><span>Invoice</span></a></li>
<li class="nav-item{{ request()->is('kamar') ? ' active' : '' }}"><a href="{{ url('/admin/kamar') }}"><i class="fas fa-user-graduate"></i><span>Kamar</span></a></li>
<li class="nav-item{{ request()->is('pembayaran') ? ' active' : '' }}"><a href="{{ url('/admin/pembayaran') }}"><i class="fas fa-user-graduate"></i><span>Pembayaran</span></a></li>
<li class="nav-item{{ request()->is('reservasi') ? ' active' : '' }}"><a href="{{ url('/admin/reservasi') }}"><i class="far fa-bell"></i><span>Reservasi</span></a></li>