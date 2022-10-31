<?php
/*
 * Template Name: Services
 * Services page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="services_page">
    <section class="services_slider">
        <div id="services_slider">
            <?php
            $args = array(
                'posts_per_page' => -1,
                'post_type' => 'services',
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                    $title = get_the_title();
                    $link = get_the_permalink();
                    $cover_img = get_field('cover_image') ? get_field('cover_image')['url'] : $featured_img_url;
            ?>
                    <div class="service_slider_card" style="background-image:url(<?= $cover_img ?>);">
                        <div class="service_slider_card_inner">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-5">
                                    <div class="fs-72 fw-700 lh-1 pb-4"><?= $title ?></div>
                                    <a href="<?= $link ?>" class="btn rounded-pill btn-primary-light d-inline-flex text-white fs-18 fw-700 px-4 px-md-5 px-xl-8">Enquire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <div class="row gx-xl-5">
                        <div class="col-auto position-relative">
                            <a href="javascript:void(0)" id="services_prev">
                                <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.5 1L1 9.5L9.5 18" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto position-relative">
                            <a href="javascript:void(0)" id="services_next">
                                <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1L10 9.5L1.5 18" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services_list">
        <div class="container">
            <div class="row g-4">
                <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'services',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                        $title = get_the_title();
                        $link = get_the_permalink();
                ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <a href="<?= $link ?>">
                                <div class="service_card lazyload" data-src="<?= $featured_img_url ?>">
                                    <div class="service_card_inner">
                                        <?= $title ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>

<?php get_footer(); ?>