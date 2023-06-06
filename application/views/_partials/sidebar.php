<a href="<?php echo site_url('profile') ?>">
    <div class="user-item">
        <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
        <div class="user-edit">
            <h6><?= isset($user['name']) ? $user['name'] : '' ?></h6>
            <div class="d-flex gap-3">
                <i class="ri-edit-box-line"></i>
                <p>Edit Profile</p>
            </div>
        </div>
    </div>
</a>
<?php if ($user['role_id'] == 1) : ?>
    <div class="user-info">
        <a href="<?php echo site_url('profile') ?>">
            <div class="user-item">
                <i class="ri-user-line"></i>
                <h6>Akun Saya</h6>
            </div>
        </a>
        <a href="<?php echo site_url('profile/settingsBank') ?>">
            <div class="user-item">
                <i class="ri-bank-card-line"></i>
                <h6>Bank</h6>
            </div>
        </a>
        <a href="<?php echo site_url('profile/password') ?>">
            <div class="user-item">
                <i class="ri-lock-password-line"></i>
                <h6>Kata Sandi</h6>
            </div>
        </a>
        <a href="<?php echo site_url('profile/wishlist') ?>">
            <div class="user-item">
                <i class="ri-book-open-line"></i>
                <h6>Wishlist</h6>
            </div>
        </a>
        <a href="<?php echo 'my-program' ?>">
            <div class="user-item">
                <i class="ri-book-open-line"></i>
                <h6>My Program</h6>
            </div>
        </a>
        <a href="<?php echo base_url('SignController/signout') ?>" class="user-item">
            <i class="ri-logout-box-line"></i>
            <h6>Sign Out</h6>
        </a>
    </div>
<?php else : ?>
    <div class="user-info">
        <a href="<?php echo site_url('admin') ?>">
            <div class="user-item">
                <i class="ri-dashboard-line"></i>
                <h6>Dashboard</h6>
            </div>
        </a>
        <a href="<?php echo site_url('admin/tambah') ?>">
            <div class="user-item">
                <i class="ri-home-5-line"></i>
                <h6>Program</h6>
            </div>
        </a>
        <a href="<?php echo site_url('admin/add_consultant') ?>">
            <div class="user-item">
                <i class="ri-user-shared-2-line"></i>
                <h6>Consultant</h6>
            </div>
        </a>
        <a href="<?php echo base_url('SignController/signout') ?>" class="user-item">
            <i class="ri-logout-box-line"></i>
            <h6>Sign Out</h6>
        </a>
    </div>
<?php endif; ?>