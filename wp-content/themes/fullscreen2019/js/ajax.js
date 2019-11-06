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