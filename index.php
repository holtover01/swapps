<!DOCTYPE html>
<html>
 <head>
  <script src="https://spiceworks.github.io/spiceworks-js-sdk/dist/spiceworks-sdk.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
  <script type="text/javascript">
   $(document).ready(function(){
     var card = new SW.Card();
     var inventory = card.services('inventory');
     inventory.request('devices').then(function(data){
       $.each(data.devices, function(index, device){
         $('body').append('<p>' + device.name);
       });
     });
   });
  </script>
 </head>
 <body>
  <h3>Hello worl222d!</h3>
 </body>
</html>