<?php 
   function get_custom_rest(){
	// 1st Param is name Post_type_name
	// 2st Name display in API 
	// 3st is array want to display in API 
	   register_rest_field('post','authorName', array(
	   'get_callback' => function(){
		   return get_the_author();
	    } 
	   )
    }

?>