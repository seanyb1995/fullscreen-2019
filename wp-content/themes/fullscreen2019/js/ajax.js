jQuery(document).ready(function($) {
  
//----------------------------------------------------------------graduate posts--//    
  
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
  
  //----------------------------------------------------------------graduate posts--//    
  
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