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
<div class="user-info">
    <div class="user-item">
        <i class="ri-user-line"></i>
        <h6>Akun Saya</h6>
    </div>
    <div class="user-item">
        <i class="ri-thumb-down-line"></i>
        <h6>Wishlist</h6>
    </div>
    <div class="user-item">
        <i class="ri-notification-2-line"></i>
        <h6>Notification</h6>
    </div>
    <div class="user-item">
        <i class="ri-book-open-line"></i>
        <h6>My Program</h6>
    </div>
    <div class="user-item">
        <i class="ri-shopping-cart-line"></i>
        <h6>Transaction History</h6>
    </div>
    <a href="<?php echo base_url('SignController/signout') ?>" class="user-item">
        <i class="ri-logout-box-line"></i>
        <h6>Sign Out</h6>
    </a>
</div>