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

// jQuery(document).on("click", '#icon', function(event) { 
  
//     jQuery('#icon').each(function () {
      
//           var name = jQuery(this).siblings('.namevalue').val();
      
//           $('#favourite').val(name);
      
//           var link = jQuery(this).siblings('.linkvalue').val();
      
//           $('#link').val(link);
          
//           var filter = jQuery('#filter');
//           jQuery.ajax({
//             url:filter.attr('action'),
//             data:filter.serialize(), // form data
//             type:filter.attr('method'), // POST
//             success:function(data){
//               jQuery('#graduates').html(data); // insert data
//             }
//         });
          
//     });

// });
  
 jQuery(document).on("click", '.favourite-icon', function(event) { 
  
    var value = jQuery(this).val();
    jQuery('input[value="' + value + '"]').prop("checked", true).trigger("change");
    

});
  
// jQuery(document).on("click", '#icon', function(event) { 

//   var filter = jQuery('#wishlist');
  
//   jQuery.ajax({
//     url:filter.attr('action'),
//     data:filter.serialize(), // form data
//     type:filter.attr('method'), // POST
//     success:function(data){
//       jQuery('.wishlistDropdown').html(data); // insert data
//     }

//     });
  
// });
  
//   var filter = jQuery('#wishlist');
  
//   jQuery.ajax({
//     url:filter.attr('action'),
//     data:filter.serialize(), // form data
//     type:filter.attr('method'), // POST
//     success:function(data){
//       jQuery('.wishlistDropdown').html(data); // insert data
//     }

//     }); 
  
  
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

