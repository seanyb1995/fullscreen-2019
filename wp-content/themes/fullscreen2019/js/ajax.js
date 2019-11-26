jQuery(document).ready(function($) {
  
//----------------------------------------------------------------graduate select--//    
  
jQuery('input[type="checkbox"]').change(function(){
		var filter = jQuery('#filter');
		jQuery.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			success:function(data){
				jQuery('#graduates').html(data); // insert data
			}
		});
		return false;
});
  
  //----------------------------------------------------------------graduate search--//  
  
 $('#filter').submit(function(){
    var filter = $('#filter');
    $.ajax({
      url:filter.attr('action'),
      data:filter.serialize(), // form data
      type:filter.attr('method'), // POST
      success:function(data){
        $('#graduates').html(data); // insert data
      }
    });
    return false;
  });
  
  //----------------------------------------------------------------graduate page load--//    
  
  var filter = $('#filter');
    $.ajax({
      url:filter.attr('action'),
      data:filter.serialize(), // form data
      type:filter.attr('method'), // POST
      success:function(data){
        $('#graduates').html(data); // insert data   
        
      }
      
  });
 

 //-----------------------------------------------------------wishlist add --//    
  
 jQuery(document).on("click", '.favourite-icon', function(event) { 
   
   jQuery('#favourite').val("");
   
   jQuery('#unset').val("");
   
   jQuery('#link').val("");
  
   var name = jQuery(this).children('.namevalue').val();
   
   var link = jQuery(this).children('.linkvalue').val();
   
   
   jQuery('#favourite').val(name);
   
   jQuery('#link').val(link);
   
  var filter = jQuery('#wishlist');
  
  jQuery.ajax({
    url:filter.attr('action'),
    data:filter.serialize(), // form data
    type:filter.attr('method'), // POST
    success:function(data){
      jQuery('.wishlistDropdown').html(data); // insert data
    }

    }); 

});
  
 jQuery(document).on("click", '.unset', function(event) { 
   
   var name = jQuery(this).prev('.dropdown-item').text();
   
   var link = jQuery(this).prev('.dropdown-item').attr('href');
   
   jQuery('#favourite').val("");
   
   jQuery('#unsetname').val("");
   
   jQuery('#unsetlink').val("");
   
   jQuery('#unsetlink').val("");

   jQuery('#unsetname').val(name);
   
   jQuery('#unsetlink').val(link);

  var filter = jQuery('#wishlist');
  
  jQuery.ajax({
    url:filter.attr('action'),
    data:filter.serialize(), // form data
    type:filter.attr('method'), // POST
    success:function(data){
      jQuery('.wishlistDropdown').html(data); // insert data
    }

    }); 

});
  
  var filter = jQuery('#wishlist');
  
  jQuery.ajax({
    url:filter.attr('action'),
    data:filter.serialize(), // form data
    type:filter.attr('method'), // POST
    success:function(data){
      jQuery('.wishlistDropdown').html(data); // insert data
    }

    }); 
  
  
//-----------------------------------------------------------showreel video page load--//  
  var filter = jQuery('#form');
    jQuery.ajax({
      url:filter.attr('action'),
      data:filter.serialize(), // form data
      type:filter.attr('method'), // POST
      success:function(data){
        jQuery('#showreels').html(data); // insert data
      }
  });
  
  jQuery('input[type="checkbox"]').change(function(){
		var filter = jQuery('#form');
    console.log(filter);
		jQuery.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			success:function(data){
				jQuery('#showreels').html(data); // insert data
			}
		});
		return false;
});
  
});

