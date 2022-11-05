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
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <img src="<?= get_field('suburb', 'options')['hero_image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= get_field('suburb', 'options')['hero_image']['url'] ?>">
                </div>
                <div class="col-lg-5">
                    <div class="hero_heading fs-72 fw-700 lh-1">Proudly Servicing <span><?= get_the_title(); ?></span></div>
                    <div class="fs-20 lh-1_65 py-4 text-light-grey">
                        <?= get_field('suburb', 'options')['hero_description'] ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="suburb_card">
            <div class="hero_heading fs-72 fw-700 lh-1">Our <span><?= get_the_title(); ?> Services</span> in Plumbing</div>
            <div class="fs-20 lh-1_65 pt-4 pb-7 text-light-grey">
                <?= get_field('suburb', 'options')['service_hero_description'] ?>
            </div>
            <?php
            if (have_rows('suburb', 'options')) :
                while (have_rows('suburb', 'options')) : the_row();
                    if (have_rows('suburb_services', 'options')) :
                        $bg_colors = [
                            "Light" => "primary-light",
                            "Dark" => "primary",
                            "Theme" => "secondary"
                        ];
                        $index = 0;
                        while (have_rows('suburb_services', 'options')) : the_row();
                            $bg_image = get_sub_field('background_image');
                            $bg_color = $bg_colors[get_sub_field('background_color')];
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');
            ?>
                            <div class="service lazyload bg-<?= $bg_color ?> rounded-20<?= $index != 0 ? ' mt-4' : '' ?>" data-src="<?= $bg_image['url'] ?>">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fs-36 fw-700 lh-1"><?= $title ?></div>
                                        <div class="fs-20 lh-1_25 pt-4"><?= $description ?></div>
                                    </div>
                                </div>
                            </div>
            <?php
                            $index++;
                        endwhile;
                    endif;
                endwhile;
            endif;
            ?>
        </section>

        <section class="suburb_card section_3">
            <div class="hero_heading fs-36 fw-800 lh-1">Local <?= get_the_title(); ?> <span>can also assist you with the following tasks</span> in addition to those listed above:</div>
            <div class="description">
                <?= get_field('suburb', 'options')['further_assistance_description'] ?>
            </div>
        </section>

        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="hero_heading fs-72 fw-700 lh-1"><?= get_field('suburb', 'options')['contact_title'] ?></div>
                <div class="fs-20 lh-1_65 py-4 text-light-grey">
                    <?= get_field('suburb', 'options')['contact_description'] ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="<?= get_field('suburb', 'options')['contact_image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= get_field('suburb', 'options')['contact_image']['url'] ?>">
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>