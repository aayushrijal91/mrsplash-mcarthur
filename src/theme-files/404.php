<?php
get_header();
get_template_part('parts/section', 'nav');
?>
<div class="pageNotFound">
    <div class="container py-5 py-md-7 text-center">
        <h1 class="fs-72 fw-700">Page Not Found!</h1>
        <p class="fs-32 fw-700 py-4">Sorry, the page you are looking for does not exist!</p>
        <a href="./" class="btn btn-secondary text-white rounded-pill px-5 d-inline-flex">Go Back</a>
    </div>
</div>
<?php
get_footer();
?>