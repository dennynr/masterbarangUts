<?php
    $currentRouteName = Route::currentRouteName();
?>
<nav class="navbar navbar-expand-md navbar-dark" style="background-color:#439093 ">
    <div class="container p-2">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi bi-box-seam-fill me-2"></i></i>
           Toko Sidoarjo</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item ms-3 col-2 col-md-auto">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>"><i
                            class="bi bi-house-door me-1"></i> Home</a>
                </li>
                <li class="nav-item ms-3 col-2 col-md-auto">
                    <a class="nav-link" href="<?php echo e(route('barang.index')); ?>"><i class="bi bi-clipboard me-1"></i>
                        List
                        Barang</a>
                </li>
            </ul>
            <hr class="d-lg-none text-white-50">
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\denny\masterBarangUts\resources\views/layouts/nav.blade.php ENDPATH**/ ?>