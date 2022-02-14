<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-1.9.1.js"></script>
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
        
        
        
            var myapp = angular.module("app", []);
        myapp.controller("mycontroller", function($scope, $http) { 
            
                   $scope.json;
            $scope.doFetchJson = function() {
               // alert();
                $http.get("angular-json-fetch-doctors.php").then(shanti, noshanti);
                    
                function shanti(jsonArray) {
                  //  alert(JSON.stringify(jsonArray.data));
                    $scope.json = jsonArray.data;
                    
                }

                function noshanti(jsonArray) {
                    alert(jsonArray.data);
                }

            }      
            
            
        });
        
        
        
    </script>
    <style>
             #header
        {
            height: 50px;
            padding-top: 5px;
            background-color: lightgreen;
        } 
        #footer
        {
            height: 50px;
            background-color: lightgreen;
             font-size: 15px;
        
            padding-top: 15px;
        }
           .card
        {
           border: none;
            text-align: center;

        }
        #doc
        {
            min-height: 345px;
        }
        .card-pic
        {
         height: 250px;
            width: 250px;
        }
    
    </style>
    </head>
    
   <body ng-app="app" ng-controller="mycontroller">
     <div class="row">
         <div class="col-md-12" id="header"><center><h3>Search Doctors</h3></center>
             </div></div>
             <br>
             <br>
  <center>    <input type="button" class="btn-success" ng-click="doFetchJson();" value="View all doctors"><br><br><br>
      Search by name:&nbsp;<input type="text" ng-model="hint.name"></center>
   
       <div class="container">
    <div class="row" id="doc">
    
        <div class="col-md-3" ng-repeat="record in json| filter:hint">
        <br>
        <br>
        <div class="card" >
            <img class="card-img-top card-pic" src="{{record.pic}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{record.name}}</h5>
                <div class="card-text">
                    <p>{{record.qual}}<br>
                   Specialization: {{record.special}}<br>
                    Experience:&nbsp;{{record.exp}}&nbsp;years <br>
                    {{record.hname}}<br>
                    {{record.mobile}}</p>
                </div>
            </div>
        </div>
       </div>
    </div>

</div>
       
       
       
       
       
  
   
    
     
      
       
        
         
          
           
            
             
              
               
                
              <div class="row" id="footer">
              <div class="col-md-12">
		&nbsp;&nbsp;&nbsp;&nbsp; 		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

                  </div>         </div>
                  
                   

  
    </body>
   
  
 
</html>