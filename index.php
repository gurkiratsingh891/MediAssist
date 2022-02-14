<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="1014223462520-jlt6ji4aj2tj7ug8i0vko96lpj0n4h6f.apps.googleusercontent.com">
    <title>Main</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script type="text/javascript">

   


        $(document).ready(function(){
           
             $(document).ajaxStart(function(){
                $("#waitt").show();
            });
            
            $(document).ajaxStop(function(){
                $("#waitt").hide();
            });
            
            
            
            
             $("#signup").click(function(){
                
                 $qs2=$("#signup-form").serialize();
                $url="ajax-signup-process.php?"+$qs2;
               // alert($url);
                $.get($url,function(response)
                      {
                        //alert(response);
                    $("#result-signup").html(response);
                    });
             });
                 
                 
                  $("#login").click(function(){
                $qs2=$("#login-form").serialize();
                //alert($qs2);
                $url="ajax-login-process.php?"+$qs2;
               // alert($url);
                $.get($url,function(response)
                      {
                     //   alert(response);
                    if(response=="login patient")
                        location.href="patient-dashboard.php";
                    else if(response=="login doctor")
                     location.href="doctor-profile-front.php";
                    else
                    $("#result-login").html(response);
                    });
            
                  });
            
              
            $("#suid").blur(function(){
                
                $uid=$("#suid").val();
                $.get("ajax-check-uid.php?uid="+$uid,function(data,status)
                      {
                    //alert(data);
                        $("#res").html(data);
                });
            });
              $("#forgot").click(function(){
                //  alert();
                $uid=$("#luid").val();
                 //alert($uid);
                $.get("ajax-recover-password.php?uid="+$uid,function(response)
                      {
                       // alert(response);
                                        $("#result-login").html(response);

                });
            });
            
            
        });
        
        
        

    </script>
    <style>
        #waitt {
            display: none;
        }
        #abc
        {
            font-size: 30px;
            margin-top: 30px;
            
        }
        #logo-main
        {
            padding-top: 5px;
        }
           #subheader
        {
            background-color: lightgreen;
            padding-top: 5px;
            border-radius: 50px;
        }
            #subt
        {
            background-color: lightgreen;
          padding-bottom: 1px;
            padding-top: 5px;
            border-radius: 50px;
        }

         .card-pic
        {
         height: 150px;
            width: 150px;
        }  
        .card-pic-me
        {
         height: 200px;
            width: 200px;
        }
        
        #footer
        {
            height: 50px;
            background-color: lightgreen;
             font-size: 15px;
        
            padding-top: 13px;
        }
         
        #main
        {
            height: auto;
            border: 2px green solid;
            border-radius: 50px;
            
        }
        .card1
        {
            border: none;
            text-align: center;
            transition: ease all 1s;

        }
        .card
        {
            border: none;
            text-align: center;
        }
        
        
        .card1:hover
        {
            background-color: lightgreen;
            
            transform: scale(1.02);
            transition: ease all 2s;
            
        }
        .fb-page,
.fb-page span,
.fb-page span iframe[style] {
    max-width: 100% !important;
}

    </style>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
       <!-- Image and text -->
 
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" id="logo-main">
  <img src="pics/medical-16-512.png" width="45" height="45" class="d-inline-block " alt=""><span id="abc">
      MediAssist</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
    <form class="form-inline my-2 my-lg-0 col-md-6 offset-md-0 ">
            <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="#about-us">About Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#reach-us">Reach Us</a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link" href="Doctor-search-front.php">Search Doctors</a>
      </li>
    </ul>
           
    </form>
     <form class="form-inline my-2 my-lg-0 ml-5 col-md-6 ">
      <button class="btn btn-outline-success offset-md-4  my-2 my-sm-0" type="button" data-toggle="modal" data-target="#signup-modal">Signup</button>

      <button class="btn btn-outline-success  my-2 my-sm-0 ml-3 mr-5" type="button" data-toggle="modal" data-target="#login-modal">Login</button>
      </form>
  </div>
</nav>
    
    <br><br>
    
<br>
<div class="row"><div class="col-sm-12">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active bg-info">
      <img class="d-block w-100" src="pics/d2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pics/d3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pics/d4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div></div></div>

<br>
<br>

