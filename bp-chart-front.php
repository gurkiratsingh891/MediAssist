<?php
include_once("session.php");
?>


<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>

<title>BP-Chart</title>
  
<style>
    
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
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script src="js/highcharts.js"></script>
   <link rel="stylesheet" href="css/bootstrap.css">

    <script src="js/bootstrap.js"></script>
<!-- following .js files is for exporting chart to .pdf etc.-->
<script type="text/javascript" src="js/exporting.js"></script>

<script type="text/javascript">
fetchdata();
      function fetchdata(){
	// alert("index page function ");
          
            var options = {
                chart: {
                    
                    type: 'line',
					 height: 400,
					 width: 600,
                    marginRight: 130,
                    marginBottom: 25,
                    borderWidth: 1,
                    borderColor: 'green',
					shadow: true
                    
                },
				title:{text:'BP Chart'},
				subtitle:{text:'@MediAssist.com'},
				 xAxis: {
					 title: { text: ''},
                      categories: []
						
                },  
				yAxis: {
					   	title: {text: '' }
                	   },
				tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'center',
                    x: 10,
                    y: 100,
                    borderWidth: 0,
					backgroundColor: 'lightgreen',
			 		borderColor: '#C98657',
            		borderWidth: 3,
					borderRadius:5,
					enabled:true,
					itemHoverStyle: 
					{
                		color: '#FF0000',
					}
                },          
                series: [
							{
							}
							,
							{
							}
						]
            }
			
         // alert("city");
	 var url = "bp-chart-process.php";
    $.getJSON(url,function(json)
          {
			  //alert("ok");
			 // alert(JSON.stringify(json));
				
		    options.xAxis.categories = json[0]['data'];
			 options.series[0].data = json[1]['data'];
			
			options.xAxis.categories = json[0]['data'];
			options.series[1].data = json[2]['data'];//to show more cols
			
			
			options.xAxis.title.text=json[0]['head'];
				
				options.yAxis.title.text="BP Level";//json[1]['count'];
				
               
				options.series[0].name=json[1]['head'];
				
				options.series[1].name=json[2]['head'];
				
                
				
				//alert(json[1].data);
				
               // chart = new Highcharts.Chart(options);
			   $('#chart2').highcharts(options);
				
          }); 
			
			}

    </script>

</head>
<body>
        <?php include_once("commonuser.php") ?>
<br>
       <br>
        <br>
        <div class="container bg-white">
            <div class="row" style="" id="heading"><div class="col-md-12" ><center><h2>BP Chart</h2></center></div></div>
            
            <div class="row" style="height:50px;"></div>
<div class="row">
    <div class="col-md-12"><center><div id="chart2" style="width:100%; height:700px;"></div></center></div>
            </div>
    </div>
      <div class="" id="footer">
		&nbsp; 		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

				</div>


</body>
</html>
