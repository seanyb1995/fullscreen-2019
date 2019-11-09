<?php

/*
 * First require the wp-load.php
 * we need these in order to use wordpress
 * functions like update_post_meta
*/
require_once('../../../../wp-load.php');

// 1. Check if any POST data has been submitted
if (isset($_POST['submit'])) {

  // 2. Get submitted fields & create variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['email'];
  $referer = $_POST['referer'];

  // 3. Redirect with error if mandatory fields are empty
  if( $name === "" || $email === "" || $message === ""){
    $msg = urlencode('Sorry, we need name, email and your message!');
    header("Location: $referer?msg=$msg");
    die();
  }

  // 4. Insert new row in database table
  global $wpdb;

  $wpdb->show_errors();
    $table_name = $wpdb->prefix . "contact_form";
    $insert =  $wpdb->insert(
                $table_name, //table
                array(
                  'name' => $name,
                  'email' => $email,
                  'message' => $message
                ),
                array('%s', '%s', '%s') //data format
  );

  /* 5. Check if something went wrong with the insert query
   * and redirect back to staff post page ($referer) with message
   */
  if(!$insert){
    $msg = urlencode('Sorry, we were unable to submit your form.');
    header("Location: $referer?msg=$msg");
    die();
  }

  if($insert){
    $msg = 'message successfully sent!';
    header("Location: $referer?contactform-added=1&msg=$msg");
    exit;
  }

}

?>
