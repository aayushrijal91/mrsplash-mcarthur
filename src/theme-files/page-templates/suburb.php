<?php
/*
 * Template Name: Suburb
 * Areas page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="suburb_page">
    <div class="container">
        <section class="section_1">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/suburb-family.jpg" class="rounded-20 w-100 h-100" alt="Mr Splash Family">
                    </div>
                    <div class="col-lg-5">
                        <div class="hero_heading fs-72 fw-700 lh-1">Proudly Servicing <span><?= get_the_title(); ?></span></div>
                        <div class="fs-20 lh-1_65 py-4 text-light-grey">
                            Plumbing systems are essential to any home or business facility, and you must always verify everything's in good condition. Mr Splash Plumbing Macarthur provides North Shore with dependable, timely, and cost-effective plumbing services. We handle all sizes and types of plumbing projects for our clients, guaranteeing all of our work. These are our available services.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="hero_heading fs-72 fw-700 lh-1">Our <span><?= get_the_title(); ?> Services</span> in Plumbing</div>

        </section>
    </div>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>