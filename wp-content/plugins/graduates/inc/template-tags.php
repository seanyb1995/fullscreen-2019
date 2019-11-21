<?php
/*
 * function that creates template tag function 'graduates'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

add_action('wp_ajax_myfilter', 'digital_design_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'digital_design_filter_function');

  function digital_design_filter_function() {
    session_start();
//     session_destroy();
    // if any filters are set 
  
    $digital_design = $_POST['digital_design'];
    $animation_and_game_design = $_POST['animation_and_game_design'];
    $graphic_design = $_POST['graphic_design'];
    $illustration = $_Post['Illustration'];
    $creative_advertising = $_POST['creative_advertising'];
    $major = $_POST['major'];
    $specialisation = $_POST['specialisation'];
    $search = $_POST['search'];
    
    $favourite = $_POST['favourite'];
    
    
    
    // if session variable favourite isn't set, make it an empty array
    if  ( ! isset($_SESSION['favourite'])) {
      $_SESSION['favourite'] = array();
    } 
    
    // set session graduate as an empty array
    $_SESSION['graduate'] = array();
    
    if(isset($favourite)) {
      
      $_SESSION['graduate'] = array(
        'name' => $favourite
      );
      
      $graduate = $_SESSION['graduate'];
      
//       if(in_array($graduate,$_SESSION['favourite'])){
//         print_r("in");
//         $key=array_search($graduate,$_SESSION['favourite']);
//         if($key!==false)
//         unset($_SESSION['favourite'][$key]);
//         $_SESSION["favourite"] = array_values($_SESSION["favourite"]);
//       }else{
//         print_r("out");
//         array_push($_SESSION['favourite'], $graduate);
//       }
      
      
    }
    
    // setup the parameters for the query
    $tax_query = "";
    
    /*
        if category is not empty, then filter must be active
        set var $tax_query to be used in out final WP query
        for the product post
    */
       
   // Check if filter is set if so query database by specialisation from POST
    
    if( $search !="") {
      
      $relation = 'AND';
      $specCheck = "";
      
      //Check for if speification has been selected. If it has,
      //build array with filter and add to search criteria.
      if ($digital_design !="") {
          $specCheck = array(
            'key'		=> $specialisation,
            'value'	=> $digital_design,
            'compare' => 'LIKE',
            'project1' => 'project_1_name',
            'value2' => $search,
            'project2' => 'project_2_name',
            'project3' => 'project_3_name'
          );
      } elseif ($animation_and_game_design !="") {
          $specCheck = array(
            'key'		=> $specialisation,
            'value'	=> $animation_and_game_design,
            'compare' => 'LIKE',
            'project1' => 'project_1_name',
            'project2' => 'project_2_name',
            'project3' => 'project_3_name'
          );
      } elseif ($graphic_design !="") {
          $specCheck = array(
            'key'		=> $specialisation,
            'value'	=> $graphic_design,
            'compare' => 'LIKE',
            'project1' => 'project_1_name',
            'project2' => 'project_2_name',
            'project3' => 'project_3_name'
          );
      } elseif ($illustration !="") {
          $specCheck = array(
            'key'		=> $specialisation,
            'value'	=> $illustration,
            'compare' => 'LIKE',
            'project1' => 'project_1_name',
            'project2' => 'project_2_name',
            'project3' => 'project_3_name'
          );
      } elseif ($creative_advertising !="") {
          $specCheck = array(
            'key'		=> $specialisation,
            'value'	=> $creative_advertising,
            'compare' => 'LIKE',
            'project1' => 'project_1_name',
            'project2' => 'project_2_name',
            'project3' => 'project_3_name'
          );
      }
      
      //If there is no specification applied, search on projects and name
      if ($specCheck == "") {
          $relation = 'OR';

          $specCheck = array(
            'key' => 'project_1_name',
            'value' => $search,
            'compare' => 'LIKE',
            'key2' => 'project_2_name',
            'value2' => $search,
            'compare2' => 'LIKE',
            'key3' => 'project_3_name',
            'value3' => $search,
            'compare3' => 'LIKE'
          );
      }
      
      //print_r($specCheck);
      
      //Check if key if project name, if it is
      //search all project names
      if ($specCheck[key] == "project_1_name") {
          $args = array(
              'post_type' => 'graduates',
              'meta_query' => array(
                  'relation' => $relation,

                  array(
                      'key' => 'name',
                      'value' => $search,
                      'compare' => 'LIKE'
                  ),
                //Insert array build earlier with specCheck
                  array(
                      'key' => $specCheck[key],
                      'value' => $specCheck[value],
                      'compare' => $specCheck[compare]
                  ),
                  array(
                      'key' => $specCheck[key2],
                      'value' => $specCheck[value2],
                      'compare' => $specCheck[compare2]
                  ),
                  array(
                      'key' => $specCheck[key3],
                      'value' => $specCheck[value3],
                      'compare' => $specCheck[compare3]
                  )
              )
          );
      } else {
        $args = array(
              'post_type' => 'graduates',
              'meta_query' => array(
                  'relation' => 'OR',
                  //Check if match on graduate name and specialisation.
                  array(
                      'relation' => 'AND',
                      array(
                          'key' => 'name',
                          'value' => $search,
                          'compare' => 'LIKE'
                      ),
                    //Insert array build earlier with specCheck
                      array(
                          'key' => $specCheck[key],
                          'value' => $specCheck[value],
                          'compare' => $specCheck[compare]
                      )
                  )/*,
                 //Check if match on project 1 name and specialisation.
                  array(
                      'relation' => 'AND',
                      array(
                          'key' => $specCheck[project1],
                          'value' => $specCheck[value2],
                          'compare' => $specCheck[compare]
                      ),
                      array(
                          'key' => $specCheck[key],
                          'value' => $specCheck[value],
                          'compare' => $specCheck[compare]
                      )
                  )
                  //Check if match on project 2 name and specialisation.
                  array(
                      'relation' => 'AND',
                      array(
                          'key' => $specCheck[project2],
                          'value' => $specCheck[value],
                          'compare' => $specCheck[compare]
                      ),
                      array(
                          'key' => $specCheck[key],
                          'value' => $specCheck[value],
                          'compare' => $specCheck[compare]
                      )
                  ),
                  //Check if match on project 3 name and specialisation.
                  array(
                      'relation' => 'AND',
                      array(
                          'key' => $specCheck[project3],
                          'value' => $specCheck[value],
                          'compare' => $specCheck[compare]
                      ),
                      array(
                          'key' => $specCheck[key],
                          'value' => $specCheck[value],
                          'compare' => $specCheck[compare]
                      )
                  )*/
              )
          );
      }
    
    // Check digital design page for form submission
    }elseif( $digital_design !=""){
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> $specialisation,
      'meta_value'	=> $digital_design
    );
      
    // Check animation and game design page for form submission
    }elseif( $animation_and_game_design !=""){
     
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> $specialisation,
      'meta_value'	=> $animation_and_game_design
    );    
      
    // Check graphic design page for form submission  
    }elseif( $graphic_design !=""){
     
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> $specialisation,
      'meta_value'	=> $graphic_design
    );    
      
    // Check illustration page for form submission  
    }elseif( $illustration !=""){
     
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> $specialisation,
      'meta_value'	=> $illustration
    );  
      
    // Check creative advertising page for form submission    
    }elseif( $creative_advertising !=""){
     
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> $specialisation,
      'meta_value'	=> $creative_advertising
    );   
 
    }else{
      // If no select is made show graduates specific to major
      $args = array(
          'post_type' => 'graduates',
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'tax_query' => array(
            array(
              'taxonomy' => 'major',
              'field' => 'slug',
              'terms' => $major
            )
          )
        );
    }     
   
  ?>
  <div class="container-fluid">
    <div class="row">
  <?php 
  $graduates = new WP_Query($args);
  if( $graduates->have_posts() ): ?>
    <?php while($graduates->have_posts()): $graduates->the_post(); ?>
    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <!--gradaute card-->
      <div class="card">
        <div class="major">
          <!--major label-->
          <?php   // Get terms for post
           $terms = get_the_terms( $post->ID , 'major' );
           // Loop over each item since it's an array
           if ( $terms != null ){
             foreach( $terms as $term ) {
             // Print the name method from $term which is an OBJECT
              $words = explode(" ", $term->name);
              $acronym = "";

              foreach ($words as $w) {
                $acronym .= $w[0];
              }
              echo '<div id="' . $term->slug . '" class="name"><h3>' . $acronym . '</h3></div>';
             // Get rid of the other data stored in the object, since it's not needed
             unset($term);
             } 
           } 
          ?>
        </div>
        <!--graduate image-->
        <div class="image">
          <img src="https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2018/08/bitconnect-1.png" alt="graduate">
        </div>
        <!--graduate detail-->
        <div class="detail">
          <h3><?php the_title(); ?></h3>
            <?php 
              $dd = get_field_object('dd_specialisation'); 
              if($dd !=""){
                echo '<p>' . $dd['value'] . '</p>';
              }

              $agd = get_field_object('agd_specialisation'); 
              if($agd !=""){
                echo '<p>' . $agd['value'] . '</p>';
              }

              $gd = get_field_object('gd_specialisation'); 
              if($gd !=""){
                echo '<p>' . $gd['value'] . '</p>';
              }

              $ca = get_field_object('ca_specialisation'); 
              if($ca !=""){
                echo '<p>' . $ca['value'] . '</p>';
              }

              $i = get_field_object('i_specialisation'); 
              if($i !=""){
                echo '<p>' . $i['value'] . '</p>';
              }

            ?>
          <a href="<?php the_permalink(); ?>" id="button">View</a>
        </div>
      </div>
    </div>
    <?php endwhile ?>
  <?php endif ?>
    </div>
</div>
<?php
  }

 
