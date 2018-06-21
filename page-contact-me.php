<?php

/*
* Template Name: Contact Me
*/
get_header(); ?>


<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = sanitize_text_field( $_POST['message_name'] );
  $email = sanitize_text_field( $_POST['message_email'] );
  $message = sanitize_text_field( $_POST['message_text'] );
  $human = sanitize_text_field( $_POST['message_human'] );

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>


           <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

            <div class="blog-header"  id="top">
              <div class="container">
                <h1 class="blog-title" style="text-transform:uppercase;"><?php the_title(); ?></h1>
              </div>
            </div>

            <div class="bread-container"  id="breadcrumbs">
              <div class="container">
                  <?php the_breadcrumb(); ?>
              </div>
            </div>


            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <?php the_content(); ?>
                        <ul class="navbar-nav black flex-row socials ">
                              <?php
                                  $args = array(
                                      'theme_location' => 'social-menu',
                                      'menu_class'     => 'navbar-nav flex-row socials',
                                      'link_before'    => '<span class="sr-text">',
                                      'link_after'     => '</span>'
                                  );
                               wp_nav_menu($args);
                              ?>
                        </ul>
                    </div>
                    <div class="col-md-6">

                      <div id="respond">
                        <?php echo $response; ?>
                        <form class="reservation-form"  action="<?php the_permalink(); ?>" method="post" >

                          <div class="field">
                              <input type="text" name="message_name" placeholder="Name" value="<?php echo esc_attr($_POST['message_name']); ?>">
                          </div>
                          <div class="field">
                              <input type="email"  name="message_email" placeholder="E-mail"  value="<?php echo esc_attr($_POST['message_email']); ?>">
                          </div>
                          <div class="field">
                              <textarea type="text" cols="50" rows="5" placeholder="Message"  name="message_text" ><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                          </div>
                          <div class="field">
                              <input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label>
                          </div>
                          <input type="hidden" name="submitted" value="1">

                          <input type="submit" class="btn btn-default" value="Send" >
                        </form>
                      </div>
                    </div>
                </div><!-- /.row -->
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
          <h1>NO PAGE FOUND</h1>
        <?php endif; ?>
    <?php get_footer(); ?>
