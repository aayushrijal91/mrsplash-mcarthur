<?php $banner = get_field('banner');
$homepage_banner = get_field('homepage_banner'); ?>
<?php get_template_part('parts/section', 'nav'); ?>

<header class="homepage_header">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <h1 class="hero_heading fs-72 lh-1 fw-700"><?= $banner['heading'] ?></h1>
                <div class="sub_heading fs-30 lh-1"><?= $homepage_banner['sub_heading'] ?></div>
                <?php if (have_rows('homepage_banner')) :
                    while (have_rows('homepage_banner')) : the_row();
                        if (have_rows('cta')) : ?>
                            <div class="homepage_cta pt-md-5">
                                <?php while (have_rows('cta')) : the_row();
                                    $icon = get_sub_field('icon');
                                    $title  = get_sub_field('title');
                                ?>
                                    <div class="row align-items-center py-2">
                                        <div class="col-auto"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>"></div>
                                        <div class="col col-md-auto">
                                            <div class="cta_text fs-36 fw-700"><?= $title ?></div>
                                        </div>
                                    </div>
                                <?php
                                endwhile; ?>
                            </div>
                <?php
                        endif;
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
    <img src="<?= get_template_directory_uri() ?>/images/background/homepage-banner.png" alt="homepage" class="pt-5 d-xl-none w-100">
</header>