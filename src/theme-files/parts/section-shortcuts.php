<div class="section_shortcuts">
    <div class="container">
        <div class="row justify-content-center g-4 gx-md-2 gx-lg-3 g-xl-4">
            <?php
            if (have_rows('shortcuts', 'options')) :
                while (have_rows('shortcuts', 'options')) : the_row();
                    if (have_rows('shortcut', 'options')) :
                        $index = 0;
                        while (have_rows('shortcut', 'options')) : the_row();
                            if ($index > 2) {
                                $index = 0;
                            }

                            $bg_img = get_sub_field('background_image');
                            $title = get_sub_field('title');
                            $button = get_sub_field('button');
                            $bg_color = ['primary-light', 'primary', 'secondary'];
            ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="shortcut_card lazyload bg-<?= $bg_color[$index] ?>" data-src="<?= $bg_img['url'] ?>">
                                    <div class="fs-36 fw-700 lh-1"><?= $title ?></div>
                                    <div>
                                        <a href="<?= $button['url'] ?>" class="btn rounded-pill btn-<?= $bg_color[$index] ?> d-inline-flex text-white fs-18 fw-700 px-4 px-xl-6"><?= $button['title'] ?></a>
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

        </div>
    </div>
</div>