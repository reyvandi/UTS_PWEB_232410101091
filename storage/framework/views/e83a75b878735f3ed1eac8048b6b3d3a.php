<?php $__env->startSection('title', 'Pengelolaan UTS Laravel Project'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold text-dark mb-0">Pengelolaan Data</h2>
        <p class="text-muted">Kelola semua data dalam sistem</p>
    </div>
    <div>
        <button class="btn btn-secondary">
            <i class="fas fa-plus me-2"></i> Tambah Data Baru
        </button>
    </div>
</div>

<div class="card border-0 mb-4">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="fw-bold mb-0">
            <i class="fas fa-table me-2 text-secondary"></i> Data Mata Kuliah 
        </h5>
        <div class="d-flex">
            <div class="input-group me-2">
                <span class="input-group-text bg-light border-end-0">
                    <i class="fas fa-search text-muted"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0" placeholder="Cari data...">
            </div>
            <button class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-filter me-1"></i> Filter
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3">ID</th>
                        <th class="py-3">Nama Project</th>
                        <th class="py-3">Semester</th>
                        <th class="py-3">SKS</th>
                        <th class="py-3">Nilai Mata Kuliah</th>
                        <th class="py-3 text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="align-middle"><?php echo e($item['id']); ?></td>
                            <td class="align-middle fw-medium"><?php echo e($item['nama projek']); ?></td>
                            <td class="align-middle">
                                <span class="badge bg-light text-secondary px-2 py-1 border">
                                    <?php echo e($item['Semester']); ?>

                                </span>
                            </td>
                            <td class="align-middle"><?php echo e($item['SKS']); ?></td>
                            <td class="align-middle"><?php echo e($item['Nilai Mata Kuliah']); ?></td>
                            <td class="align-middle text-end">
                                <button class="btn btn-sm btn-outline-secondary me-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center py-4">Tidak ada data tersedia</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\reyy\laragon\www\UTS_PWEB_232410101091\resources\views/pengelolaan.blade.php ENDPATH**/ ?>