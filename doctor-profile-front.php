<?php
include_once("session.php");


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Main</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTnx-w07axRunq73HzVFuDrrECrQ4duhU&libraries=places&callback=initAutocomplete"
         async defer></script>
    <script type="text/javascript">
        
        
         $(document).ready(function(){
         $("#doctor-profile-search").click(function(){
               $.getJSON("json-fetch-doctor-profile.php",function(jsonArray){
                 //alert(JSON.stringify(jsonArray));
                    
                    for(i=0;i<jsonArray.length;i++)
                        {
                          // alert(jsonArray[i]);
                            $("#name").val(jsonArray[i].name);                           
                            $("#qual").val(jsonArray[i].qual);  
                            $("#special").val(jsonArray[i].special);  
                            $("#exp").val(jsonArray[i].exp);  
                            $("#city").val(jsonArray[i].city);  
                            $("#mobile").val(jsonArray[i].mobile);  
                            $("#details").val(jsonArray[i].details);  
                            $("#pac-input").val(jsonArray[i].hname);  
                             $('#prev').attr('src', jsonArray[0].pic);
                        $("#hdn").val(jsonArray[0].pic);
                       /*       var myCenter = new google.maps.LatLng(jsonArray[0].lat,jsonArray[0].long);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 13};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
                            var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);*/

                        }
                });
             });
        
        
         });
        
        
           function showpreview(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#prev').attr('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }
     function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 30.2110, lng: 74.9455},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
           
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();
 
          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
              document.getElementById('lat').value=place.geometry.location.lat();
              document.getElementById('lon').value=place.geometry.location.lng();

            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
                
               
            }));
              

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
           
             
        });
          


      }
    </script>
    
    
    <style>
    #pic1
        {
            height: 250px;
            
        }
          #heading
        {
            height: 50px;
            background-color: lightgreen;
            border-radius: 50px;
            
        }
       
        #main
        {
            height: auto;
            background-color: white;
        }          #footer
        {
            height: 50px;
            background-color: lightgreen;
             font-size: 15px;
        
            padding-top: 15px;
        }
        
         #map {
        height: 400px;
             width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 50%;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
    
    </style>
    </head>
    <body>
        <?php include_once("commonuser.php") ?>
       <br>
       <br>
         <br>
         <br>
         <br>
       <div class="container">
                   <div class="row" style="" id="heading"><div class="col-md-12" ><center><h2>Profile</h2></center></div></div>

                   
                   
              <form action="doctor-profile-process.php" method="post" enctype="multipart/form-data">
  <div class="row">
  <div class="col-md-9">
   <br>
   <br>
   <div class="form-group row">
    <label for="uid" class="col-md-2 col-form-label">UID</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="uid" name="uid" readonly placeholder="<?php echo $_SESSION["uid"];  ?>">
    </div>
  </div>
  <input type="hidden" id="hdn" name="hdn">
  <div class="form-group row">
    <label for="name" class="col-md-2 col-form-label">Name</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
  </div>
            <div class="form-group row">
    <label for="qual" class="col-md-2 col-form-label">Qualification</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="qual" name="qual">
    </div>
  </div>
            <div class="form-group row">
    <label for="special" class="col-md-2 col-form-label">Specialisation</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="special" name="special">
    </div>
  </div>
       
      </div>
           <div class="col-md-3" style="margin-top: 50px;">
           <div class="form-group">
  <label for="pic">Profile Pic</label>
   <img width="170" height="190" id="prev">
   <input type="file"  id="pic" name="pic" onchange="showpreview(this)" style="margin-top: 10px;">
    <br>
    
      </div>
            
        
      </div>
        
        </div>    
   
        
    <div class="form-group row">
      <label class="col-md-2 col-form-label" for="exp">Experience</label>
        <div class="col-md-7"><input type="text" name="exp" class="form-control" id="exp"></div>
    </div>
    
     <input id="pac-input" class="controls" name="hname" type="text" placeholder="Enter hospital name">
     <div class="row">
           <label class="col-md-2  col-form-label" for="map">Hospital Location</label>

         <div id="map" class="col-md-6 "></div>
                  </div>    
                  <br>
                   <div class="form-group row">
      <label class="col-md-2 col-form-label" for="city">City</label>
        <div class="col-md-7"><input type="text" name="city" class="form-control" id="city"></div>
    </div>
    <div class="form-group row">
      <label class="col-md-2 col-form-label" for="mobile">Mobile</label>
        <div class="col-md-7 "><input type="text" class="form-control" name="mobile" id="mobile"></div>
    </div>
    <br>
    <br>
      
            
             <div class="form-group row">
    <label class="col-md-2" for="deatails">Other details</label>
    <textarea class="form-control col-md-7" name="details" id="details" rows="3"></textarea>
  </div>
            <br>
            <br>
           <input  id="lat" type="hidden" name="lat">
            <input  id="lon" type="hidden" name="lon">
   
             
              <div class="form-group row">
              <div class="col-md-3"></div>
    <div class="col-md-1">
      <button type="submit" id="save" name="btn" value="save" class="btn btn-primary">Save</button>
    </div>
    <div class="col-md-1">
      <button type="submit" id="update" name="btn" value="update" class="btn btn-primary">Update</button></div>
       <div class="col-md-2">
           <button type="button" id="doctor-profile-search" name="doctor-profile-search" value="search" class="btn btn-primary">Fetch</button></div>
    
  </div>
            <br>
            <br>
             
      </form>  
             
             
        </div>  
        
        
        
         
      <div class="" id="footer">
		&nbsp; 		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

				</div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>