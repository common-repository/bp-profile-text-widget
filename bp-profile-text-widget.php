<?php

// Hooks & Filters

add_action( 'widgets_init', 'slush_bpprofiletext_widget_fn' );

/***** BP Profile Text Widget *****/

class Slushman_bpprofiletext_widget extends WP_Widget {

	function __construct() {
	
		$widget_ops = array( 'classname' => 'slushman-bpprofiletext-widget', 'description' => __( 'BP Profile Text Widget', 'slushman-bpprofiletext-widget' ) );
		
		$this->WP_Widget( 'bpprofiletext_widget', __( 'BP Profile Text Widget' ), $widget_ops );
		
	}
	
	function widget( $args, $instance ) {
	
		extract( $args );
		
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		$text = xprofile_get_field_data( "Custom Text" );
		
		echo $before_widget;
		
		echo ( empty( $title ) ? '' : $before_title . $title . $after_title );
				
		do_action( 'bp_before_sidebar_me' ); ?>
		
		<div id="sidebar-me">

		<div class="bpcustomtextwidget"><?php echo !empty( $instance['filter'] ) ? wpautop( $text ) : $text; ?></div><?php
		
		do_action( 'bp_sidebar_me' ); ?>
		
		</div><!-- End BP Profile Text Widget -->
		
		<?php do_action( 'bp_after_sidebar_me' );
		
		echo $after_widget;
		
		// $title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		
		// echo ( empty( $title ) ? '' : $before_title . $title . $after_title );

	}
	
// Updates the widget
	
	function update( $new_instance, $old_instance ) {
	
		$instance 			= $old_instance;
		$instance['title'] 	= strip_tags( $new_instance['title'] );
		$instance['text'] 	= ( current_user_can( 'unfiltered_html' ) ? $text : stripslashes( wp_filter_post_kses( addslashes( $text ) ) ) ); // wp_filter_post_kses() expects slashed
		$instance['filter'] = isset( $new_instance['filter'] );
		
		return $instance;
		
	}
	
// Creates the widget options form
	
	function form( $instance ) {
	
		$instance 	= wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$title 		= strip_tags( $instance['title'] ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title' ); ?>: 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
			</label>
		</p>
		
		<p><input id="<?php echo $this->get_field_id( 'filter' ); ?>" name="<?php echo $this->get_field_name( 'filter' ); ?>" type="checkbox" <?php checked( isset( $instance['filter'] ) ? $instance['filter'] : 0 ); ?> />&nbsp;<label for="<?php echo $this->get_field_id( 'filter' ); ?>"><?php _e( 'Automatically add paragraphs' ); ?></label></p><?php

	}

} // End of Slushman_bpprofiletext_widget()

function slush_bpprofiletext_widget_fn() {

	register_widget( 'Slushman_bpprofiletext_widget' );
	
}

?>