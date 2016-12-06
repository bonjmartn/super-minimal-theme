<?php 

// register social widget
function register_social_widget() {
    register_widget( 'social_widget' );
}
add_action( 'widgets_init', 'register_social_widget' );


/**
 * Adds social_Widget widget.
 */
class social_Widget extends WP_Widget {

  /**
   * Register widget with WordPress.
   */
  function __construct() {
    parent::__construct(
      'social_widget', // Base ID
      __( 'Social Icons', 'super-minimal' ), // Name
      array( 'description' => __( 'Drag me to the Social Icons widget area', 'super-minimal' ), ) // Args
    );
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    if ( ! empty( $instance['title'] ) ) {
      echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
    }
 
    $facebook = esc_url( $instance['facebook'] );
    $twitter = esc_url( $instance['twitter'] );
    $pinterest = esc_url( $instance['pinterest'] );
    $instagram = esc_url( $instance['instagram'] );
    $googleplus = esc_url( $instance['googleplus'] );
    $yelp = esc_url( $instance['yelp'] );
    $youtube = esc_url( $instance['youtube'] );
    $linkedin = esc_url( $instance['linkedin'] );
    $tumblr = esc_url( $instance['tumblr'] );
    $snapchat = esc_url( $instance['snapchat'] );
    $skype = esc_url( $instance['skype'] );
    $reddit = esc_url( $instance['reddit'] );
    $dribbble = esc_url( $instance['dribbble'] );
    $behance = esc_url( $instance['behance'] );
    $github = esc_url( $instance['github'] );


    echo sprintf( '<div class="social-icons">');

    if ( ! empty( $instance['facebook'] ) ) {
      echo sprintf( '<a href="' . $facebook . '"><i class="fa fa-facebook-official"></i></a>');
    }

    if ( ! empty( $instance['twitter'] ) ) {
      echo sprintf( '<a href="' . $twitter . '"><i class="fa fa-twitter"></i></a>');
    }

    if ( ! empty( $instance['pinterest'] ) ) {
      echo sprintf( '<a href="' . $pinterest . '"><i class="fa fa-pinterest"></i></a>');
    }

    if ( ! empty( $instance['instagram'] ) ) {
      echo sprintf( '<a href="' . $instagram . '"><i class="fa fa-instagram"></i></a>');
    }

    if ( ! empty( $instance['googleplus'] ) ) {
      echo sprintf( '<a href="' . $googleplus . '"><i class="fa fa-google-plus"></i></a>');
    }

    if ( ! empty( $instance['yelp'] ) ) {
      echo sprintf( '<a href="' . $yelp . '"><i class="fa fa-yelp"></i></a>');
    }

    if ( ! empty( $instance['youtube'] ) ) {
      echo sprintf( '<a href="' . $youtube . '"><i class="fa fa-youtube"></i></a>');
    }

    if ( ! empty( $instance['linkedin'] ) ) {
      echo sprintf( '<a href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a>');
    }

    if ( ! empty( $instance['tumblr'] ) ) {
      echo sprintf( '<a href="' . $tumblr . '"><i class="fa fa-tumblr"></i></a>');
    }

    if ( ! empty( $instance['snapchat'] ) ) {
      echo sprintf( '<a href="' . $snapchat . '"><i class="fa fa-snapchat-ghost"></i></a>');
    }

    if ( ! empty( $instance['skype'] ) ) {
      echo sprintf( '<a href="' . $skype . '"><i class="fa fa-skype"></i></a>');
    }

    if ( ! empty( $instance['reddit'] ) ) {
      echo sprintf( '<a href="' . $reddit . '"><i class="fa fa-reddit-alien"></i></a>');
    }

    if ( ! empty( $instance['dribbble'] ) ) {
      echo sprintf( '<a href="' . $dribbble . '"><i class="fa fa-dribbble"></i></a>');
    }

    if ( ! empty( $instance['behance'] ) ) {
      echo sprintf( '<a href="' . $behance . '"><i class="fa fa-behance"></i></a>');
    }

    if ( ! empty( $instance['github'] ) ) {
      echo sprintf( '<a href="' . $github . '"><i class="fa fa-github"></i></a>');
    }

    echo sprintf( '</div>');

    echo $args['after_widget'];
  }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
  public function form( $instance ) {
    $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : __( '', 'super-minimal' );
    $twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : __( '', 'super-minimal' );
    $pinterest = ! empty( $instance['pinterest'] ) ? $instance['pinterest'] : __( '', 'super-minimal' );
    $instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : __( '', 'super-minimal' );
    $googleplus = ! empty( $instance['googleplus'] ) ? $instance['googleplus'] : __( '', 'super-minimal' );
    $yelp = ! empty( $instance['yelp'] ) ? $instance['yelp'] : __( '', 'super-minimal' );
    $youtube = ! empty( $instance['youtube'] ) ? $instance['youtube'] : __( '', 'super-minimal' );
    $linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : __( '', 'super-minimal' );
    $tumblr = ! empty( $instance['tumblr'] ) ? $instance['tumblr'] : __( '', 'super-minimal' );
    $snapchat = ! empty( $instance['snapchat'] ) ? $instance['snapchat'] : __( '', 'super-minimal' );
    $skype = ! empty( $instance['skype'] ) ? $instance['skype'] : __( '', 'super-minimal' );
    $reddit = ! empty( $instance['reddit'] ) ? $instance['reddit'] : __( '', 'super-minimal' );
    $dribbble = ! empty( $instance['dribbble'] ) ? $instance['dribbble'] : __( '', 'super-minimal' );
    $behance = ! empty( $instance['behance'] ) ? $instance['behance'] : __( '', 'super-minimal' );
    $github = ! empty( $instance['github'] ) ? $instance['github'] : __( '', 'super-minimal' );
    ?>

    <p>
    <label for="<?php echo $this->get_field_id('facebook_field'); ?>"><?php _e('Enter the URL for your Facebook page', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('facebook_field'); ?>" name="<?php echo $this->get_field_name('facebook_field'); ?>" type="text" 
    value="<?php echo esc_attr( $facebook ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('twitter_field'); ?>"><?php _e('Enter the URL for your Twitter profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('twitter_field'); ?>" name="<?php echo $this->get_field_name('twitter_field'); ?>" type="text" 
    value="<?php echo esc_attr( $twitter ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('pinterest_field'); ?>"><?php _e('Enter the URL for your Pinterest page', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('pinterest_field'); ?>" name="<?php echo $this->get_field_name('pinterest_field'); ?>" type="text" 
    value="<?php echo esc_attr( $pinterest ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('instagram_field'); ?>"><?php _e('Enter the URL for your Instagram profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('instagram_field'); ?>" name="<?php echo $this->get_field_name('instagram_field'); ?>" type="text" 
    value="<?php echo esc_attr( $instagram ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('googleplus_field'); ?>"><?php _e('Enter the URL for your Google Plus profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('googleplus_field'); ?>" name="<?php echo $this->get_field_name('googleplus_field'); ?>" type="text" 
    value="<?php echo esc_attr( $googleplus ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('yelp_field'); ?>"><?php _e('Enter the URL for your Yelp page', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('yelp_field'); ?>" name="<?php echo $this->get_field_name('yelp_field'); ?>" type="text" 
    value="<?php echo esc_attr( $yelp ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('youtube_field'); ?>"><?php _e('Enter the URL for your YouTube page', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('youtube_field'); ?>" name="<?php echo $this->get_field_name('youtube_field'); ?>" type="text" 
    value="<?php echo esc_attr( $youtube ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('linkedin_field'); ?>"><?php _e('Enter the URL for your LinkedIn profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('linkedin_field'); ?>" name="<?php echo $this->get_field_name('linkedin_field'); ?>" type="text" 
    value="<?php echo esc_attr( $linkedin ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('tumblr_field'); ?>"><?php _e('Enter the URL for your tumblr profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('tumblr_field'); ?>" name="<?php echo $this->get_field_name('tumblr_field'); ?>" type="text" 
    value="<?php echo esc_attr( $tumblr ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('snapchat_field'); ?>"><?php _e('Enter the URL for your Snapchat profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('snapchat_field'); ?>" name="<?php echo $this->get_field_name('snapchat_field'); ?>" type="text" 
    value="<?php echo esc_attr( $snapchat ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('skype_field'); ?>"><?php _e('Enter the URL for your Skype profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('skype_field'); ?>" name="<?php echo $this->get_field_name('skype_field'); ?>" type="text" 
    value="<?php echo esc_attr( $skype ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('reddit_field'); ?>"><?php _e('Enter the URL for your Reddit profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('reddit_field'); ?>" name="<?php echo $this->get_field_name('reddit_field'); ?>" type="text" 
    value="<?php echo esc_attr( $reddit ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('dribbble_field'); ?>"><?php _e('Enter the URL for your Dribbble profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('dribbble_field'); ?>" name="<?php echo $this->get_field_name('dribbble_field'); ?>" type="text" 
    value="<?php echo esc_attr( $dribbble ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('behance_field'); ?>"><?php _e('Enter the URL for your Behance profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('behance_field'); ?>" name="<?php echo $this->get_field_name('behance_field'); ?>" type="text" 
    value="<?php echo esc_attr( $behance ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('github_field'); ?>"><?php _e('Enter the URL for your GitHub profile', 'super-minimal'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('github_field'); ?>" name="<?php echo $this->get_field_name('github_field'); ?>" type="text" 
    value="<?php echo esc_attr( $github ); ?>" />
    </p>
    <?php 
  }

  /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['facebook'] = strip_tags( $new_instance['facebook_field'] );
    $instance['twitter'] = strip_tags( $new_instance['twitter_field'] );
    $instance['pinterest'] = strip_tags( $new_instance['pinterest_field'] );
    $instance['instagram'] = strip_tags( $new_instance['instagram_field'] );
    $instance['googleplus'] = strip_tags( $new_instance['googleplus_field'] );
    $instance['yelp'] = strip_tags( $new_instance['yelp_field'] );
    $instance['youtube'] = strip_tags( $new_instance['youtube_field'] );
    $instance['linkedin'] = strip_tags( $new_instance['linkedin_field'] );
    $instance['tumblr'] = strip_tags( $new_instance['tumblr_field'] );
    $instance['snapchat'] = strip_tags( $new_instance['snapchat_field'] );
    $instance['skype'] = strip_tags( $new_instance['skype_field'] );
    $instance['reddit'] = strip_tags( $new_instance['reddit_field'] );
    $instance['dribbble'] = strip_tags( $new_instance['dribbble_field'] );
    $instance['behance'] = strip_tags( $new_instance['behance_field'] );
    $instance['github'] = strip_tags( $new_instance['github_field'] );

    return $instance;
  }

} // class social_Widget

?>