

<?php $__env->startSection('title', 'Produk'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    /* Gradient Banner Header */
    .header-banner {
        background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
        border-radius: 16px;
    }

    /* Styling Card Modern */
    .card {
        border-radius: 16px !important;
        border: none;
    }

    /* Custom Table Styling */
    .table {
        vertical-align: middle;
    }

    .table thead th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.72rem;
        letter-spacing: 0.8px;
        color: #6c757d;
        background-color: #f8f9fa;
        border-bottom: 1px solid #edf2f7;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .table tbody tr {
        transition: all 0.2s ease;
    }

    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.03);
    }

    /* Custom Product Image Thumbnail */
    .product-img-wrapper {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        overflow: hidden;
        background-color: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e9ecef;
    }

    .product-img-thumb {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .table tbody tr:hover .product-img-thumb {
        transform: scale(1.1);
    }

    /* Custom Pill Badges Soft */
    .badge-soft-success {
        background-color: #d1e7dd;
        color: #0f5132;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 30px;
    }

    .badge-soft-warning {
        background-color: #fff3cd;
        color: #856404;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 30px;
    }

    .badge-soft-danger {
        background-color: #f8d7da;
        color: #842029;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 30px;
    }

    /* Search & Filter Inputs */
    .search-input-group .form-control {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        border-color: #dee2e6;
    }

    .search-input-group .btn {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    /* Action Buttons */
    .btn-action {
        width: 34px;
        height: 34px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        transition: all 0.2s ease;
    }
</style>

<div class="container py-4">

    <div class="header-banner text-white p-4 mb-4 shadow-sm">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
            <div
                <h2 class="fw-bold mb-1">Daftar Produk</h2>
                <p class="mb-0 text-white-50 small">
                    Kelola katalog item produk, penyesuaian harga jual/beli, serta ketersediaan stok inventaris Anda.
                </p>
            </div>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Produk::class)): ?>
                    <a href="<?php echo e(route('admin.produk.create')); ?>" class="btn btn-light text-primary fw-semibold px-4 py-2.5 rounded-3 shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="bi bi-plus-lg fs-6"></i>
                        <span>Tambah Produk</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-4">

            <form action="<?php echo e(route('admin.produk.index')); ?>" method="GET" class="mb-4">
                <div class="row g-2">
                    <div class="col-md-6 col-lg-4">
                        <div class="input-group search-input-group">
                            <span class="input-group-text bg-white border-end-0 text-muted px-3">
                                <i class="bi bi-search"></i>
                            </span>
                            <input
                                type="text"
                                name="search"
                                value="<?php echo e(request('search')); ?>"
                                class="form-control border-start-0 ps-0"
                                placeholder="Cari nama produk..."
                            >
                            <button class="btn btn-primary px-4 fw-medium" type="submit">
                                Cari
                            </button>
                        </div>
                    </div>
                    <?php if(request('search')): ?>
                        <div class="col-auto">
                            <a href="<?php echo e(route('admin.produk.index')); ?>" class="btn btn-outline-secondary d-inline-flex align-items-center gap-1 rounded-3">
                                <i class="bi bi-x-circle"></i>
                                <span>Reset Filter</span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th scope="col" class="ps-3" style="width: 5%">#</th>
                            <th scope="col" style="width: 8%">Foto</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Dibuat Oleh</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col" class="text-center">Stok</th>
                            <th scope="col" class="text-end pe-3" style="width: 12%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th scope="row" class="ps-3 text-muted fw-normal">
                                    <?php echo e($products->firstItem() + $loop->index); ?>

                                </th>
                                <td>
                                    <div class="product-img-wrapper">
                                        <?php if($product->foto): ?>
                                            <img src="<?php echo e(asset('storage/'.$product->foto)); ?>"
                                                 alt="<?php echo e($product->nama); ?>"
                                                 class="product-img-thumb">
                                        <?php else: ?>
                                            <i class="bi bi-image text-muted fs-5"></i>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-bold text-dark"><?php echo e($product->nama); ?></div>
                                </td>
                                <td>
                                    <span class="text-muted small">
                                        <i class="bi bi-person me-1"></i><?php echo e($product->user->name ?? '-'); ?>

                                    </span>
                                </td>
                                <td class="text-muted small">
                                    Rp <?php echo e(number_format($product->harga_beli, 0, ',', '.')); ?>

                                </td>
                                <td>
                                    <span class="fw-bold text-success">
                                        Rp <?php echo e(number_format($product->harga_jual, 0, ',', '.')); ?>

                                    </span>
                                </td>
                                <td class="text-center">
                                    <?php if($product->stok > 10): ?>
                                        <span class="badge badge-soft-success"><?php echo e($product->stok); ?></span>
                                    <?php elseif($product->stok > 0): ?>
                                        <span class="badge badge-soft-warning"><?php echo e($product->stok); ?></span>
                                    <?php else: ?>
                                        <span class="badge badge-soft-danger">Habis</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-end pe-3">
                                    <div class="d-inline-flex gap-1">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $product)): ?>
                                            <a href="<?php echo e(route('admin.produk.edit', $product)); ?>" 
                                               class="btn btn-sm btn-outline-warning btn-action" 
                                               title="Edit Produk">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $product)): ?>
                                            <form action="<?php echo e(route('admin.produk.destroy', $product)); ?>" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"
                                                        class="btn btn-sm btn-outline-danger btn-action"
                                                        title="Hapus Produk"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="8" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="bi bi-box-seam display-6 d-block mb-2 text-secondary opacity-50"></i>
                                        <h6 class="fw-bold mb-1">Data Produk Tidak Ditemukan</h6>
                                        <p class="small mb-0">Coba ubah kata kunci pencarian Anda atau tambahkan produk baru.</p>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <?php if($products->hasPages()): ?>
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 pt-3 border-top gap-2">
                    <div class="text-muted small">
                        Menampilkan <strong><?php echo e($products->firstItem()); ?></strong> - <strong><?php echo e($products->lastItem()); ?></strong> dari <strong><?php echo e($products->total()); ?></strong> produk
                    </div>
                    <div>
                        <?php echo e($products->links()); ?>

                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_enay3\resources\views/Produk/index.blade.php ENDPATH**/ ?>