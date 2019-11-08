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
  
});

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