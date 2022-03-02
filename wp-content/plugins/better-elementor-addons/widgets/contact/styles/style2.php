<div class="better-contact-shortcode style-2">
    <div class="row">
        <div class="col-lg-4 opening better-bg-img better-bg-repeat" data-background="<?php echo esc_url( plugins_url('/assets/img/dotz.png', dirname(__FILE__,3)) ) ?>">
            <div class="toup">
                <h6 class="scfont"><?php echo $settings['title_1']; ?></h6>
                <h4><?php echo $settings['title_2']; ?></h4>
                <div class="open-hour">
                    <ul>
                        <?php foreach( $settings['opening_time_list'] as $index => $item ) : ?>
                            <li><?php echo $item['days'] ?><span><?php echo $item['time'] ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="call-us mt-80">
                    <h5 class="scfont"><?php echo $settings['contact_info_title'] ?></h5>
                    <a href="#0"><?php echo $settings['contact_info'] ?></a>
                </div>
            </div>
        </div>
        <div class="col-lg-8 box-book">
            <?php echo $shortcode; ?>
        </div>
    </div>
</div>