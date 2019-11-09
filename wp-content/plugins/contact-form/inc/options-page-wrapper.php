<div class="wrap">

    <h1 class="wp-heading-inline"><?php_e( 'Contact Form', 'contactform' ); ?></h1>

    <form method="post" action="options.php">
    <?php
        /* Setup our fields
         * so WordpRess can process the form correctly
        */
        settings_fields( 'contactform_fields' );
        do_settings_sections( 'contactform_fields' );
    ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Contact Email:</th>
                <td><input type="text" style="width: 300px;" name="contactform_email" value="<?php echo get_option( 'contactform_email' ); ?>"/></td>
            </tr>
            <tr valign="top">
                <th scope="row">Message</th>
                <td><textarea style="width: 300px;" name="contactform_message" value="4"/><?php echo get_option( 'contactform_message' ); ?></textarea></td>
            </tr>
        </table>

        <?php
            global $wpdb;
            $table_name = $wpdb->prefix . "contact_form";
            $rows = $wpdb->get_results("SELECT * from $table_name");
        ?>

        <table class="widefat">
            <thead>
                <tr>
                    <th><?php esc_attr_e( 'ID', 'contactform' ); ?></th>
                    <th><?php esc_attr_e( 'Name', 'contactform' ); ?></th>
                    <th><?php esc_attr_e( 'Email', 'contactform' ); ?></th>
                    <th><?php esc_attr_e( 'Message', 'contactform' ); ?></th>
                </tr>
            </thead>

        <?php foreach ($rows as $row): ?>

        <tr>
          <td><?php esc_attr_e( $row->id, 'contactform' ); ?></td>
          <td><?php esc_attr_e( $row->name, 'contactform' ); ?></td>
          <td><?php esc_attr_e( $row->email, 'contactform' ); ?></td>
          <td><?php esc_attr_e( $row->message, 'contactform' ); ?></td>
        </tr>

        <?php endforeach; ?>

        </table>

        <?php submit_button(); ?>
    </form>

</div><!--/.wrap-->
