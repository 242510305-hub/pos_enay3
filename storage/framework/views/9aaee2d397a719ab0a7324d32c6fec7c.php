

<?php $__env->startSection('title', 'Penjualan'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container py-4">

```

<div class="p-4 mb-4 rounded-3 text-white shadow-sm" style="background-color: #0d6efd;">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">

        <div>
            <h1 class="h3 fw-bold mb-1 text-white">
                Riwayat Penjualan
            </h1>

            <p class="mb-0 text-white-50 small">
                Kelola transaksi, cetak struk, dan pantau status pembayaran kasir
            </p>
        </div>

        <div>
            <a href="<?php echo e(route('admin.penjualan.create')); ?>"
               class="btn btn-light fw-bold px-3 py-2 shadow-sm d-inline-flex align-items-center gap-2 text-primary">

                <i class="bi bi-plus-circle-fill"></i>
                <span>Tambah Transaksi Baru</span>

            </a>
        </div>

    </div>
</div>



<?php if(session('errors')): ?>
    <div class="alert alert-danger border-0 shadow-sm alert-dismissible fade show mb-4"
         role="alert">

        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <?php echo e(session('errors')); ?>


        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>

    </div>
<?php endif; ?>



<?php if(session('success')): ?>
    <div class="alert alert-success border-0 shadow-sm alert-dismissible fade show mb-4"
         role="alert">

        <i class="bi bi-check-circle-fill me-2"></i>
        <?php echo e(session('success')); ?>


        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>

    </div>
<?php endif; ?>



<div class="row g-3 mb-4">

    
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm rounded-3 text-white"
             style="background-color: #0d6efd;">

            <div class="card-body p-3 d-flex align-items-center justify-content-between">

                <div>
                    <span class="small fw-bold text-uppercase d-block mb-1 text-white-50"
                          style="font-size: 11px;">
                        Total Entri
                    </span>

                    <h3 class="fw-bold mb-0 text-white">
                        <?php echo e($sales->total()); ?>

                    </h3>
                </div>

                <div class="p-2 bg-white bg-opacity-25 rounded-3 text-white">
                    <i class="bi bi-receipt fs-3"></i>
                </div>

            </div>
        </div>
    </div>


    
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm rounded-3 text-white"
             style="background-color: #198754;">

            <div class="card-body p-3 d-flex align-items-center justify-content-between">

                <div>
                    <span class="small fw-bold text-uppercase d-block mb-1 text-white-50"
                          style="font-size: 11px;">
                        Lunas
                    </span>

                    <h3 class="fw-bold mb-0 text-white">
                        <?php echo e($sales->where('status', 'lunas')->count()); ?>

                    </h3>
                </div>

                <div class="p-2 bg-white bg-opacity-25 rounded-3 text-white">
                    <i class="bi bi-check-all fs-3"></i>
                </div>

            </div>
        </div>
    </div>


    
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm rounded-3 text-white"
             style="background-color: #0dcaf0;">

            <div class="card-body p-3 d-flex align-items-center justify-content-between">

                <div>
                    <span class="small fw-bold text-uppercase d-block mb-1 text-white-50"
                          style="font-size: 11px;">
                        Metode Tunai
                    </span>

                    <h3 class="fw-bold mb-0 text-white">
                        <?php echo e($sales->where('metode_pembayaran', 'tunai')->count()); ?>

                    </h3>
                </div>

                <div class="p-2 bg-white bg-opacity-25 rounded-3 text-white">
                    <i class="bi bi-cash-stack fs-3"></i>
                </div>

            </div>
        </div>
    </div>


    
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm rounded-3 text-white"
             style="background-color: #6c757d;">

            <div class="card-body p-3 d-flex align-items-center justify-content-between">

                <div>
                    <span class="small fw-bold text-uppercase d-block mb-1 text-white-50"
                          style="font-size: 11px;">
                        Non-Tunai
                    </span>

                    <h3 class="fw-bold mb-0 text-white">
                        <?php echo e($sales->where('metode_pembayaran', '!=', 'tunai')->count()); ?>

                    </h3>
                </div>

                <div class="p-2 bg-white bg-opacity-25 rounded-3 text-white">
                    <i class="bi bi-credit-card fs-3"></i>
                </div>

            </div>
        </div>
    </div>

</div>



<div class="row mb-4">

    <div class="col-md-5 col-lg-4">

        <form action="<?php echo e(route('admin.penjualan.index')); ?>" method="GET">

            <div class="input-group rounded-3 overflow-hidden border">

                <span class="input-group-text bg-primary text-white border-0">
                    <i class="bi bi-search"></i>
                </span>

                <input
                    type="text"
                    name="search"
                    value="<?php echo e(request('search')); ?>"
                    class="form-control bg-light border-0"
                    placeholder="Cari nota, kasir, atau status..."
                >

                <button class="btn btn-primary px-3" type="submit">
                    Cari
                </button>

            </div>

        </form>

    </div>

</div>



<div class="card border-0 shadow-sm rounded-3 overflow-hidden">

    <div class="card-header bg-white border-0 p-3">

        <div class="d-flex justify-content-between align-items-center">

            <div>
                <h5 class="fw-bold mb-1">
                    <i class="bi bi-table text-primary me-2"></i>
                    Data Transaksi Penjualan
                </h5>

                <small class="text-muted">
                    Daftar seluruh transaksi penjualan
                </small>
            </div>

        </div>

    </div>


    <div class="table-responsive">

        <table class="table table-hover align-middle mb-0">

            <thead class="table-primary">

                <tr>

                    <th class="text-center" style="width: 60px;">
                        No
                    </th>

                    <th>
                        Tanggal
                    </th>

                    <th>
                        Kasir
                    </th>

                    <th class="text-end">
                        Total Pembayaran
                    </th>

                    <th class="text-center">
                        Metode Pembayaran
                    </th>

                    <th class="text-center">
                        Status
                    </th>

                    <th class="text-center" style="width: 180px;">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <?php
                        $metode = strtolower($sale->metode_pembayaran ?? '');

                        $isTunai = (
                            $metode == 'tunai' ||
                            $metode == 'cash'
                        );

                        $status = strtolower($sale->status ?? '');

                        $isLunas = (
                            $status == 'lunas' ||
                            $status == 'paid' ||
                            $status == 'completed'
                        );
                    ?>


                    <tr>

                        
                        <td class="text-center fw-bold text-muted">

                            <?php echo e($sales->firstItem() + $loop->index); ?>


                        </td>


                        
                        <td>

                            <div class="fw-semibold text-dark">

                                <i class="bi bi-calendar-event text-primary me-1"></i>

                                <?php echo e($sale->created_at->translatedFormat('d M Y')); ?>


                            </div>

                            <small class="text-muted">

                                <i class="bi bi-clock text-primary me-1"></i>

                                <?php echo e($sale->created_at->translatedFormat('H:i:s')); ?>

                                WIB

                            </small>

                        </td>


                        
                        <td>

                            <div class="d-flex align-items-center gap-2">

                                <div
                                    class="rounded-circle text-white fw-bold d-flex align-items-center justify-content-center"
                                    style="
                                        width: 36px;
                                        height: 36px;
                                        background-color: #0dcaf0;
                                    "
                                >
                                    <?php echo e(strtoupper(substr($sale->user->name ?? 'U', 0, 1))); ?>

                                </div>

                                <div>

                                    <span class="fw-semibold d-block">
                                        <?php echo e($sale->user->name ?? '-'); ?>

                                    </span>

                                    <small class="text-muted">
                                        Kasir
                                    </small>

                                </div>

                            </div>

                        </td>


                        
                        <td class="text-end">

                            <span class="fw-bold text-success">

                                Rp <?php echo e(number_format($sale->total_pembayaran, 0, ',', '.')); ?>


                            </span>

                        </td>


                        
                        <td class="text-center">

                            <span
                                class="badge rounded-pill px-3 py-2 text-white"
                                style="
                                    background-color:
                                    <?php echo e($isTunai ? '#0d1213' : '#5379b3'); ?>;
                                "
                            >

                                <i class="bi
                                    <?php echo e($isTunai ? 'bi-cash' : 'bi-credit-card'); ?>

                                    me-1">
                                </i>

                                <?php echo e(strtoupper($sale->metode_pembayaran ?? '-')); ?>


                            </span>

                        </td>


                        
                        <td class="text-center">

                            <span
                                class="badge rounded-pill px-3 py-2
                                <?php echo e($isLunas ? 'bg-success' : 'bg-secondary'); ?>"
                            >

                                <i class="bi
                                    <?php echo e($isLunas
                                        ? 'bi-check-circle-fill'
                                        : 'bi-hourglass-split'); ?>

                                    me-1">
                                </i>

                                <?php echo e(strtoupper($sale->status ?? '-')); ?>


                            </span>

                        </td>


                        
                        <td>

                            <div class="d-flex justify-content-center gap-1">

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $sale)): ?>

                                    <a
                                        href="<?php echo e(route('admin.penjualan.edit', $sale->id)); ?>"
                                        class="btn btn-sm btn-secondary"
                                        title="Edit"
                                    >

                                        <i class="bi bi-pencil-fill"></i>

                                    </a>

                                <?php endif; ?>


                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $sale)): ?>

                                    <form
                                        action="<?php echo e(route('admin.penjualan.destroy', $sale->id)); ?>"
                                        method="POST"
                                        class="d-inline"
                                    >

                                        <?php echo csrf_field(); ?>

                                        <?php echo method_field('DELETE'); ?>

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-danger"
                                            title="Hapus"
                                            onclick="return confirm('Apakah Anda yakin akan menghapus data penjualan ini?')"
                                        >

                                            <i class="bi bi-trash-fill"></i>

                                        </button>

                                    </form>

                                <?php endif; ?>

                            </div>

                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>

                        <td colspan="7" class="text-center py-5">

                            <i class="bi bi-receipt-cutoff fs-1 text-primary d-block mb-3"></i>

                            <h6 class="fw-bold text-primary">
                                Data transaksi penjualan tidak ditemukan.
                            </h6>

                            <small class="text-muted">
                                Belum ada transaksi yang tersedia.
                            </small>

                        </td>

                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>



<?php if($sales->hasPages()): ?>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 gap-2">

        <div class="text-muted small">

            Showing
            <strong><?php echo e($sales->firstItem()); ?></strong>
            to
            <strong><?php echo e($sales->lastItem()); ?></strong>
            of
            <strong><?php echo e($sales->total()); ?></strong>
            results

        </div>

        <div>

            <?php echo e($sales->links()); ?>


        </div>

    </div>

<?php endif; ?>
```

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_enay3\resources\views/penjualan/index.blade.php ENDPATH**/ ?>