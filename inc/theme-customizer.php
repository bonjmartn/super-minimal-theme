<?php

function super_customize_register( $wp_customize ) {


  // Customize title and tagline sections and labels

  $wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'super-minimal');  
  $wp_customize->get_control('display_header_text')->section = 'title_tagline'; 
  $wp_customize->get_control('blogname')->label = __('Site Name', 'super-minimal');  
  $wp_customize->get_control('blogdescription')->label = __('Site Description', 'super-minimal');  
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';

  // Customize the Front Page Settings

  $wp_customize->get_section('static_front_page')->title = __('Homepage Preferences', 'super-minimal');
  $wp_customize->get_section('static_front_page')->priority = 20;
  $wp_customize->get_control('show_on_front')->label = __('Choose Homepage Preference', 'super-minimal');  
  $wp_customize->get_control('page_on_front')->label = __('Select Homepage', 'super-minimal');  
  $wp_customize->get_control('page_for_posts')->label = __('Select Blog Homepage', 'super-minimal');  

  $wp_customize->remove_control('header_image');
  $wp_customize->remove_section('colors');

// Create custom panels

  $wp_customize->add_panel( 'general_settings', array(
      'priority' => 10,
      'theme_supports' => '',
      'title' => __( 'General Settings', 'super-minimal' ),
      'description' => __( 'Controls the basic settings for the theme.', 'super-minimal' ),
  ) );
  $wp_customize->add_panel( 'color_choices', array(
      'priority' => 30,
      'theme_supports' => '',
      'title' => __( 'Color Choices', 'super-minimal' ),
      'description' => __( 'Controls the color settings for the theme.', 'super-minimal' ),
  ) ); 
  $wp_customize->add_panel( 'typography_settings', array(
      'priority' => 40,
      'theme_supports' => '',
      'title' => __( 'Typography', 'super-minimal' ),
      'description' => __( 'Controls the fonts for the theme.', 'super-minimal' ),
  ) ); 


  // Assign sections to panels

  $wp_customize->get_section('title_tagline')->panel = 'general_settings';      
  $wp_customize->get_section('static_front_page')->panel = 'general_settings';
  $wp_customize->get_section('background_image')->panel = 'general_settings';
  $wp_customize->get_section('background_image')->priority = 50;


// GENERAL SETTINGS PANEL ........................................ //

// Add Custom Logo Settings

  $wp_customize->add_section( 'custom_logo' , array(
    'title'      => __('Change Your Logo','super-minimal'), 
    'panel'      => 'general_settings',
    'priority'   => 10    
  ) );  
  $wp_customize->add_setting(
      'super_logo',
      array(
          'default-image' => get_template_directory_uri() . '/images/super-minimal-logo.png',  
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_logo',
           array(
               'label'      => __( 'Change Logo', 'super-minimal' ),
               'section'    => 'custom_logo',
               'settings'   => 'super_logo',
               'context'    => 'super-custom-logo' 
           )
       )
   ); 

// COLOR CHOICES PANEL ........................................ //

// Text Colors

  $wp_customize->add_section( 'text_colors' , array(
    'title'      => __('Text Colors','super-minimal'), 
    'panel'      => 'color_choices',
    'priority'   => 10    
  ) );

  $wp_customize->add_setting(
      'super_h_color',
      array(
          'default'         => '#252525',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_h_color',
           array(
               'label'      => __( 'Headings Color', 'super-minimal' ),
               'section'    => 'text_colors',
               'settings'   => 'super_h_color' 
           )
       )
   );

  $wp_customize->add_setting(
      'super_p_color',
      array(
          'default'         => '#252525',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_p_color',
           array(
               'label'      => __( 'Paragraph Color', 'super-minimal' ),
               'section'    => 'text_colors',
               'settings'   => 'super_p_color' 
           )
       )
   );


