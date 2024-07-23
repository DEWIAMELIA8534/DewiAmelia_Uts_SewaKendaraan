
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Halaman Harga Hari Ini</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="<?php echo e(route('admin.hargahariini.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Available Room</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">ID Kamar</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $hargahariini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pengguna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center">
                                <?php echo e(++$index); ?>

                            </td>
                            <td><?php echo e($pengguna->harga); ?></td>
                            <td><?php echo e($pengguna->available_room); ?></td>
                            <td><?php echo e($pengguna->tanggal); ?></td>
                            <td><?php echo e($pengguna->id_kamar); ?></td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('admin.hargahariini.destroy', $pengguna->id_hotel)); ?>" method="POST">
                                    <a href="<?php echo e(route('admin.hargahariini.show', $pengguna->id_hotel)); ?>" class="btn btn-sm btn-primary">SHOW</a>
                                    <a href="<?php echo e(route('admin.hargahariini.edit', $pengguna->id_hotel)); ?>" class="btn btn-sm btn-primary">EDIT</a> <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="alert alert-danger">
                            Data Harga Hari Ini Belum Ada.
                        </div>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Downloads\pemesananHotel\resources\views/levelAdmin/hargahariini/index.blade.php ENDPATH**/ ?>