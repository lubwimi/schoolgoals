$(function() {
   
   $('#randomInsert').submit(function() {
      var url = $(this).attr('action');
      var data = $(this).serialize();
      console.log(data);
      
      $.post(url, data, function(o) {
         
         alert(1);
         
      });
      
      return false;
   });
    
});