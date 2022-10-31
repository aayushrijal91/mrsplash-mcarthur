<?php $banner = get_field('banner'); ?>
<?php get_template_part('parts/section', 'nav'); ?>
<header class="subpage_header" style="background: linear-gradient(90deg, #0A161F 40.96%, #252B30 60%, rgba(0,0,0,0) 70%), url(<?= $banner['background']['url'] ?>) right center no-repeat; background-size: contain;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="fs-72 lh-1 fw-700"><?= $banner['heading'] ?></h1>
            </div>
        </div>
    </div>
    <img src="<?= get_template_directory_uri() ?>/images/lib/banner-splash.png" alt="Splash" class="splash">
</header>