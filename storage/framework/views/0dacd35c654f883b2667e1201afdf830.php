<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?php echo e(route('dashboard', request()->query())); ?>">
            <i class="fas fa-cube me-2"></i>
            <span style="font-weight: 600;">WEB PERKULIAHAN</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('dashboard') ? 'active fw-bold' : ''); ?>" href="<?php echo e(route('dashboard', request()->query())); ?>">
                        <i class="fas fa-home me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('pengelolaan') ? 'active fw-bold' : ''); ?>" href="<?php echo e(route('pengelolaan', request()->query())); ?>">
                        <i class="fas fa-database me-1"></i> Pengelolaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('profile') ? 'active fw-bold' : ''); ?>" href="<?php echo e(route('profile', request()->query())); ?>">
                        <i class="fas fa-user me-1"></i> Profile
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <a href="<?php echo e(route('login')); ?>" class="btn btn-light btn-sm">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </a>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\reyy\laragon\www\UTS_PWEB_232410101091\resources\views/components/navbar.blade.php ENDPATH**/ ?>