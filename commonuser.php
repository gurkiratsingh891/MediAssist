
         
         
         <style>

.btnset
             {
                 padding-top: 6px;
             }
             .titl
             {
                 padding-top: 6px;
             }
             .mybtn
             {
                 font-size: 18px;
                                  background-color: white;
                 color: green; 
                 padding-top: 3px;

             }  
       #header
        {
            background-color: lightgreen;
        }



</style>
         
                   <nav class="row navbar fixed-top navbar-expand-lg " id="header">
<div class="col-md-10 col-sm-2  titl  ml-0"><h3  >Welcome &nbsp;<?php echo $_SESSION["uid"];  ?></h3></div>
       <button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <div class="col-md-2 col-sm-2    btnset"> 
            <form action="logout.php" >
           <button type="submit" class="btn btn-secondary" style="" name="logout" value="logout">Logout</button>
           </form>
      </div></div></nav>