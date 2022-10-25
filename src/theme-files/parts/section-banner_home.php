<?php $banner = get_field('banner'); ?>
<?php get_template_part('parts/section', 'nav'); ?>
<header class="homepage_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero_heading fs-72 lh-1 fw-700"><?= $banner['heading'] ?></div>
                <div class="sub_heading fs-30 lh-1"><?= $banner['sub_heading'] ?></div>
            </div>
        </div>
    </div>
</header>