// Accent Color

  $wp_customize->add_section( 'accent_color' , array(
    'title'      => __('Accent Color','super-minimal'), 
    'panel'      => 'color_choices',
    'priority'   => 20    
  ) );

  $wp_customize->add_setting(
      'super_accent_color',
      array(
          'default'         => '#0072bc',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_accent_color',
           array(
               'label'      => __( 'Links, buttons, and icons', 'super-minimal' ),
               'section'    => 'accent_color',
               'settings'   => 'super_accent_color' 
           )
       )
   ); 


// Background Color

  $wp_customize->add_section( 'background_color' , array(
    'title'      => __('Background Color','super-minimal'), 
    'panel'      => 'color_choices',
    'priority'   => 20    
  ) );

  $wp_customize->add_setting(
      'super_background_color',
      array(
          'default'         => '#f7f7f7',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_background_color',
           array(
               'label'      => __( 'Background', 'super-minimal' ),
               'section'    => 'background_color',
               'settings'   => 'super_background_color' 
           )
       )
   );

// TYPOGRAPHY PANEL ........................................ //

// H1 Fonts

  $wp_customize->add_section( 'custom_h_fonts' , array(
    'title'      => __('Heading Styles','super-minimal'), 
    'panel'      => 'typography_settings',
    'priority'   => 10    
  ) );  
 
$wp_customize->add_setting(
      'super_h_font_type',
      array(
          'default'         => 'Open Sans',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_h_font_type',
            array(
                'label'          => __( 'Font', 'super-minimal' ),
                'section'        => 'custom_h_fonts',
                'settings'       => 'super_h_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Open Sans'       => 'Open Sans',
                  'Roboto'       => 'Roboto',
                  'Lato'       => 'Lato',
                  'Source Sans Pro'       => 'Source Sans Pro',
                  'Raleway'       => 'Raleway',
                  'Titillium Web'       => 'Titillium Web',
                  'Alegreya Sans'       => 'Alegreya Sans',
                  'Trirong'       => 'Trirong',
                  'Prompt'       => 'Prompt',
                  'Taviraj'       => 'Taviraj',
                  'Merriweather'       => 'Merriweather',
                  'Ubuntu'       => 'Ubuntu',
                  'Josefin Slab'       => 'Josefin Slab',
                  'Cormorant'       => 'Cormorant'
                )
            )
        )       
   );


 // Paragraph Fonts

   $wp_customize->add_section( 'custom_p_fonts' , array(
    'title'      => __('Paragraph Styles','super-minimal'), 
    'panel'      => 'typography_settings',
    'priority'   => 20    
  ) );  

   $wp_customize->add_setting(
      'super_p_font_size',
      array(
          'default'         => '14px',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_p_font_size',
            array(
                'label'          => __( 'Font Size', 'super-minimal' ),
                'section'        => 'custom_p_fonts',
                'settings'       => 'super_p_font_size',
                'type'           => 'select',
                'choices'        => array(
                  '12'   => '12px',
                  '14'   => '14px',
                  '16'   => '16px',
                  '18'   => '18px',
                  '20'   => '20px',
                  '22'   => '22px'
                )
            )
        )       
   ); 


   $wp_customize->add_setting(
      'super_p_font_type',
      array(
          'default'         => 'Open Sans',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_p_font_type',
            array(
                'label'          => __( 'Font', 'super-minimal' ),
                'section'        => 'custom_p_fonts',
                'settings'       => 'super_p_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Open Sans'       => 'Open Sans',
                  'Roboto'       => 'Roboto',
                  'Lato'       => 'Lato',
                  'Source Sans Pro'       => 'Source Sans Pro',
                  'Raleway'       => 'Raleway',
                  'Titillium Web'       => 'Titillium Web',
                  'Alegreya Sans'       => 'Alegreya Sans',
                  'Trirong'       => 'Trirong',
                  'Prompt'       => 'Prompt',
                  'Taviraj'       => 'Taviraj',
                  'Merriweather'       => 'Merriweather',
                  'Ubuntu'       => 'Ubuntu',
                  'Josefin Slab'       => 'Josefin Slab',
                  'Cormorant'       => 'Cormorant'
                )
            )
        )       
   );

  
  // Add Custom CSS Textfield

  $wp_customize->add_section( 'custom_css_field' , array(
    'title'      => __('Custom CSS','super-minimal'), 
    'panel'      => 'general_settings',
    'priority'   => 200    
  ) );  
  $wp_customize->add_setting(
      'super_custom_css',
      array(          
          'sanitize_callback' => 'sanitize_textarea'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_css',
            array(
                'label'          => __( 'Add custom CSS here', 'super-minimal' ),
                'section'        => 'custom_css_field',
                'settings'       => 'super_custom_css',
                'type'           => 'textarea'
            )
        )
   );

}
  
