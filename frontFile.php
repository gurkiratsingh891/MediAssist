<html>
<head>

<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script src="js/highcharts.js"></script>

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
					shadow: true
                },
				title:{text:'Batch Details'},
				subtitle:{text:'@Banglore Comp. Edu.'},
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
					backgroundColor: 'yellow',
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
							/*,
							{
							}*/
						]
            }
			
      //     alert(city);
	 var url = "getBatchCount.php";
    $.getJSON(url,function(json)
          {
			  //alert("ok");
			  alert(JSON.stringify(json));
				
		    options.xAxis.categories = json[0]['data'];
			 options.series[0].data = json[1]['data'];
			
			/*options.xAxis.categories = json[1]['data'];
			options.series[1].data = json[1]['data'];//to show more cols
			*/
			
			options.xAxis.title.text=json[0]['technology'];
				
				options.yAxis.title.text="No. of Students";//json[1]['count'];
				
               
				options.series[0].name=json[1]['count'];
				
				/*options.series[1].name=json[1]['count'];
				*/
                
				
				//alert(json[1].data);
				
               // chart = new Highcharts.Chart(options);
			   $('#container2').highcharts(options);
				
          }); 
			
			}

    </script>
  

</head>
<body>
<img src="baby.gif"></img>

 <div id="container2" style="width:100%; height:500px;">**</div>


</body>
</html>
