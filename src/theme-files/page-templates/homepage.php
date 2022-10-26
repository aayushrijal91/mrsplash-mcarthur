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
                            <div class="fs-64 text-white fw-700 lh-1">Recieve 20% Off, Always</div>
                            <div class="text-white">Become A Mr Splash VIP Member</div>
                        </div>
                        <div><a href="<?= $section_1_2['button']['url'] ?>" class="btn rounded-pill btn-secondary d-inline-flex text-white fs-18 fw-700 px-4 px-xl-5"><?= $section_1_2['button']['title'] ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"></div>
            </div>
        </div>
    </section>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>