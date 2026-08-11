<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm border-bottom py-2 sticky-top">
    <div class="container">
        
        
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-primary fs-4" href="<?php echo e(route('dashboard')); ?>">
            <div class="bg-primary text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                <i class="bi bi-cart-check-fill fs-5"></i>
            </div>
            <span>POS<span class="text-dark">Naysa</span></span>
        </a>

        
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 gap-lg-1">
                
                
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 d-flex align-items-center gap-2 <?php echo e(Request::is('dashboard') ? 'active fw-bold text-primary bg-primary-subtle' : 'text-secondary'); ?>" 
                       href="<?php echo e(route('dashboard')); ?>">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 d-flex align-items-center gap-2 <?php echo e(Request::is('admin/users*') ? 'active fw-bold text-primary bg-primary-subtle' : 'text-secondary'); ?>" 
                       href="<?php echo e(route('admin.users')); ?>">
                        <i class="bi bi-people-fill"></i>
                        <span>Users</span>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 d-flex align-items-center gap-2 <?php echo e(Request::is('admin/produk*') || Request::is('produk*') ? 'active fw-bold text-primary bg-primary-subtle' : 'text-secondary'); ?>" 
                       href="<?php echo e(route('admin.produk.index')); ?>">
                        <i class="bi bi-box-seam-fill"></i>
                        <span>Produk</span>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 d-flex align-items-center gap-2 <?php echo e(Request::is('admin/penjualan*') ? 'active fw-bold text-primary bg-primary-subtle' : 'text-secondary'); ?>"
                       href="<?php echo e(route('admin.penjualan.index')); ?>">
                        <i class="bi bi-receipt-cutoff"></i>
                        <span>Penjualan</span>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 d-flex align-items-center gap-2 <?php echo e(Request::is('tentang') ? 'active fw-bold text-primary bg-primary-subtle' : 'text-secondary'); ?>" 
                       href="<?php echo e(route('tentang')); ?>">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Tentang</span>
                    </a>
                </li>

            </ul>

            
            <form class="d-flex ms-lg-3 mt-3 mt-lg-0" action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-outline-danger rounded-pill px-4 d-flex align-items-center gap-2 fw-semibold w-100 justify-content-center">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </button>
            </form>

        </div>
    </div>
</nav><?php /**PATH C:\laragon\www\pos_enay2-main\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>