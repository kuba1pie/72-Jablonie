<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function register_my_menus() {
  register_nav_menus(
    array(
      'menu_main' => __( 'Menu główne' ),
      'menu_cat' => __( 'Menu kategorie' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
}
 
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );

function pm_widgets_init() {
	register_sidebar( array(
			 'name'          => 'Test Widget',
			 'id'            => 'testwidget',
			 'before_widget' => ' ',
			 'after_widget'  => ' ',
			 'before_title'  => ' ',
			 'after_title'   => ' ',
	 ) );
	}
	 add_action( 'widgets_init', 'pm_widgets_init');

	 class clear_widget extends WP_Widget {
		function __construct() {
				 parent::__construct(false, $name = 'Czysty widget');    
		}
		function widget($args, $instance) {    
				extract( $args );
				$title         = apply_filters('widget_title', $instance['title']);
				$message     = $instance['message'];
				?>
<?php echo $before_widget; ?>
<?php if ( $title )
												echo $before_title . $title . $after_title; ?>
<?php echo $message; ?>
<?php echo $after_widget; ?>
<?php }
function form($instance) {
		$title         = esc_attr($instance['title']);
		$message    = esc_attr($instance['message']);
		?>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Tytuł</label>
  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
    name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('message'); ?>">Zawartość</label>
  <input class="widefat" id="<?php echo $this->get_field_id('message'); ?>"
    name="<?php echo $this->get_field_name('message'); ?>" type="text" value="<?php echo $message; ?>" />
</p>
<?php 
} 
}
function clear_widget_init(){
	return register_widget('clear_widget');
}
add_action ('widgets_init', 'clear_widget_init');

function wporg_custom_post_type() {
	register_post_type('Rider',
			array(
					'labels'      => array(
							'name'          => __('Riders', 'textdomain'),
							'singular_name' => __('Riders', 'textdomain'),
							'add_new' => _x('Add Rider', 'book'),
							'add_new_item' => __('Add New Rider'),
							'edit_item' => __('Edit Rider'),
							'new_item' => __('New Rider'),
							'all_items' => __('All Riders'),
							'view_item' => __('View Rider')
					),
							'public'      => true,
							'has_archive' => true,
							'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
			)
	);
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		}
}
add_action('init', 'wporg_custom_post_type');


function wporg_add_custom_box() {
	$screens = [ 'post', 'rider' ];
	foreach ( $screens as $screen ) {
			add_meta_box(
					'wporg_box_id',                 // Unique ID
					'Custom Meta Box Title',      // Box title
					'wporg_custom_box_html',  // Content callback, must be of type callable
					$screen                            // Post type
			);
	}
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );


function wporg_custom_box_html( $post ) {
	$value = get_post_meta( $post->ID, '_wporg_meta_key', true );
	?>
<label for="wporg_field">Description for this field</label>

<input name="wporg_field" id="wporg_field" class="postbox" value="<?php echo $value; ?>>
<select name=" wporg_field" id="wporg_field" class="postbox">
<option value="">Select something...</option>
<option value="something" <?php selected( $value, 'something' ); ?>>Something</option>
<option value="else" <?php selected( $value, 'else' ); ?>>Else</option>
</select>
<?php
}

function wporg_save_postdata( $post_id ) {
	if ( array_key_exists( 'wporg_field', $_POST ) ) {
			update_post_meta(
					$post_id,
					'_wporg_meta_key',
					$_POST['wporg_field']
			);
	}
}
add_action( 'save_post', 'wporg_save_postdata' );