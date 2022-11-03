<?php
/*
 * Template Name: Areas
 * Areas page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="areas_page">
    <div class="container">
        <section class="section_1 mt-n6 position-relative">
            <div class="hero_heading fs-72 lh-1 fw-800">Servicing <span>Campbelltown & Macarthur</span></div>
        </section>

        <section class="section_2"></section>
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
        </section>
    </div>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>