            
<div class="portfolio style-6 imago wow <?php echo 'mode-'.$settings['avo_mode'];?>">
	<div class="work-carousel caroul sub-bg">
	    <div class="swiper-container">
	        <div class="swiper-wrapper ">  


	            <?php 
	            $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	            if ($settings['port_order'] != 'rand') {
	                $order = 'order';
	                $ord_val = $settings['port_order'];
	            } else {
	                $order = 'orderby';
	                $ord_val = 'rand';
	            }
	            
	            if ( $settings['sort_cat']  == 'yes' ) {
	                $destudio_work = new \WP_Query(array(
	                    'posts_per_page'   => $settings['portfolio_item'],
	                    'post_type' =>  'portfolio', 'avo_plg',
	                    $order       =>  $ord_val,
	                    'tax_query' => array(
	                        array(
	                            'taxonomy' => 'portfolio_category',   // taxonomy name
	                            'field' => 'term_id',
	                            'terms' => $settings['blog_cat'],           // term_id, slug or name                // term id, term slug or term name
	                        )
	                    )
	                )); 
	            } else {
	                $destudio_work = new \WP_Query(array(
	                    'paged' => $avo_paged,
	                    'posts_per_page'   => $settings['portfolio_item'],
	                    'post_type' =>  'portfolio', 'avo_plg',
	                    $order       =>  $ord_val
	                )); 
	            }
	            
	            if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
	            global $post ;
	            
	            ?>


	                                <div class="swiper-slide ">
	                                    <div class="content fadeInUp animate" data-wow-delay=".3s">
	                                        <div class="item-img bg-img "
	                                            style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
	                                        </div>
	                                        <div class="cont bgbox">
	                                            <h6>
	                                            <?php 
	                                                $destudio_taxonomy = 'portfolio_category'; 
	                                                $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  
	                                                $destudio_cats = array();
	                                                foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;} 
	                                                echo implode(' / ', $destudio_cats);
	                                            ?>                                            </h6>
	                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	                                            <a href="<?php the_permalink(); ?>">
                                            		<span class="icon"><i class="fas fa-plus"></i></span>
                                        		</a>
	                                        </div>
	                                    </div>
	                                </div>


	            <?php endwhile;  ?>
	            <?php endif;  wp_reset_postdata();  ?>

	        </div> 
	                <!-- slider setting -->
	        <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
	            <i class="ion-ios-arrow-right"></i>
	        </div>
	        <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
	            <i class="ion-ios-arrow-left"></i>
	        </div> 
	    </div>
	</div>
</div>