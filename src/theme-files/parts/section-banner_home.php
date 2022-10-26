<?php $banner = get_field('banner'); ?>
<?php get_template_part('parts/section', 'nav'); ?>
<header class="homepage_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero_heading fs-72 lh-1 fw-700"><?= $banner['heading'] ?></div>
                <div class="sub_heading fs-30 lh-1"><?= $banner['sub_heading'] ?></div>
                <?php if (have_rows('banner')) :
                    while (have_rows('banner')) : the_row();
                        if (have_rows('cta')) : ?>
                            <div class="pt-5">
                                <?php while (have_rows('cta')) : the_row();
                                    $icon = get_sub_field('icon');
                                    $title  = get_sub_field('title');
                                ?>
                                    <div class="row align-items-center py-2">
                                        <div class="col-auto"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>"></div>
                                        <div class="col-auto fs-36 fw-700"><?= $title ?></div>
                                    </div>
                                <?php
                                endwhile; ?>
                            </div>
                <?php endif;
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</header>