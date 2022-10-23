<footer>
    <div class="container">
        <div class="quick_contact bg-primary-light">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="fs-18">Get Your Free Quote</div>
                    <div class="fs-48 lh-1 fw-800 pt-3">Book Online for $50 Off</div>
                </div>
                <div class="col-lg-2">
                    <a href="./" class="btn btn-secondary rounded-pill text-white fw-700 fs-18">Book Now</a>
                </div>
            </div>
        </div>
        <div class="quick_contact bg-primary mt-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="fs-18">Become A VIP Member</div>
                    <div class="fs-48 lh-1 fw-800 pt-3">20% Off, Always</div>
                </div>
                <div class="col-lg-2">
                    <a href="./" class="btn btn-secondary rounded-pill text-white fw-700 fs-18">Become A Member</a>
                </div>
            </div>
        </div>
        <div class="pt-7">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a href="./" class="">
                        <img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= get_field('footer_logo', 'options')['alt'] ?>"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>