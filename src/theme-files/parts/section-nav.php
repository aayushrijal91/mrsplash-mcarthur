<?php $logo = get_field('logo', 'options'); ?>

<div class="hero_nav">
    <div class="slide-nav">
        <div class="container">
            <div class="d-flex justify-content-end">
                <a href="javascript:void(0)" class="pb-4" id="close-slidenav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
            </div>
            <?php wp_nav_menu(array(
                'menu' => 'Mobile Menu',
                'menu_class' => 'navbar-nav',
                'item_class' => 'nav-item',
                'link_class' => 'nav-link',
                'container_class' => 'ms-auto mobile-menu',
                'container_id' => '',
            )); ?>
            <div class="row gx-4 pt-4">
                <?php if (have_rows('socials', 'options')) : ?>
                    <?php while (have_rows('socials', 'options')) : the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $url = get_sub_field('link');
                    ?>
                        <div class="col-auto">
                            <a href="<?= $url ?>" class="">
                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="pt-4">
                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-secondary text-dark rounded-10 py-3 px-md-4 px-xl-2 px-xl-5 fs-24 fw-500 lh-1">
                    <?= get_field('phone_number', 'options') ?>
                </a>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl navbar-light mx-5">
                <a href="javascript:void(0)" class="pe-4" id="triggerSlideNav">
                    <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2C0 0.89543 0.89543 0 2 0H30C31.1046 0 32 0.89543 32 2C32 3.10457 31.1046 4 30 4H2C0.89543 4 0 3.10457 0 2Z" fill="#1F2527" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 10.8954 0.89543 10 2 10H30C31.1046 10 32 10.8954 32 12C32 13.1046 31.1046 14 30 14H2C0.89543 14 0 13.1046 0 12Z" fill="#1F2527" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22C0 20.8954 0.89543 20 2 20H30C31.1046 20 32 20.8954 32 22C32 23.1046 31.1046 24 30 24H2C0.89543 24 0 23.1046 0 22Z" fill="#1F2527" />
                    </svg>
                </a>
                <a class="navbar-brand" href="<?= home_url() ?>"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" /></a>
                <div class="collapse navbar-collapse" id="mainNav">
                    <?php wp_nav_menu(array(
                        'menu' => 'Primary Menu',
                        'menu_class' => 'navbar-nav',
                        'item_class' => 'nav-item px-lg-2 fw-600',
                        'link_class' => 'nav-link',
                        'container_class' => 'ms-auto primary_menu',
                        'container_id' => '',
                    )); ?>
                    <div class="d-flex align-items-center ms-auto nav-btns">
                        <div>
                            <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-off-grey text-primary rounded-2 p-2 fs-18 fw-600 lh-1">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 6.96151H14.6078C14.6061 5.48498 14.0188 4.06939 12.9748 3.02532C11.9308 1.98125 10.5153 1.39396 9.03879 1.3923V0C10.8844 0.00202691 12.6538 0.736121 13.9589 2.04122C15.2639 3.34632 15.998 5.11583 16 6.96151Z" fill="#0383BF" />
                                    <path d="M13.2155 6.96151H11.8233C11.8233 6.22299 11.5299 5.51472 11.0077 4.9925C10.4855 4.47029 9.77728 4.17691 9.03879 4.17691V2.78461C10.1462 2.78571 11.2079 3.22613 11.991 4.00921C12.774 4.7923 13.2144 5.85407 13.2155 6.96151Z" fill="#0383BF" />
                                    <path d="M10.0983 10.074L8.47354 11.6752L4.32535 7.52679L5.92643 5.90197C6.02326 5.80347 6.08859 5.67839 6.11413 5.54265C6.13967 5.40691 6.12425 5.26664 6.06983 5.13969L4.40262 1.2482C4.33672 1.09475 4.21785 0.9701 4.06769 0.897C3.91754 0.8239 3.74611 0.80722 3.58468 0.850001L0.521749 1.65893C0.368717 1.69853 0.233719 1.78903 0.138957 1.91555C0.0441956 2.04207 -0.00468542 2.19708 0.000354074 2.35508C0.195155 5.91512 1.67532 9.28348 4.16594 11.8346C6.71774 14.3257 10.087 15.8057 13.6478 15.9996C13.8058 16.0047 13.9608 15.9558 14.0873 15.861C14.2138 15.7663 14.3043 15.6313 14.3439 15.4782L15.1528 12.4152C15.1956 12.2537 15.1789 12.0823 15.1058 11.9321C15.0327 11.782 14.9081 11.6631 14.7546 11.5972L10.8633 9.9299C10.736 9.87497 10.5951 9.85933 10.4588 9.88501C10.3225 9.91069 10.1969 9.9765 10.0983 10.074Z" fill="#0383BF" />
                                </svg>
                                <span class="ps-2"><?= get_field('phone_number', 'options') ?></span>
                            </a>
                        </div>
                        <div>
                            <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-primary text-white rounded-2 p-2 fs-18 fw-600 lh-1">
                                Request A Quote
                            </a>
                        </div>
                        <div>
                            <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-secondary text-white rounded-2 p-2 fs-18 fw-600 lh-1">
                                Book Online
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>