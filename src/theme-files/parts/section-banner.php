<?php get_template_part('parts/section', 'nav'); ?>
<?php
$banner = get_field('banner');
$banner_title = isset($banner['heading']) ? $banner['heading'] : get_the_title();
$banner_bg = isset($banner['background']['url']) ? $banner['background']['url'] : get_template_directory_uri() . '/images/background/banner.jpg';

if (is_page_template('page-templates/suburb.php')) {
    $banner_title = 'Services in<br><span>' . get_the_title() . '</span>';
}
?>
<header class="subpage_header" style="background: linear-gradient(90deg, #0A161F 40.96%, #252B30 60%, rgba(0,0,0,0) 70%), url(<?= $banner_bg ?>) right center no-repeat; background-size: contain;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="fs-72 lh-1 fw-700"><?= $banner_title ?></h1>
            </div>
        </div>
    </div>
    <img src="<?= get_template_directory_uri() ?>/images/lib/banner-splash.png" alt="Splash" class="splash">
</header>
