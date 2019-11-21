jQuery(document).ready(function() {

  jQuery('.showreel-checkbox').on('click',function(){
    jQuery('input').prop("checked", false);
    var value = jQuery(this).text();
    if(value == 'All') {
      jQuery('input[value=""]').prop("checked", true).trigger("change");
    }
    else {
      console.log(value);
      jQuery('input[value="' + value + '"]').prop("checked", true).trigger("change");
    }
  });
});