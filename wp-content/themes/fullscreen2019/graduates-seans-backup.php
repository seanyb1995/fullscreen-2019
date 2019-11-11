<!-- Creative Advertising -->

<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--testing environment-->
      <section class="test-environment">
        
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
          <?php
            $field_key = "field_5dc250bee7c25"; 
              $field = get_field_object($field_key);

              if( $field ) {
                echo '<select name="digital_design">';

                echo '<option value="">All</option>';

                foreach( $field['choices'] as $k => $v ) {
                  echo '<option value="' . $k . '"';

                  if ( $k == $specialisation ) {
                    echo ' selected';
                  }
                  echo '>' . $v . '</option>';
                }

                echo '</select>';
              }
          ?>
          <input type="hidden" name="major" value="creative_advertising">
          <input type="hidden" name="action" value="myfilter">
        </form>
        
        <div id="graduates"></div>
        
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- Digital Design -->

<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--testing environment-->
      <section class="test-environment">
        <h1>Some dank favourites</h1>
        <div class="favourite">
        <?php 
          if(isset($_SESSION["favourite"])) { 
            
            $favourites = $_SESSION['favourite']; 
            print_r($favourites);
            
//             $favourites = array_unique($favourites, SORT_REGULAR);
            
            foreach($favourites as $favourite){
              ?><p><?php echo $favourite['name']; ?></p><?php
            }          
            
          } 
          ?>
          </div>
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
          <?php
            $field_key = "field_5dc24f68cd814"; 
              $field = get_field_object($field_key);

              if( $field ) {
                echo '<select name="digital_design">';

                echo '<option value="">All</option>';

                foreach( $field['choices'] as $k => $v ) {
                  echo '<option value="' . $k . '"';

                  if ( $k == $specialisation ) {
                    echo ' selected';
                  }
                  echo '>' . $v . '</option>';
                }

                echo '</select>';
              }
          ?>
          <input type="hidden" name="favourite" id="favourite" value="">
          <input type="hidden" name="major" value="digital_design">
          <input type="hidden" name="action" value="myfilter">
          
          <input type="text" name="search" placeholder="search">
          <input type="submit" id="submit" value="submit">
        </form>
        
        <div id="graduates"></div>
        
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- Graphic Design -->

<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--testing environment-->
      <section class="test-environment">
        
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
          <?php
            $field_key = "field_5dc2500436ac7"; 
              $field = get_field_object($field_key);

              if( $field ) {
                echo '<select name="specialisation">';

                echo '<option value="">All</option>';

                foreach( $field['choices'] as $k => $v ) {
                  echo '<option value="' . $k . '"';

                  if ( $k == $specialisation ) {
                    echo ' selected';
                  }
                  echo '>' . $v . '</option>';
                }

                echo '</select>';
              }
          ?>
          <input type="hidden" name="major" value="graphic_design">
          <input type="hidden" name="action" value="myfilter">
        </form>
        
        <div id="graduates"></div>
        
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- Photography and Illustration -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--testing environment-->
      <section class="test-environment">
        
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
          <?php
            $field_key = "field_5dc25038ec2d9"; 
              $field = get_field_object($field_key);

              if( $field ) {
                echo '<select name="specialisation">';

                echo '<option value="">All</option>';

                foreach( $field['choices'] as $k => $v ) {
                  echo '<option value="' . $k . '"';

                  if ( $k == $specialisation ) {
                    echo ' selected';
                  }
                  echo '>' . $v . '</option>';
                }

                echo '</select>';
              }
          ?>
          <input type="hidden" name="major" value="Illustration">
          <input type="hidden" name="action" value="myfilter">
        </form>
        
        <div id="graduates"></div>
        
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- Game and Animation -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--testing environment-->
      <section class="test-environment">
        
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
          <?php
            $field_key = "field_5dc24fce90f0e"; 
              $field = get_field_object($field_key);

              if( $field ) {
                echo '<select name="animation_and_game_design">';

                echo '<option value="">All</option>';

                foreach( $field['choices'] as $k => $v ) {
                  echo '<option value="' . $k . '"';

                  if ( $k == $specialisation ) {
                    echo ' selected';
                  }
                  echo '>' . $v . '</option>';
                }

                echo '</select>';
              }
          ?>
          <input type="hidden" name="major" value="games__animation_design">
          <input type="hidden" name="action" value="myfilter">
        </form>
        
        <div id="graduates"></div>
        
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->