jQuery(document).ready( function() {//changing title and description post
   jQuery("#ja").click(function(){//when you click on this button where is id=ja, do this function  
    var forwhat = jQuery("#id").val();//inherit value ​​from the form
    var title = jQuery("#name").val();
    var desc = jQuery("#message").val();
    
    var data = { action:'send_my_mail', forwhat:forwhat, title:title, desc:desc };//calling send_my_mail function
    //ajax
    jQuery.ajax({
        type:'post',
        url:myAjax.ajaxurl,
        data:data,
        dataType:"json",

        //if all previously succeeded, this function will be performed
        success: function(data){
          if(data.responseText === 'ok') {
            alert('uspesno');
          }
        },
        //if not, this function will be performed 
        error: function(data){
          console.log(data)
        }
      });
  });
});

  
jQuery(document).ready( function() {
  jQuery("#ti").click(function(){
    var forwhat = jQuery("#id").val();
    var data = { action:'deletePost', forwhat:forwhat };
    jQuery.ajax({
        type:'post',
        url:myAjax.ajaxurl,
        data:data,
        dataType:"json",
        success: function(result){
          //if result is 'nije lose' remove post
          if( result == 'nije lose' ) {
            data.fadeOut( function(){
                data.remove();
              });
          }
       }
      });
      return false;
   });
});

jQuery(document).ready( function() {
jQuery("#button2").click(function(){
   var title = jQuery("#address").val();
   var desc = jQuery("#real").val();

   var data1 = { action:'send',title:title, desc:desc };
   jQuery.ajax({
       type:'post',
       url:myAjax.ajaxurl,
       data:data1,
       dataType:"json",
       success: function(data1){
         //if data1 reponse text is 'okej' , add post to dashboard
         if(data1.responseText === 'okej') {
              alert('Uspelo je!');
         }
       },
       error: function(data1){
         console.log(data1)
         }
      });
    });
});

jQuery(document).ready( function() {
  jQuery("#pretraga").click(function(){
     var gsearch = jQuery("#gsearch").val();
     var data = { action:'search',gsearch:gsearch };
     jQuery.ajax({
         type:'post',
         url:myAjax.ajaxurl,
         data:data,
         success: function(data){          
          jQuery('#datafetch').html( data ); //write this html code
      },
      error: function() {
        alert("FAILED TO POST DATA!!");
         }    
      });
   });
});
