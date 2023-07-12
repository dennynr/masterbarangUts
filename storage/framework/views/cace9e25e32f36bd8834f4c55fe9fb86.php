<div class="d-flex">
    <a href="<?php echo e(route('barang.show', ['barang' => $barangku->kode_barang])); ?>" class="btn text-light btn-sm me-2 shadow" style="background-color: #78c0a8"><i class="bi bi-eye"></i></i></a>
    <a href="<?php echo e(route('barang.edit', ['barang' => $barangku->kode_barang])); ?>" class="btn text-light btn-sm me-2 shadow" style="background-color: #248cfc"><i
            class="bi-pencil-square"></i></a>
    <div>
        <form action="<?php echo e(route('barang.destroy', ['barang' => $barangku->kode_barang])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-danger shadow btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
<?php /**PATH C:\Users\denny\masterBarangUts\resources\views/barang/actions.blade.php ENDPATH**/ ?>