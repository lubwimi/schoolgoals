$(function() {
   
   $.get('dashboard/xhrGetlistings', function(o) {
      
      for(var i = 0; i < o.length; i++) {
         $('#listInserts').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'" href="#">&nbsp;delete</a></div>'); // + means concatenation (sammanlänkning)
      }
      
      //$('.del').live('click', function() {
      $('body').on('click', '.del', function() { //.del means class del. body means parent.
       delItem = $(this);
        var id = $(this).attr('rel');
        $.post('dashboard/xhrDeleteListing', {'id': id}, function(o) { // function(o) is a callback function; {'id': id} is a json object and 'id' is the key
            delItem.parent().remove();
        }, 'json');
        
        return false; // false because we don't want to show that in url
      });
      
   }, 'json'); // json means javascript notation
   
   
   $('#randomInsert').submit(function() {
      var url = $(this).attr('action');
      var data = $(this).serialize();
      
      $.post(url, data, function(o) { // function(o) is a callback function
         $('#listInserts').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'" href="#">&nbsp;delete</a></div>');  // o.text is a json format    
      }, 'json');
      
      
      return false;
   });
   
});