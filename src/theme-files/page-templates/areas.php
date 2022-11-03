<?php
/*
 * Template Name: Areas
 * Areas page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'title',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/suburb.php'
        )
    )
);
$the_query = new WP_Query($args);
?>

<div class="areas_page">
    <div class="container">
        <section class="section_1 mt-n6 position-relative">
            <div class="hero_heading fs-72 lh-1 fw-800">Servicing <span>Campbelltown & Macarthur</span></div>
        </section>

        <section class="section_2">
            <?php  // The Loop
            if ($the_query->have_posts()) :
                $count = 0;
            ?>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 gy-4 gy-lg-5">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div>
                            <a href="<?= get_the_permalink() ?>" class="fs-18 text-grey fw-700 suburb_hyperlink">
                                <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56322 0.050041C5.54448 0.264591 3.45854 1.36626 2.13086 2.91913C0.352906 4.99862 -0.369376 7.78175 0.180513 10.4345C0.401921 11.5026 0.957582 12.8104 1.53773 13.6286C1.89305 14.1299 8.43962 22 8.50118 22C8.56275 22 15.1093 14.1299 15.4646 13.6286C15.8273 13.1172 16.3733 12.0066 16.5772 11.3656C17.3878 8.81848 17.0216 6.07622 15.5754 3.8626C14.5185 2.2448 12.983 1.05551 11.1518 0.43631C10.0005 0.0469536 8.80379 -0.0818355 7.56322 0.050041ZM9.4911 4.9504C10.8573 5.37979 11.7875 6.50919 11.9635 7.95209C12.1508 9.48747 11.3244 10.9655 9.91439 11.6168C9.46763 11.8233 9.07296 11.9032 8.50118 11.9032C7.92941 11.9032 7.53474 11.8233 7.08798 11.6168C5.41869 10.8457 4.6081 8.93497 5.20806 7.18543C5.62644 5.96532 6.69918 5.04694 7.94259 4.8443C8.33913 4.77971 9.11769 4.83303 9.4911 4.9504Z" fill="#CF4275" />
                                </svg>
                                <span class="ps-2"><?= get_the_title() ?></span>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </section>
        <section class="section_3">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <div class="text-primary-light fs-48 fw-800 lh-1">Can't find your area?</div>
                    <div class="fs-20">View our other branches or contact us for further help</div>
                </div>
                <div class="col-auto">
                    <a href="" class="btn btn-secondary rounded-pill fs-18 fw-700 text-white px-4 px-md-5 px-xl-7">Contact Us</a>
                </div>
            </div>
            <?php if (have_rows('microsites', 'options')) : ?>
                <div class="row g-4 justify-content-center pt-5 pt-lg-6">
                    <?php while (have_rows('microsites', 'options')) : the_row();
                        $background = get_sub_field('background');
                        $url = get_sub_field('url');
                    ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <a href="<?= $url ?>" target="_blank"><img src="<?= $background['url'] ?>" alt="<?= $background['alt'] ?>" class="w-100 h-100 rounded-20"></a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </section>
    </div>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>