<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3 text-light"><?php echo e($pageTitle); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-sm shadow text-light fs-5" style="background-color: #78c0a8">+ <i class="bi bi-box-seam"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive rounded-4 bg-light p-4">
            <table class="table table-striped mb-2 bg-white shadow">
                <thead style="background-color:#f07818" class="text-light">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($barangku->nama_barang); ?></td>
                            <td><?php echo e($barangku->harga_barang); ?></td>
                            <td><?php echo e($barangku->deskripsi_barang); ?></td>
                            <td><?php echo e($barangku->satuan_name); ?></td>
                            <td><?php echo $__env->make('barang.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\denny\masterBarangUts\resources\views/barang/index.blade.php ENDPATH**/ ?>