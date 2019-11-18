jQuery(document).ready(function($) {
  
//----------------------------------------------------------------graduate select--//    
  
	$('#filter').change(function(){
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

jQuery(document).on("click", 'input[type="checkbox"]', function(event) { 
    var sList = "";
    jQuery('input[type=checkbox]').each(function () {
        sList += "(" + jQuery(this).val() + "-" + (this.checked ? "checked" : "not checked") + ")";
        if(this.checked){
          
          jQuery('#favourite').val(jQuery(this).val());
          
          var filter = jQuery('#filter');
          jQuery.ajax({
            url:filter.attr('action'),
            data:filter.serialize(), // form data
            type:filter.attr('method'), // POST
            success:function(data){
              jQuery('#graduates').html(data); // insert data
            }
        });
          
        }
    });
    console.log (sList);
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
  
});

//   jQuery('input[type="checkbox"]').click(function(){
//     jQuery('input[type="checkbox"]').not(this).prop("checked", false);
// 	});
  
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