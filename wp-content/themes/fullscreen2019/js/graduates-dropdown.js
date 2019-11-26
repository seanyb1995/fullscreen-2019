jQuery(document).ready(function() {
  
// graduates dropdown
  jQuery('.graduates-dropdown-label').on('click',function(){
    jQuery('input').prop("checked", false);
    var value = jQuery(this).text();
    if(value == 'All') {
      jQuery('input[value=""]').prop("checked", true).trigger("change");
    }
    else {
      jQuery('input[value="' + value + '"]').prop("checked", true).trigger("change");
    }
  });
  
  // graduates favourite icon
  jQuery(document).on("click", '.fa-star-o', function(event) { 
  
    var x = document.getElementsByClassName("icon");

    var i;

    for (i = 0; i < x.length; i++) {

      if (x[i].className === "icon fa fa-star-o") {

          jQuery(this).removeClass('fa-star-o').addClass('fa-star');

      }

    } 
    
  });
  
  // graduates favourite icon
  jQuery(document).on("click", '.fa-star', function(event) { 
  
    var x = document.getElementsByClassName("icon");

    var i;

    for (i = 0; i < x.length; i++) {

      if (x[i].className === "icon fa fa-star") {

          jQuery(this).removeClass('fa-star').addClass('fa-star-o');

      }

    } 
    
  });
  
  // test javascript for wishlist
  
  jQuery('.wishlist').click(function(){

     jQuery(".wishlistDropdown").toggleClass("show"); 

  });

});