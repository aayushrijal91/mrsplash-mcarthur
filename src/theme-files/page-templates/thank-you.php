<?php
/*
 * Template Name: Thank You
 * Thank You page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
?>
<div class="thankyou_page">
    <div class="container py-5 py-md-7 text-center">
        <h1 class="fs-72 fw-700">Thank You!</h1>
        <div class="fs-32 fw-700 py-4"><?= the_content() ?></div>
        <a href="./" class="btn btn-secondary text-white rounded-pill px-5 d-inline-flex">Go Back</a>
    </div>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>