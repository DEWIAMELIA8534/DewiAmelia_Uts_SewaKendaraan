
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Customer</span></li>
<li class="nav-item{{ request()->is('view') ? ' active' : '' }}"><a href="{{ url('/customer/reservasi') }}"><i class="fas fa-user-friends"></i><span>Reservasi</span></a></li>