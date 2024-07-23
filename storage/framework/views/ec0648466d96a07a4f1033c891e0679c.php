
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman Kamar</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="<?php echo e(route('admin.kamar.store')); ?>" method="POST"  >
          <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kamar</label>
                <input type="text" name="nama_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama kamar">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <?php $__errorArgs = ['nama_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger mt-2">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kamar</label>
                <select class="form-control" name="jenis_kamar" id="exampleFormControlSelect1">
                  <option value="deluxe">deluxe</option>
                  <option value="superior">superior</option>
                  <option value="president">president</option>
                 </select>
                 <?php $__errorArgs = ['jenis_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <div class="alert alert-danger mt-2">
                     <?php echo e($message); ?>

                 </div>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ukuran kamar</label>
              <input type="number" name="ukuran_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ukuran kamar">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              <?php $__errorArgs = ['ukuran_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="alert alert-danger mt-2">
                  <?php echo e($message); ?>

              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Harga</label>
              <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Enter harga">
              <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="alert alert-danger mt-2">
                  <?php echo e($message); ?>

              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
              <br/>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>

        
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Downloads\pemesananHotel\resources\views/levelAdmin/kamar/create.blade.php ENDPATH**/ ?>