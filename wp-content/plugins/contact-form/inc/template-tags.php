<?php

if ( ! function_exists( 'contactform_box' ) ) {
  function contactform_box() {
  ?>
  <form action="<?php echo $contact_plugin_root_url; ?>/wp-content/plugins/contact-form/inc/contactform-add.php" method="post">
    <!--name input-->
    <div class="name">
      <h6>Name</h6>
      <input type="text" id="name" name="name" value="<?php echo $name ?>" placeholder="Enter name">
    </div>
    <!--email input-->
    <div class="email">
      <h6>Email</h6>
      <input type="text" id="email" name="email" value="<?php echo $email ?>" placeholder="Enter email">
    </div>
    <!--message input-->
    <div class="message">
      <h6>Message</h6>
      <textarea class="contact-message" type="textarea" id="email" name="email" value="<?php echo $email ?>" placeholder="Enter message"></textarea>
    </div>
    <input type ="hidden" name="referer" value="<?php echo get_permalink() ?>">
    <button id="submit" type ="submit" name="submit" value="submit">Send</button>
  </form>
  <?php
  }
}

?>
