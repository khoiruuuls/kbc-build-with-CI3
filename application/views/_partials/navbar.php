<section id="header">
    <div class="nav container__navbar">
        <div class="nav__data">
            <a href="" class="nav__logo">
                <img id="logo" src="https://kbc.or.id/img/general/KBC-Logo_1594107681.png" class="logo" alt="" />
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>
        </div>

        <!-- NAV MENU -->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li>
                    <a href="<?php echo site_url('./')?>" class="nav__link">Beranda</a>
                </li>

                <!-- DROPDOWN -->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Program
                        <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <i class="ri-group-line"></i>
                                <a href="consultation"><span class="dropdown__title">
                                        Training</span></a>
                            </div>
                            <div class="dropdown__group">
                                <i class="ri-open-arm-line"></i>
                                <a href="coaching">
                                    <span class="dropdown__title">Pelatihan</span>
                                </a>
                            </div>
                            <div class="dropdown__group">
                            <i class="ri-parent-line"></i>
                                <span class="dropdown__title">Consulting</span>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="<?php echo site_url('./blog')?>" class="nav__link">Blog</a>
                </li>
                <li>
                    <a href="<?php echo site_url('./faq')?>" class="nav__link">FAQ</a>
                </li>
            </ul>
        </div>
        <div class="button__navbar">
            <!-- <a href="user-profile.html" class="user-login">
                    <img src="img/user-profile.jpg" alt="" />
                    <p>Khoirul Fahmi</p>
                </a> -->
            <a href="<?php echo site_url('auth/sign-in')?>" >
                <button class="log-secondary-button">
                    Masuk
                </button>
            </a>
            <a href="<?php echo site_url('auth/sign-up')?>">
                <button class="log-primary-button">
                    Registrasi
                </button>
            </a>
        </div>
    </div>
</section>