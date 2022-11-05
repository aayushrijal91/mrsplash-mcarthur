<?php
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="single_post_page">
    <div class="container">
        <section class="section_1">
            <?php $section_1 = get_field('section_1'); ?>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <img src="<?= $section_1['image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= $section_1['image']['alt'] ?>">
                </div>
                <div class="col-lg-5">
                    <div class="hero_heading fs-72 fw-700 lh-1"><?= $section_1['title'] ?></div>
                    <div class="fs-20 lh-1_65 text-light-grey pt-4"><?= $section_1['description'] ?></div>
                </div>
            </div>
        </section>

        <?php
        if (get_field('choose_template') == "Template 1") :
            $template_1 = get_field('template 1');
        ?>
            <section class="post_card">
                <div class="hero_heading fs-72 fw-700 lh-1"><?= $template_1['service_heading'] ?></div>
                <div class="fs-20 lh-1_65 pt-4 pb-7 text-light-grey">
                    <?= get_field('suburb', 'options')['service_hero_description'] ?>
                </div>
                <?php if (have_rows('template 1')) :
                    while (have_rows('template 1')) : the_row();
                        if (have_rows('services')) :
                            $bg_colors = [
                                "Light" => "primary-light",
                                "Dark" => "primary",
                                "Theme" => "secondary"
                            ];
                            $index = 0;
                            while (have_rows('services')) : the_row();
                                $bg_image = get_sub_field('background_image');
                                $bg_color = $bg_colors[get_sub_field('background_color')];
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                ?>
                                <div class="service lazyload bg-<?= $bg_color ?> rounded-20<?= $index != 0 ? ' mt-4' : '' ?>" data-src="<?= $bg_image['url'] ?>">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="fs-36 fw-700 lh-1 text-capitalize"><?= $title ?></div>
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

            <section class="post_card further_assistance">
                <div class="hero_heading fs-36 fw-800 lh-1"><?= $template_1['further_assistance_heading'] ?></div>
                <div class="description">
                    <?= $template_1['further_assistance_description'] ?>
                </div>
            </section>

            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="hero_heading fs-72 fw-700 lh-1"><?= $template_1['contact_heading'] ?></div>
                    <div class="contact_description fs-20 lh-1_65 py-4 text-light-grey">
                        <?= $template_1['contact_description'] ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?= $template_1['contact_image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= get_field('suburb', 'options')['contact_image']['url'] ?>">
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>