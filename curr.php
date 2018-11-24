<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Lobster" rel="stylesheet">

<style>
	@media screen and (min-width: 480px) {
    #small {
        width: 30vw;
        margin-left: 33vw;
    }
}
</style>
</head>
<body ng-app = "" class="container-fluid" >
	<h2 id = "y" style="color: red;">Click here to see result till now</h2><hr>
<div><canvas id="myChart"  ></canvas> </div>

<script>
	$('#y').click(function(){
		var canvas = document.getElementById("barChart");
var ctx = canvas.getContext('2d');
var x1 =Number($('#vot2').text());
var x2 = Number($('#vot4').text());
// Global Options:
 Chart.defaults.global.defaultFontColor = 'black';
 Chart.defaults.global.defaultFontSize = 16;

var data = {
    labels: ["People who voted percent", "People who not voted percent"],
      datasets: [
        {
            fill: true,
            backgroundColor: [
                'blue',
                'red'],
            data: [x1*100/(x1+x2), x2*100/(x1+x2)],
// Notice the borderColor 
            borderColor:    ['black', 'black'],
            borderWidth: [2,2]
        }
    ]
};

// Notice the rotation from the documentation.

var options = {
        title: {
                 
              },
        rotation: -0.7 * Math.PI
};


// Chart declaration:
var myBarChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: options
});

		$('#votebjp').attr('hidden',false);
		$('#vot1').attr('hidden',false);
		$('#vot4').attr('hidden',false);
		$('#vot3').attr('hidden',false);
		$('#vot2').attr('hidden',false);

       $('#per').attr('hidden',false);
		$('#votebjp1').attr('hidden',false);
		$('#voteinc').attr('hidden',false);
		$('#voteinc1').attr('hidden',false);
		$('#voteaap').attr('hidden',false);
		$('#voteaap1').attr('hidden',false);
		var x =  Number($('#votebjp').text());
		var y = Number($('#voteinc').text());
		var z = Number($('#voteaap').text());
        
      var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["BJP", "INC", "AAP"],
        datasets: [{
            label: 'number of Votes to each party',
            data: [x , y, z],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                
            ],
            borderWidth: 2
        }]
    },
    options: {
    	
        scales: {
        xAxes: [{
        	ticks : {
            fontSize: 20
        	},
            gridLines: {
                drawOnChartArea: false
            }
        }],
        yAxes: [{
        	ticks : {
            fontSize: 20,
            beginAtZero: true,
            callback: function(value) {if (value % 1 === 0) {return value;}}
        	},
            gridLines: {
                drawOnChartArea: false
            }
        }],
        }
    }
});
	});

</script>
  <h2 hidden id="votebjp1" style="font-family: 'Lobster';color: red;text-align: center;" >Total Number of Votes to BJP</h2><h3 hidden id="votebjp" style="font-family: 'Lobster';color: red;text-align: center;"><?php 
  $conn = new mysqli("localhost","root","","election");
  $sql =  "SELECT COUNT(*) FROM bharat WHERE party = 'Bharatiya Janata Party(BJP)'";
  $result =  $conn->query($sql);
  while($row = $result->fetch_assoc())
       {
          $haan  = $row["COUNT(*)"];
       } 
      echo $haan;
?></h3>
 <h2 hidden id="voteinc1" style="font-family: 'Lobster';color: red;text-align: center;" >Total Number of Votes to INC</h2><h3 hidden id="voteinc" style="font-family: 'Lobster';color: red;text-align: center;"><?php 
  $conn1 = new mysqli("localhost","root","","election");
  $sql1 =  "SELECT COUNT(*) FROM bharat WHERE party = 'Indian National Congress(INC)'";
  $result1 =  $conn1->query($sql1);
  while($row1 = $result1->fetch_assoc())
       {
          $haan1  = $row1["COUNT(*)"];
       } 
      echo $haan1;
?></h3>
<h2 hidden id="voteaap1" style="font-family: 'Lobster';color: red;text-align: center;">Total Number of Votes to AAP</h2><h3 hidden id="voteaap" style="font-family: 'Lobster';color: red;text-align: center;"><?php 
  $conn1 = new mysqli("localhost","root","","election");
  $sql1 =  "SELECT COUNT(*) FROM bharat WHERE party = 'Aam Aadmi Party(AAP)'";
  $result1 =  $conn1->query($sql1);
  while($row1 = $result1->fetch_assoc())
       {
          $haan1  = $row1["COUNT(*)"];
       } 
      echo $haan1;
?></h3>
<h1 id = "per" hidden style="text-align: center;font-family: 'Black Han Sans'">Voting Percentage</h1>
<div  id= "small"><canvas id="barChart" ></canvas></div>

<h2 id = "vot1" hidden style="text-align: center;font-family: 'Lobster';color: red;">Number of People voted</h2><h2 id="vot2" hidden style="text-align: center;color: red;">
	<?php 
	$conn = new mysqli("localhost","root", "" , "election");
	$sql = "SELECT COUNT(*) FROM bharat WHERE done = 'true'";
    $result =  $conn->query($sql);
  while($row = $result->fetch_assoc())
       {
          $haan  = $row["COUNT(*)"];
       } 
      echo $haan;
	 ?>
</h2>
<h2 id="vot3" hidden style="text-align: center;font-family: 'Lobster';color: red;">Number of people not voted<h2><h2 id="vot4" style="text-align: center;color: red;" hidden>
	<?php 
	$conn = new mysqli("localhost","root", "" , "election");
	$sql = "SELECT COUNT(*) FROM bharat WHERE done = 'false' ";
    $result =  $conn->query($sql);
  while($row = $result->fetch_assoc())
       {
          $haan  = $row["COUNT(*)"];
       } 
      echo $haan;
	 ?>
</h2>
</body>
</html>