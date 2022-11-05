<?php
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="blogs_page">
    <div class="container">
        <div class="row gy-5">
            <?php
            $args = array(
                'posts_per_page' => -1,
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                    $date = get_the_time('d', $post->ID);
                    $month = get_the_time('M', $post->ID);
                    $featured_description = get_field('featured_description');
                    $featured_description = isset($featured_description) ? substr(get_field('featured_description'),0, 89) . '...' : '...';
            ?>
                    <div class="col-md-6 col-lg-4">
                        <a href="<?= get_the_permalink() ?>" class="w-100 h-100">
                            <div class="blog_card rounded-20 w-100 h-100">
                                <div class="background lazyload" data-src="<?= $featured_img_url ?>"></div>
                                <div class="main_content d-flex flex-column justify-content-between align-items-center text-center position-relative">
                                    <div class="date bg-primary text-white rounded-circle position-absolute d-flex flex-column justify-content-center align-items-center lh-1">
                                        <div class="fs-36 fw-700"><?= $date ?></div>
                                        <div class="fs-12 fw-500 text-uppercase"><?= $month ?></div>
                                    </div>
                                    <div class="title text-primary-light fw-700 lh-1 text-capitalize"><?= get_the_title() ?></div>
                                    <div class="description text-light-grey fs-18"><?= $featured_description ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>