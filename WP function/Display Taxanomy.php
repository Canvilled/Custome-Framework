  <?php
         
         // Hiển thị danh sách địa điểm
         $places = get_terms(
           array( 
               'taxonomy'   => 'cat-palce', //
               'hide_empty' => false,
           )
         );
         
         // Check if any term exists
           if ( ! empty( $places ) && is_array( $places ) ) {
           // Run a loop and print them all
              foreach ( $places as $place ) { ?>
               <option value="<?php echo $place->name; ?>">
                   <?php echo $place->name; ?></option>
               <?php
           }
           } 
         //Kết thúc Hiển thị danh sách địa điểm
    ?>