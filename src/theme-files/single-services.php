<?php
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="inner_service_page">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">
            <div class="row justify-content-between align-items-center gy-5">
                <div class="col-lg-6">
                    <img src="<?= $section_1['image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= $section_1['image']['alt'] ?>">
                </div>
                <div class="col-lg-5">
                    <div class="hero_heading fs-72 fw-700 lh-1"><?= $section_1['title'] ?></div>
                    <div class="fs-20 lh-1_65 py-4 text-light-grey description"><?= $section_1['description'] ?></div>
                    <a href="<?= $section_1['button']['url'] ?>" class="btn rounded-pill btn-primary-light d-inline-flex text-white fs-18 fw-700 px-5"><?= $section_1['button']['title'] ?></a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <?php $section_2 = get_field('section_2'); ?>
        <section class="section_2 lazyload" data-src="<?= $section_2['background']['url'] ?>">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="fs-72 fw-700 lh-1"><?= $section_2['title'] ?></div>
                            <img src="<?= $section_2['background']['url'] ?>" alt="<?= $section_2['background']['alt'] ?>" class="rounded-20 mt-4 d-md-none">
                            <div class="fs-20 lh-1_65 py-4 description"><?= $section_2['description'] ?></div>
                            <a href="<?= $section_2['button']['url'] ?>" class="btn rounded-pill btn-primary-light d-inline-flex text-white fs-18 fw-700 px-5"><?= $section_2['button']['title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="section_3">
        <?php $section_3 = get_field('section_3'); ?>
        <div class="container">
            <div class="row justify-content-between align-items-center gy-5">
                <div class="col-lg-5">
                    <div class="hero_heading fs-72 fw-700 lh-1"><?= $section_3['title'] ?></div>
                    <img src="<?= $section_3['image']['url'] ?>" class="rounded-20 w-100 h-100 d-md-none my-5" alt="<?= $section_3['image']['alt'] ?>">
                    <div class="fs-20 lh-1_65 pb-4 py-md-4 text-light-grey description"><?= $section_3['description'] ?></div>
                    <a href="<?= $section_3['button']['url'] ?>" class="btn rounded-pill btn-primary-light d-inline-flex text-white fs-18 fw-700 px-5"><?= $section_3['button']['title'] ?></a>
                </div>
                <div class="col-lg-6 d-none d-md-block">
                    <img src="<?= $section_3['image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= $section_3['image']['alt'] ?>">
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_template_part('parts/section', 'contactUsForm') ?>

<?php get_template_part('parts/section', 'shortcuts') ?>

<?php get_footer(); ?>