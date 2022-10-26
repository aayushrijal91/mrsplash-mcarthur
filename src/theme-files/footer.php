<footer>
    <div class="container">
        <div class="quick_contact bg-primary-light">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="fs-18">Get Your Free Quote</div>
                    <div class="fs-48 lh-1 fw-800 pt-3">Book Online for $50 Off</div>
                </div>
                <div class="col-lg-2">
                    <a href="./" class="btn btn-secondary rounded-pill text-white fw-700 fs-18">Book Now</a>
                </div>
            </div>
        </div>
        <div class="quick_contact bg-primary mt-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="fs-18">Become A VIP Member</div>
                    <div class="fs-48 lh-1 fw-800 pt-3">20% Off, Always</div>
                </div>
                <div class="col-lg-2">
                    <a href="./" class="btn btn-secondary rounded-pill text-white fw-700 fs-18">Become A Member</a>
                </div>
            </div>
        </div>
        <div class="pt-7">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <a href="./">
                        <img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= get_field('footer_logo', 'options')['alt'] ?>">
                    </a>
                </div>
                <?php if (have_rows('footer_cta', 'options')) : ?>
                    <div class="col-auto">
                        <div class="row align-items-center gx-xxl-5">
                            <?php while (have_rows('footer_cta', 'options')) : the_row();
                                $img = get_sub_field('image');
                            ?>
                                <div class="col-auto">
                                    <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <hr>
        <div class="navigation_wrapper">
            <div class="row justify-content-between gy-4 gy-lg-0">
                <div class="col-6 col-md-auto col-lg">
                    <div class="text-white fw-700 fs-24 pb-3">Quicklinks</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Quicklinks',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                    )); ?>
                </div>
                <div class="col-6 col-md-auto col-lg">
                    <div class="text-white fw-700 fs-24 pb-3">Services</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Services',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                    )); ?>
                </div>
                <div class="col-6 col-md-auto col-lg">
                    <div class="text-white fw-700 fs-24 pb-3">Areas We Service</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Areas',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                    )); ?>
                </div>
                <div class="col-6 col-md-auto col-lg-2">
                    <div class="text-white fw-700 fs-24 pb-3">Support</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Support',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                    )); ?>
                </div>
            </div>
        </div>
        <div class="microsite-links">
            <?php if (have_rows('microsites', 'options')) : ?>
                <div class="row gx-2 gy-3 justify-content-center">
                    <?php while (have_rows('microsites', 'options')) : the_row();
                        $img = get_sub_field('image');
                        $url = get_sub_field('url');
                    ?>
                        <div class="col-auto">
                            <a href="<?= $url ?>" target="_blank"><img src="<?= $img['url'] ?>" alt="<?= $img['url'] ?>"></a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>