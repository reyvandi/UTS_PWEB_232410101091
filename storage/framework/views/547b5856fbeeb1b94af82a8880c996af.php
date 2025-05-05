<?php $__env->startSection('title', 'Login UTS Laravel Project'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-primary"><i></i> Web Perkuliahan</h1>
            <p class="lead text-muted">Selamat datang , silahkan login</p>
        </div>

        <div class="card border-0 shadow">
            <div class="card-body p-4 p-md-5">
                <h4 class="text-center mb-4 fw-bold text-primary">Login</h4>

                <form action="<?php echo e(route('login.process')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-user text-primary"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-0" id="username" name="username" placeholder="Masukkan username " required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-lock text-primary"></i>
                            </span>
                            <input type="password" class="form-control border-start-0 ps-0" id="password" name="password" placeholder="Masukkan password " required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label small" for="remember">
                                Ingat saya
                            </label>
                        </div>
                        <a href="#" class="text-decoration-none small">Lupa password?</a>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary py-2">
                            <i class="fas fa-sign-in-alt me-2"></i> Login
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-center mt-4 small text-muted">
            &copy; <?php echo e(date('Y')); ?> Web Perkuliahan. Semua hak cipta dilindungi.
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\reyy\laragon\www\UTS_PWEB_232410101091\resources\views/login.blade.php ENDPATH**/ ?>