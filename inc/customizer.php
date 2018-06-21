<?php


function madesangoi_customize_register($wp_customize){
    // Showcase Section

    // register the customizer //// SHOWCASE ////
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'wpbootstrap'),
      'description' => sprintf(__('Options for showcase','madesangoi')),
      'priority'    => 130
    ));

      $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('MADE SANGOI', 'madesangoi'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'madesangoi'),
      'section' => 'showcase',
      'priority'  => 2
    ));





    $wp_customize->add_setting('showcase_description1', array(
    'default'   => _x('Multimedia Designer', 'madesangoi'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_description1', array(
    'label'   => __('description1', 'madesangoi'),
    'section' => 'showcase',
    'priority'  => 2
  ));


  $wp_customize->add_setting('showcase_description2', array(
  'default'   => _x('Web Developer', 'madesangoi'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('showcase_description2', array(
  'label'   => __('description2', 'madesangoi'),
  'section' => 'showcase',
  'priority'  => 2
));

$wp_customize->add_setting('showcase_description3', array(
'default'   => _x('Freelancer', 'madesangoi'),
'type'      => 'theme_mod'
));

$wp_customize->add_control('showcase_description3', array(
'label'   => __('description3', 'madesangoi'),
'section' => 'showcase',
'priority'  => 2
));






}


add_action('customize_register', 'madesangoi_customize_register');

?>
