<?php 
function custom_excerpt_length($length)
            {
                return 30; //change the number for the length you want
            }
            add_filter('excerpt_length', 'custom_excerpt_length', 999);

            function change_excerpt($more)
            {
                if (post_type_exists('services')) {
                    return '';
                }
                return '...';
            }
            add_filter('excerpt_more', 'change_excerpt');
?>