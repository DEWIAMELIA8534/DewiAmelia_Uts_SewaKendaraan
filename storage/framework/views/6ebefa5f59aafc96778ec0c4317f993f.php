

<?php $__env->startSection('content'); ?>

<body>
    <h1>Pemesanan Hotel</h1>
    <a href="<?php echo e(url('crud/create')); ?>" class="btn btn-primary btn-sm mb-2 mt-4">Tambah Data</a>
    <div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Email</th>
                <th>Country</th>
                <th>Menu</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn-primary btn-sm">Detail</button>
                    <button class="btn-primary btn-sm"> Edit</button>
                    <button class="btn-primary btn-sm">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemesananHotel\resources\views/index.blade.php ENDPATH**/ ?>