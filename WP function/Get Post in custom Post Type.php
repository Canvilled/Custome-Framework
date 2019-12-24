<?php
           $args = array(
           'post_type'   => 'products',
           'post_status' => 'publish',            
            );
 
            $product_list = new WP_Query( $args );
            if( $product_list->have_posts() ) :
        ?>       
       
	<div class="product__list slideshow-container">	  
	   <?php
        while( $product_list->have_posts() ) :
            $product_list->the_post();
          ?>
        <div class="product__item product-Slides fade">
		   <div class="product__item-img">
		     <?php the_post_thumbnail('large')?>
		   </div>
           <div class="product__item-contain" style="background: url(<?php echo get_theme_file_uri('/images/productBG.png')?>);">
		     <div class="product__item-content">
			    <?php echo get_field('mo_ta_san_pham');?>
			 </div>
		   </div>
		   <div class="clear"></div>
        </div>
        <?php
      endwhile;
      wp_reset_postdata();
    ?>
	<?php
else :
  esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
endif;
?>  	  