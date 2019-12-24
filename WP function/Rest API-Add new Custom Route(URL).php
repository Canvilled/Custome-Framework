<?php 
add_action ('rest_api_init','custom_API');

function custom_API(){
	register_rest_route('custome_api/v1','search',array(
	   'method' => WP_REST_SERVER::READABLE,
	   'callback' => 'custom_API_search'
	)
}

function custom_API_search(){
	$const_1 = new WP_Query(array(
	  'post_type' => 'name-slug'
	));
	
	$constResult = array();
	while($const_1->have_post()){
		$const_1->the_post();
		array_push($constResult,
		array(
		  'title' => get_the_title(),
		  'link'  => get_the_permalink(),
		))
	}

}
?>