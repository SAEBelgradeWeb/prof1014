(function($){




$(document).ready(function(){

	var strana = 2;

	$('#more').on('click', function(){
		load_more_posts(strana);
		strana++;
	})



});



function load_more_posts(strana){
	jQuery.ajax({
     	  type: 'POST',
          url: window.location.protocol + "//" + window.location.host + "/1014_web_pro/temiranje/" + "wp-admin/admin-ajax.php",
          data:{
               'action':'do_ajax',
               'fn':'load_more_posts',
               'str': strana
               },
          beforeSend:function(xhr){
            $('body').append('<div class="ajaxloader"></div>');
 
          }, 
          /*dataType: 'JSON', */
          success:function(data){  
          var result = jQuery.parseJSON(data);

          console.log(result);        
          // console.log(result);
          $('section.content').append(result);
          $('.ajaxloader').remove();
         

  		
          },
          error: function(errorThrown){
               console.log(errorThrown);
          }
 
     });
}


})(jQuery);