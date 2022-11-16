<?php $footer = get_field('footer', 'options'); ?>
<footer>
    <div class="container">
        <div class="row gy-4">
            <?php
            if (have_rows('footer', 'options')) :
                while (have_rows('footer', 'options')) : the_row();
                    if (have_rows('cta', 'options')) :
                        $index = 0;
                        while (have_rows('cta', 'options')) : the_row();
                            if ($index > 1) {
                                $index = 0;
                            }
                            $sub_title = get_sub_field('sub_title');
                            $title = get_sub_field('title');
                            $button = get_sub_field('button');
                            $bg_color = ['primary-light', 'primary'];
            ?>
                            <div class="col-12">
                                <div class="quick_contact bg-<?= $bg_color[$index] ?>">
                                    <div class="row justify-content-between align-items-center gy-5">
                                        <div class="col-md col-lg-auto ">
                                            <div class="fs-18"><?= $sub_title ?></div>
                                            <div class="fs-48 lh-1 fw-800 pt-3"><?= $title ?></div>
                                        </div>
                                        <div class="col-9 col-md-4 col-lg-3">
                                            <a href="<?= $button['url'] ?>" class="btn btn-secondary rounded-pill text-white fw-700 fs-18"><?= $button['title'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            <?php
                            $index++;
                        endwhile;
                    endif;
                endwhile;
            endif;
            ?>
        </div>

        <div class="pt-7">
            <div class="row align-items-center justify-content-center justify-content-xl-between gy-4">
                <div class="col-auto">
                    <a href="./">
                        <img src="<?= $footer['logo']['url'] ?>" alt="<?= $footer['logo']['alt'] ?>">
                    </a>
                </div>
                <?php
                if (have_rows('footer', 'options')) :
                    while (have_rows('footer', 'options')) : the_row();
                ?>
                        <div class="col-md-auto">
                            <div class="row align-items-center justify-content-center gy-3 gx-md-1 gx-lg-4 gx-xxl-5">
                                <?php
                                if (have_rows('reviews', 'options')) :
                                    while (have_rows('reviews', 'options')) : the_row();
                                        $img = get_sub_field('image');
                                ?>
                                        <div class="col-6 col-md col-lg-auto">
                                            <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
                                        </div>
                                <?php
                                    endwhile;
                                endif; ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
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
                        $logo = get_sub_field('logo');
                        $url = get_sub_field('url');
                    ?>
                        <div class="col-6 col-md-auto">
                            <a href="<?= $url ?>" target="_blank"><img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>"></a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script>
    document.addEventListener('wpcf7mailsent', function(event) {
        if ('573' == event.detail.contactFormId || '299' == event.detail.contactFormId) {
            location = '/thank-you';
        }
    }, false);
</script>
</body>

</html>