<div class="container">
    
     <div class="row" style="" >
         <div class="col-md-12" id="subheader"><center><h3>Our Services</h3></center>
             </div></div>
             <br>
             <br>
             
             
     <div class="row p-4 bg-white" id="main">
          <div class="row" style="height: 70px"></div>
               <div class="row  bg-transparent">
                <div class="col-md-4">
                <div class="card my-transparent card1" data-toggle="modal" data-target="#bp-record-modal">
                    <center> <img class="card-img-top card-pic " src="pics/bp-rec.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title ">Record BP</h5>
                        <p class="card-text">You can record your BP here in a very convenient way</p>
                    </div>
                </div>
               </div>
            <div class="col-md-4">
                <div class="card my-transparent card1" style=" margin: auto"  data-toggle="modal" data-target="#sugar-record-modal">
                    <center><img class="card-img-top card-pic" src="pics/FASTING_BLOOD_SUGAR-512.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title">Record Sugar</h5>
                        <p class="card-text">You can record your BP here in a very convenient way</p>
                    </div>
                </div>
            </div>
              <div class="col-md-4">
              <div class="card my-transparent card1">
                    <center>    <img class="card-img-top card-pic " src="pics/sugg.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title">Chart and Graphs</h5>
                        <p class="card-text">Your BP and Sugar record will be depicted in the form of charts and graphs</p>
                        
                    </div>
                   </div> 
            </div>
         
        </div>
  <br>
         
   
    
         <div class="row mt-5" >
            <div class="col-md-4">
             <div class="card my-transparent card1">
                <center> <img class="card-img-top card-pic" src="pics/consu.png" alt="Card image cap">
                    </center>       <div class="card-body">
                        <h5 class="card-title">Doctor Consultations</h5>
                        <p class="card-text">Record your consultations with doctors along with consultation pic
                    </div>
                   </div>
            </div>
            <div class="col-md-4">
                <div class="card my-transparent card1">
                    <center><img class="card-img-top card-pic" src="pics/schedu.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title">Appointment Schedule</h5>
                        <p class="card-text">Get details about your scheduled appointments</p>
                       
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="card my-transparent card1">
                    <center><img class="card-img-top card-pic" src="pics/Doctor_Search-512.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title">Search Doctors</h5>
                        <p class="card-text">Search for doctors in your area </p>
                     
                    </div>
                </div>
            </div>
           
        </div>
    <br id="about-us">
    
    
    
    
    
    
    </div>
    <br>
    <br><br>
    <div class="row" style="" >
        <div class="col-md-12" id="subheader"><center><h3>About Us</h3></center>
             </div></div>
             <br><br>
             <br>
             
             <div class="row">
                  <div class="col-md-6 col-sm-12 ">
                   <div class="col-md-8 offset-md-2 col-sm-12 text-md-center" id="subt"><center><h4>Designed & Developed by </h4>
                       </center></div><br><br>
                <div class="card my-transparent">
                    <center><img class="card-img-top card-pic-me rounded-circle" src="pics/123.jpg" alt="Card image cap"></center>
                    <div class="card-body">
                        <h4 class="card-title">Gurkirat Singh</h4>
                        <p class="card-text">Thapar Institute of Engineering & Technology<br>B.E. (Computer)<br>Third Year</p>
                       
                    </div>
                </div>
            </div>
                 <div class="col-md-6 col-sm-12">
                     <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0 text-md-center" id="subt"><center><h4>Under the guidance of :</h4></center>

             
                   </div>
                   <br><br>
                <div class="card my-transparent">
                    <center><img class="card-img-top card-pic-me rounded-circle" src="pics/Rajesh%20sir.jpg" alt="Card image cap"></center>
                    <div class="card-body">
                        <h4 class="card-title"><center>Mr. Rajesh K. Bansal</center></h4>
                        <p class="card-text" id="reach-us">
                        Founder & Director of	Banglore Computer Education<br>
Training Head at	Sun-Soft Technologies<br>
Author Of Book	Real Java</p>
                       
                    </div>
                </div>
            </div>
                 
                 
             </div>
             
             <br>
             <br>
             <div class="row" style="" >
                 <div class="col-md-12" id="subheader"><center><h3>Reach Us</h3></center>
             </div></div>
             <br>
             <br><br>
             <div class="row">
                 <div class="col-sm-6">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.883512506422!2d74.95000951422635!3d30.211871981821673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a4f014b8f7%3A0x7fa736d540603db!2sSun-Soft+Technologies+(+Android+Java+PHP+Angular+)!5e0!3m2!1sen!2sin!4v1531493467554" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                 </div>
                 <div class="col-sm-6">
                     <br>
                     <br>
                     <center> <h5>Connect with us on Facebook</h5><br>
                     <div class="fb-page" data-href="https://www.facebook.com/MediAssistForU/?modal=admin_todo_tour" data-width="555" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MediAssistForU/?modal=admin_todo_tour" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MediAssistForU/?modal=admin_todo_tour">MediAssist</a></blockquote></div>   </center>
                
                 </div>
             </div>
</div>
<br>
<br>



<br>
<br>

    <!--- <div class="callout-block text-center fade-in-b well" id="footer">
					 <a href="http://www.sun-softtech.com/" target="_blank">Sun-Soft Technolgies</a> All Rights Reserved
                    <br>Design &amp; Developed By: Gurkirat Singh<br>
                    Under the guidance of: Mr. Rajesh Bansal

				</div>--->
				
    <div class="" id="footer">
		&nbsp; &nbsp;		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

				</div>



    <div class="modal fade" tabindex="-1" role="dialog" id="signup-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title">Signup</h5><img id="waitt" src="pics/loading9.gif">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form action="ajax-signup-process.php" id="signup-form">
                        <div class="form-group">
                            <label for="formGroupExampleInput">User id</label><span class="text-danger" id="res">*</span>
                            <input type="text" class="form-control" id="suid" name="suid" required placeholder="User id">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label>
                            <input type="text" class="form-control" id="spwd" name="spwd" required placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Mobile</label>
                            <input type="text" class="form-control" id="smobile" name="smobile" placeholder="mobile">
                        </div>
                        <div>
                            <input type="radio" name="usertype" value="patient">Patient
                            <input type="radio" class="ml-4" name="usertype" value="doctor">Doctor
                        </div>
                        <center><span id="result-signup" class="text-primary"></span></center>

                    </form>

                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn bg-white" id="signup" name="signup" value="signup">Signup</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
 <div class="modal fade" tabindex="-1" role="dialog" id="login-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">Login</h5><img id="waitt" src="pics/loading9.gif">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form action="main-process.php" id="login-form">
                        <div class="form-group">
                            <label for="formGroupExampleInput">User id</label><span class="text-danger" id="res">*</span>
                            <input type="text" class="form-control" id="luid" name="luid" placeholder="User id">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label>
                            <input type="text" class="form-control" id="lpwd" name="lpwd" placeholder="Password">
                        </div>
                    
                         <div class="nav-item">
                            <a class="nav-link" id="forgot" href="#">Forgot Password</a>
                        </div>
                        <center><span id="result-login" class="text-primary"></span></center>

                    </form>

                </div>
                <div class="modal-footer bg-success">
                    <button type="button" class="btn bg-white" id="login" name="login" value="login">Login</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>








</body>

</html>
