
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman pembayaran</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
      <div class="col-md-12">
          <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                  <div class="card-body">
                      <h3><?php echo e($pembayaran->customer_id); ?></h3>
                      <p><?php echo e($pembayaran->tanggal); ?></p>
                      <p><?php echo e($pembayaran->metode_bayar); ?></p>
                      <p><?php echo e($pembayaran->id_invoice); ?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Downloads\pemesananHotel\resources\views/levelAdmin/pembayaran/show.blade.php ENDPATH**/ ?>