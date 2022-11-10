<?php
/*
 * Template Name: About Us
 * About Us page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="about_us">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">
            <div class="row justify-content-between align-items-center gy-5">
                <div class="col-lg-6">
                    <img src="<?= $section_1['background']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= $section_1['background']['alt'] ?>">
                </div>
                <div class="col-lg col-xl-5">
                    <div class="hero_heading fs-72 fw-700 lh-1"><?= $section_1['title'] ?></div>
                    <div class="fs-20 lh-1_65 py-4 text-light-grey description"><?= $section_1['description'] ?></div>
                    <a href="<?= $section_1['button']['url'] ?>" class="btn rounded-pill btn-primary-light d-inline-flex text-white fs-18 fw-700 px-4 px-xl-5"><?= $section_1['button']['title'] ?></a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <?php $section_2 = get_field('section_2'); ?>
        <section class="section_2 lazyload" data-src="<?= $section_2['background']['url'] ?>">
            <img src="<?= $section_2['background']['url'] ?>" alt="<?= $section_2['background']['url'] ?>" class="d-lg-none">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row">
                        <div class="col-lg-8 col-xl-6">
                            <div class="py-5 px-3 p-md-0">
                                <div class="fs-72 fw-700 lh-1"><?= $section_2['title'] ?></div>
                                <div class="fs-20 lh-1_65 py-4 description"><?= $section_2['description'] ?></div>
                                <a href="<?= $section_2['button']['url'] ?>" class="btn rounded-pill btn-primary-light d-inline-flex text-white fs-18 fw-700 px-4 px-xl-5"><?= $section_2['button']['title'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="section_3">
        <?php $section_3 = get_field('section_3'); ?>
        <div class="container">
            <div class="hero_heading fs-72 fw-700 lh-1 pb-5 pb-md-6"><?= $section_3['heading'] ?></div>
            <div class="row g-4">
                <?php if (have_rows('section_3')) :
                    while (have_rows('section_3')) : the_row();
                        if (have_rows('options')) :
                            while (have_rows('options')) : the_row();
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                ?>
                                <div class="col-md-6">
                                    <div class="why_choose_card">
                                        <div class="row align-items-center pb-1 gy-5">
                                            <div class="col-auto">
                                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                                            </div>
                                            <div class="col-lg">
                                                <div class="fs-48 fw-800 lh-1"><?= $title ?></div>
                                            </div>
                                        </div>
                                        <div class="pt-4 text-light-grey fs-20 lh-1_35"><?= $description ?></div>
                                    </div>
                                </div>
                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>

<?php get_footer(); ?>