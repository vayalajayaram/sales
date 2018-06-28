<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
  
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCMBubP_YMy5TYRJkvd68IILDdM8bMPVk&sensor=false&libraries=places"></script>
<script type="text/javascript">
 google.maps.event.addDomListener(window, 'load', function () {

 var options = {
            types: ['geocode'],
            componentRestrictions: {country: "IN"}
              };
      
 var places = new google.maps.places.Autocomplete(document.getElementById('txtPlaces'),options);
 google.maps.event.addListener(places, 'place_changed', function () {
   
 var place = places.getPlace();
 var address = place.formatted_address;
            });
      
 
 
   });
  
 </script>
  </head>
  <body class="res layout-subpage">
   
<div class="row city-selector">
                        <div class="col-sm-12">
                            <div class="form-group car_inputs">
                                <label>From</label>
                                <input type="text" class="form-control location empty" id="txtPlaces" name="from"  data-validation="required" placeholder="&#xf041; Enter a location" >
                            </div> 
                            <div class="form-group car_inputs">
                                <label>To</label>
                                <input type="text" class="form-control location empty" id="txtPlaces1" name="to" data-validation="required" placeholder="&#xf041; Enter a location">
                            </div>
                          
                      
                        </div>
                    </div>



  </body>
</html>