add_action( 'customize_register', 'super_customize_register' );


// Call the custom css into the header

$defaults = array(
  'wp-head-callback'       => 'super_style_header'
);
add_theme_support( 'custom-header', $defaults );

// Callback function for updating styles

function super_style_header() {

   ?>

<style type="text/css">

body {
  background-color: <?php echo get_theme_mod('super_background_color'); ?>;
}

h1,
h2,
h3,
h4,
h5,
h6,
#logotext a {
  font-family: <?php echo get_theme_mod('super_h_font_type'); ?>;
  color: <?php echo get_theme_mod('super_h_color'); ?>;
}

p,
li {
	font-size: <?php echo get_theme_mod('super_p_font_size') . 'px'; ?>;
	color: <?php echo get_theme_mod('super_p_color'); ?>;
	font-family: <?php echo get_theme_mod('super_p_font_type'); ?>;
}

#copyright  {
  font-size: <?php echo get_theme_mod('super_p_font_size') . 'px'; ?>;
  font-family: <?php echo get_theme_mod('super_p_font_type'); ?>;
}

.main-navigation li:hover > a,
.main-navigation li.current_page_item a,
.main-navigation li.current-menu-item a,
.main-navigation ul ul a:hover,
.main-navigation ul ul :hover > a,
.social-icons .fa,
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a,
h1 a:visited,
h2 a:visited,
h3 a:visited,
h4 a:visited,
h5 a:visited,
h6 a:visited,
p a,
li a,
span a {
  color: <?php echo get_theme_mod('super_accent_color'); ?>;
}

a,
a:visited,
a:hover,
a:focus,
a:active,
:not(.main-navigation a),
:not(.main-navigation a:visited), {
  color: <?php echo get_theme_mod('super_accent_color'); ?>;
}

.pagination ul li span.current,
.pagination ul li a:hover {
  background: <?php echo get_theme_mod('super_accent_color'); ?>;
}

button,
input[type=submit],
html input[type="button"],
input[type="reset"] {
	background-color: <?php echo get_theme_mod('super_accent_color'); ?>;
}

.main-navigation,
.main-navigation ul,
.main-navigation li,
.main-navigation ul ul li,
.main-navigation ul ul a,
.main-navigation a,
.main-navigation a:visited {
  color: <?php echo get_theme_mod('super_p_color'); ?>;
}

  <?php if( get_theme_mod('super_custom_css') != '' ) {
    echo get_theme_mod('super_custom_css');
  } ?>

  </style>

<?php 

}

// Sanitize text 

function sanitize_text( $text ) {
    
    return sanitize_text_field( $text );

}

// Sanitize textarea 

function sanitize_textarea( $text ) {
    
    return esc_textarea( $text );

}

// Custom js for theme customizer

function super_customizer_js() {
  wp_enqueue_script(
    'super_theme_customizer',
    get_template_directory_uri() . '/js/theme-customizer.js',
    array( 'jquery', 'customize-preview' ),
    '',
    true
);
}
add_action( 'customize_preview_init', 'super_customizer_js' );

?>