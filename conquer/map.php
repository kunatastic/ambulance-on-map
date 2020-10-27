<!DOCTYPE html>
<html>
   
   <head>
      <script src = "https://maps.googleapis.com/maps/api/js"></script>
      
      <script>
          

          function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            lati =  position.coords.latitude;
            long =  position.coords.longitude;
            alert(lati+" "+long);

            loadMap();
        }

         function loadMap() {
            var mapOptions = {
               center:new google.maps.LatLng(lati, long),
               zoom:15
            }
				
            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
            
            var marker = new google.maps.Marker({
               position: new google.maps.LatLng(lati, long),
               map: map,
               animation:google.maps.Animation.Drop
            });
         }
      </script>
        


        
   </head>
   
   <body onload = "getLocation()">
      <div id = "sample" style = "width:800px; height:600px;"></div>
   </body>
   
</html>