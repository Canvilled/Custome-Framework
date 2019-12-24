<?php 
function products(){
    $label = array(
        'name' => 'Sản phẩm', 
        'singular_name' => 'Sản phẩm' ,
		'add_new'               => __( 'Thêm sản phẩm', 'textdomain' ),
        'add_new_item'          => __( 'Tên sản phẩm', 'textdomain' ),
        'new_item'              => __( 'Sản phẩm mới', 'textdomain' ),
        'edit_item'             => __( 'Chỉnh sửa sản phẩm', 'textdomain' ),
        'view_item'             => __( 'Xem sản phẩm', 'textdomain' ),
        'all_items'             => __( 'Tất cả sản phẩm', 'textdomain' ),
        'search_items'          => __( 'Tìm kiếm sản phẩm', 'textdomain' ),
		'featured_image'        => _x( 'Hình ảnh sản phẩm', 'textdomain' ),
        'set_featured_image'    => _x( 'Chọn hình ảnh sản phẩm', 'textdomain' ),
        'remove_featured_image' => _x( 'Xóa hình ảnh sản phẩm', 'textdomain' ),       
    );
    $args = array(
        'labels' => $label, 
        'description' => 'Phần sản phẩm của xfuel', 
        'supports' => array(
            'title',                      
            'thumbnail',            
            'custom-fields'
        ),         
        'hierarchical' => false, 
        'order' => 'DESC',
        'orderby' => 'date',
        'posts_per_page' => 30,
        'public' => true, 
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'show_in_rest' => true,
        'menu_position' => 5, 
        'menu_icon'           => 'dashicons-category',
        'can_export' => true, 
        'has_archive' => true,         
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('products', $args); 
 
}
add_action('init', 'products');

?>