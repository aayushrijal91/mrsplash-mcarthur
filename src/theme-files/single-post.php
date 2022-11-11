<?php
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="single_post_page">
    <div class="container">
        <section class="intro">
            <?php $intro = get_field('section_1'); ?>
            <div class="row justify-content-between align-items-center gy-5">
                <div class="col-lg-6">
                    <img src="<?= $intro['image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= $intro['image']['alt'] ?>">
                </div>
                <div class="col-lg col-xl-5">
                    <div class="hero_heading fs-72 fw-700 lh-1"><?= $intro['title'] ?></div>
                    <div class="fs-20 lh-1_65 text-light-grey pt-4 description"><?= $intro['description'] ?></div>
                </div>
            </div>
        </section>

        <?php
        if (get_field('choose_template') == "Template 1") :
            $template_1 = get_field('template 1');
        ?>
            <section class="post_card">
                <div class="hero_heading fs-72 fw-700 lh-1"><?= $template_1['service_heading'] ?></div>
                <div class="fs-20 lh-1_65 pt-4 pb-5 pb-md-7 text-light-grey description">
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
                                        <div class="col-xl-6">
                                            <div class="fs-36 fw-700 lh-1 text-capitalize"><?= $title ?></div>
                                            <div class="fs-20 lh-1_25 pt-4 description"><?= $description ?></div>
                                            <img src="<?= $bg_image['url'] ?>" alt="<?= $bg_image['alt'] ?>" class="rounded-20 mt-5 d-xl-none">
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
                <div class="col-lg col-xl-5">
                    <div class="hero_heading fs-72 fw-700 lh-1"><?= $template_1['contact_heading'] ?></div>
                    <div class="contact_description fs-20 lh-1_65 py-4 text-light-grey description">
                        <?= $template_1['contact_description'] ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?= $template_1['contact_image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= $template_1['contact_image']['url'] ?>">
                </div>
            </div>

        <?php elseif (get_field('choose_template') == "Template 2") :
            $template_2 = get_field('template_2');
        ?>
            <div class="template_2">
                <?php $section_1 = $template_2['section_1']; ?>
                <section class="section_1 bg-primary lazyload" data-src="<?= $section_1['background']['url'] ?>">
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="fs-72 fw-700 lh-1 text-capitalize text-center text-xl-start"><?= $section_1['title'] ?></div>
                                    <div class="text-center d-xl-none"><img src="<?= $section_1['background']['url'] ?>" alt="<?= $section_1['background']['alt'] ?>" class="rounded-20 mt-5"></div>
                                    <div class="fs-20 lh-1_65 py-4 description text-center text-xl-start"><?= $section_1['description'] ?></div>
                                    <div class="text-center text-xl-start"><a href="<?= $section_1['button']['url'] ?>" class="btn rounded-pill btn-primary-light d-inline-flex text-white fs-18 fw-700 px-4 px-xl-5"><?= $section_1['button']['title'] ?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_2">
                    <?php $section_2 = $template_2['section_2']; ?>
                    <div class="hero_heading fs-72 fw-700 lh-1"><?= $section_2['title'] ?></div>
                    <div class="fs-20 lh-1_65 pt-4 pb-5 pb-md-6 pb-xl-7 text-light-grey description">
                        <?= $section_2['description'] ?>
                    </div>
                    <?php
                    if (have_rows('template_2')) :
                        while (have_rows('template_2')) : the_row();
                            if (have_rows('section_2')) :
                                while (have_rows('section_2')) : the_row();
                                    if (have_rows('benefits_list')) :
                    ?>
                                        <div class="row g-3 g-md-4">
                                            <?php while (have_rows('benefits_list')) : the_row(); ?>
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="benefit_card">
                                                        <?= get_sub_field('benefit') ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                    <?php
                                    endif;
                                endwhile;
                            endif;
                        endwhile;
                    endif; ?>
                </section>

                <section class="section_3">
                    <?php $section_3 = $template_2['section_3']; ?>

                    <div class="row justify-content-between align-items-center gy-5">
                        <div class="col-lg col-xl-5">
                            <div class="hero_heading fs-72 fw-800 lh-1"><?= $section_3['title'] ?></div>
                            <div class="fs-20 lh-1_65 text-light-grey pt-4 description"><?= $section_3['description'] ?></div>
                        </div>
                        <div class="col-lg-6">
                            <img src="<?= $section_3['image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= $section_3['image']['alt'] ?>">
                        </div>
                    </div>
                </section>

                <?php $section_4 = $template_2['section_4']; ?>
                <section class="section_4 bg-primary-light lazyload" data-src="<?= $section_4['background']['url'] ?>">
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="fs-72 fw-700 lh-1 text-capitalize"><?= $section_4['title'] ?></div>
                                    <div class="fs-20 lh-1_65 pt-4 description"><?= $section_4['description'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="post_card section_5">
                    <?php $section_5 = $template_2['section_5']; ?>
                    <div class="hero_heading fs-72 fw-700 lh-1"><?= $section_5['title'] ?></div>
                    <div class="fs-20 lh-1_65 pt-4 pb-5 pb-md-6 pb-xl-7 text-light-grey description">
                        <?= $section_5['description'] ?>
                    </div>
                    <?php
                    if (have_rows('template_2')) :
                        while (have_rows('template_2')) : the_row();
                            if (have_rows('section_5')) :
                                while (have_rows('section_5')) : the_row();
                                    if (have_rows('features_list')) :
                    ?>
                                        <div class="row g-4">
                                            <?php while (have_rows('features_list')) : the_row(); ?>
                                                <div class="col-md-6 col-lg-4 col-xl-3">
                                                    <div class="feature_card">
                                                        <?= get_sub_field('feature') ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                    <?php
                                    endif;
                                endwhile;
                            endif;
                        endwhile;
                    endif; ?>
                </section>

                <section class="section_6">
                    <?php $section_6 = $template_2['section_6']; ?>

                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg col-xl-5">
                            <div class="hero_heading fs-72 fw-700 lh-1"><?= $section_6['title'] ?></div>
                            <div class="contact_description fs-20 lh-1_65 py-4 text-light-grey description">
                                <?= $section_6['description'] ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="<?= $section_6['image']['url'] ?>" class="rounded-20 w-100 h-100" alt="<?= $section_6['image']['url'] ?>">
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_template_part('parts/section', 'shortcuts') ?>
<?php get_footer(); ?>