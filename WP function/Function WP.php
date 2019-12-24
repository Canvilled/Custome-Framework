<?php 
   // Lấy địa chỉ gốc 
   get_theme_file_uri('');
   // Lấy giá trị trong Custom Field 
   get_field('', 'option');
   // Lấy giá trị Custom Field
   get_field('');
   // Hiển thị link của post hoặc page
   the_permalink();
   // Hiện thị tên 
   the title();
   //Hiển thị nội dụng
   the_content();
   // Hiển thị term của bài post muốn xóa đường dẫn thì vào wp-includes/category-template.php để sửa
   the_terms( $post->ID, 'cat-palce', '', '' );
   // Hiện thị term của bài viết hiện tại 
    $term_list_job = wp_get_post_terms( $post->ID, 'cat-td', array( 'fields' => 'names' ) );
     foreach($term_list_job as $job){
         echo ''.$job.'; ';
      }
    // includes File vào function.php
    
    require get_theme_file_path('');
            
?>