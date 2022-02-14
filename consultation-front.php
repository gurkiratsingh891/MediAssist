
<?php
include_once("session.php");


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Consultation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-1.9.1.js" ></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
      
      
         function showpreview(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#prev').attr('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }
      
      
      
      
      </script>
      
      
      
      <style type="text/css">
      
       
      #header
        {
            height: 50px;
            background-color: lightgreen;
        }
       
                 #footer
        {
            height: 50px;
            background-color: lightgreen;
             font-size: 15px;
        
            padding-top: 15px;
        }
        #heading
        {
            height: 50px;
            background-color: lightgreen;
            border-radius: 50px;
            
        }
          #site-pic
          {
              height: 200px;
          }
      
      
      
      
      </style>
    </head>
    <body>
        
        <?php include_once("commonuser.php") ?>
       <br>
       <br>
       
       
        
            <br>
            
           <div class="container bg-white">
            
            <div class="row" id="heading"><div class="col-md-12"><center><h2>Consultation Form</h2></center></div></div>
            <div class="row bg-white" style="height: 50px"></div>
            <div class="col-md-10 " id="consultation-form">     
              <form action="consultation-process.php" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="pid" class="col-sm-2 col-form-label">PID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pid" name="pid" value="<?php echo $_SESSION["uid"];?>" placeholder="<?php echo $_SESSION["uid"];?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="doctor" class="col-sm-2 col-form-label">Doctor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="doctor" name="doctor" placeholder="Doctor name">
    </div>
  </div>
  <div class="form-group row">
    <label for="cdate" class="col-sm-2 col-form-label">Consulation-Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="cdate" name="cdate" placeholder="Select date">
    </div>
  </div>
   <div class="form-group row">
       <label for="instructions" class="col-sm-2 col-form-label">Instructions By Doctor</label>
    <div class="col-sm-10"><textarea  rows="5" cols="80" name="instructions" id="instructions"></textarea>
       </div></div>
  <div class="form-group row">
    <label for="nextAppointment" class="col-sm-2 col-form-label">Next-Appointment-Date</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" id="nextAppointment" name="nextAppointment" placeholder="Select date">
    </div>
                  </div>
  <div class="form-group">
  <label for="pic" class="col-sm-2 col-form-label" >Consulation Slip Pic</label>
   <input type="file" class="col-sm-6" onchange="showpreview(this)" id="pic" name="pic">
    <br>
     <img width="170" height="190" id="prev">
      </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" id="save" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

            </div>
        </div>
        
      <div class="" id="footer">
		&nbsp; 		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

				</div>
    </body>
</html>
    
   