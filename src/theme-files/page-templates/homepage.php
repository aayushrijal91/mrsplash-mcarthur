<?php
/*
 * Template Name: Home Page
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner_home');
?>

<div class="homepage">
    <section class="section_1">
        <?php
        $section_1 = get_field('section_1');
        $section_1_1 = $section_1['section_1_1'];
        $section_1_2 = $section_1['section_1_2'];
        ?>
        <div class="container">
            <div class="row g-4">
                <div class="col-12"></div>
                <div class="col-lg-6">
                    <div class="deals_card h-100 bg-white rounded-20 shadow">
                        <div id="homepage_deal_1_slider">
                            <?php if (have_rows('section_1')) :
                                while (have_rows('section_1')) : the_row();
                                    if (have_rows('section_1_1')) :
                                        while (have_rows('section_1_1')) : the_row();
                                            if (have_rows('deals_slider')) :
                                                while (have_rows('deals_slider')) : the_row();
                                                    $deal = get_sub_field('deal');
                            ?>
                                                    <div class="text-grey fs-64 fw-700 lh-1"><?= $deal ?></div>
                            <?php
                                                endwhile;
                                            endif;
                                        endwhile;
                                    endif;
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto"><a href="<?= $section_1_1['button']['url'] ?>" class="btn rounded-pill btn-secondary d-inline-flex text-white fs-18 fw-700 px-4 px-xl-6"><?= $section_1_1['button']['title'] ?></a></div>
                            <div class="col-auto">
                                <div class="row gx-xl-5">
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" id="homepage_deal_prev">
                                            <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.5 1L1 9.5L9.5 18" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" id="homepage_deal_next">
                                            <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 1L10 9.5L1.5 18" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="deals_card h-100 bg-primary rounded-20 shadow">
                        <div class="pb-5">
                            <div class="fs-64 text-white fw-700 lh-1"><?= $section_1_2['title'] ?></div>
                            <div class="text-white pt-3"><?= $section_1_2['sub_title'] ?></div>
                        </div>
                        <div><a href="<?= $section_1_2['button']['url'] ?>" class="btn rounded-pill btn-secondary d-inline-flex text-white fs-18 fw-700 px-4 px-xl-5"><?= $section_1_2['button']['title'] ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container">
            <div class="row align-items-center gx-lg-0">
                <div class="col-lg-auto">
                    <img src="<?= get_template_directory_uri() ?>/images/lib/family-in-laptop.png" alt="">
                </div>
                <div class="col-lg">
                    <div class="text-grey fs-72 fw-700 lh-1 hero_heading"><?= $section_2['hero_heading'] ?></span></div>
                    <div class="fs-20 text-light-grey pt-4"><?= $section_2['description'] ?></div>
                </div>
            </div>
            <div class="socials">
                <div class="row">
                    <?php
                    if (have_rows('section_2')) :
                        while (have_rows('section_2')) : the_row();
                            if (have_rows('socials')) :
                                while (have_rows('socials')) : the_row();
                                    $logo = get_sub_field('logo');
                                    $bg = get_sub_field('background');
                                    $button = get_sub_field('button');
                                    $class = strtolower(get_sub_field('class'));
                    ?>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="social_card lazyload" data-src="<?= $bg['url'] ?>">
                                            <a href="<?= $button['url'] ?>" class="social_button <?= $class ?>"><?= $button['title'] ?></a>
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
        </div>
    </section>

    <?php $section_3 = get_field('section_3'); ?>
    <section class="section_3 lazyload" data-src="<?= $section_3['background']['url'] ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="fs-72 fw-700 lh-1"><?= $section_3['heading'] ?></div>
                    <div class="fs-20 lh-1_65 py-4"><?= $section_3['description'] ?></div>
                    <div class="row pt-4">
                        <div class="col-lg-5">
                            <a href="<?= $section_3['button_1']['url'] ?>" class="btn rounded-pill btn-primary-light text-white fs-18 fw-700 px-4 px-xl-5"><?= $section_3['button_1']['title'] ?></a>
                        </div>
                        <div class="col-lg-5">
                            <a href="<?= $section_3['button_2']['url'] ?>" class="btn w-100 rounded-pill border-2 border-white  text-white fs-18 fw-700 px-4 px-xl-5"><?= $section_3['button_2']['title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_4">
        <?php $section_4 = get_field('section_4'); ?>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <img src="<?= $section_4['hero_image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= $section_4['hero_image']['alt'] ?>">
                </div>
                <div class="col-lg col-xl-6">
                    <div class="hero_heading fs-72 fw-800 lh-1"><?= $section_4['heading'] ?></div>
                    <div class="services_slider" id="homepage_services_slider">
                        <?php if (have_rows('section_4')) :
                            while (have_rows('section_4')) : the_row();
                                if (have_rows('services_slider')) :
                                    while (have_rows('services_slider')) : the_row();
                                        $img = get_sub_field('image');
                                        $title = get_sub_field('title');
                        ?>
                                        <div class="services_slider_content">
                                            <img src="<?= $img['url'] ?>" class="rounded-20 w-100" alt="<?= $img['alt'] ?>">
                                            <div class="title text-center fs-18 pt-2"><?= $title ?></div>
                                        </div>
                        <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <a href="<?= $section_4['button']['url'] ?>" class="btn rounded-pill d-inline-flex btn-primary-light text-white fs-18 fw-700 px-4 px-xl-5"><?= $section_4['button']['title'] ?></a>
                </div>
            </div>
        </div>
    </section>

    <?php $section_5 = get_field('section_5'); ?>
    <section class="section_5 lazyload" data-src="<?= $section_5['background']['url'] ?>">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5">
                    <div class="fs-72 fw-700 lh-1"><?= $section_5['heading'] ?></div>
                    <div class="fs-20 lh-1_65 py-4"><?= $section_5['description'] ?></div>
                    <a href="<?= $section_5['button']['url'] ?>" class="btn rounded-pill btn-primary d-inline-flex text-white fs-18 fw-700 px-4 px-xl-5"><?= $section_5['button']['title'] ?></a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>