
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Admin</span></li>
<li class="nav-item<?php echo e(request()->is('pengguna') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/pengguna')); ?>"><i class="fas fa-user-friends"></i><span> Pengguna</span></a></li>
<li class="nav-item<?php echo e(request()->is('customer') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/customer')); ?>"><i class="fas fa-chalkboard-teacher"></i><span>Customer</span></a></li>
<li class="nav-item<?php echo e(request()->is('hargahariini') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/hargahariini')); ?>"><i class="fas fa-book-open"></i><span>Harga Hari Ini</span></a></li>
<li class="nav-item<?php echo e(request()->is('invoice') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/invoice')); ?>"><i class="fas fa-users"></i><span>Invoice</span></a></li>
<li class="nav-item<?php echo e(request()->is('kamar') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/kamar')); ?>"><i class="fas fa-user-graduate"></i><span>Kamar</span></a></li>
<li class="nav-item<?php echo e(request()->is('pembayaran') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/pembayaran')); ?>"><i class="fas fa-user-graduate"></i><span>Pembayaran</span></a></li>
<li class="nav-item<?php echo e(request()->is('reservasi') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/reservasi')); ?>"><i class="far fa-bell"></i><span>Reservasi</span></a></li><?php /**PATH C:\Users\User\Downloads\pemesananHotel\resources\views/template/sidebarAdmin.blade.php ENDPATH**/ ?>