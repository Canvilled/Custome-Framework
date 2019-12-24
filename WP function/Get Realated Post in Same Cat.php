function example_cats_related_post()
            {

                $post_id = get_the_ID();
                $cat_ids = array();
                $categories = get_the_category($post_id);

                if (!empty($categories) && is_wp_error($categories)) :
                    foreach ($categories as $category) :
                        array_push($cat_ids, $category->term_id);
                    endforeach;
                endif;

                $current_post_type = get_post_type($post_id);
                $query_args = array(

                    'category__in'   => $cat_ids,
                    'post_type'      => $current_post_type,
                    'post_not_in'    => array($post_id),
                    


                );

                $related_cats_post = new WP_Query($query_args);

                if ($related_cats_post->have_posts()) :
                    while ($related_cats_post->have_posts()) : $related_cats_post->the_post(); ?>
                        <li class="Recuit__relate-item">
                            <a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
                        </li>                                                     

                     
        <?php endwhile;

                // Restore original Post Data
                wp_reset_postdata();
            endif;
        }