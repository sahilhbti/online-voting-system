<!DOCTYPE html>
<html>
<head>
	<title>BHARAT ONLINE VOTING</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script >
	var app = angular.module("header" ,["ngRoute"]);
app.controller("head",function($scope)
	{
		$scope.head = "BHARAT LOK SABHA ELECTION 2018";
		$scope.image1 = "1.jpg"

	});
app.config(function($routeProvider) {
    $routeProvider
    .when("/home", {
        templateUrl : "home.html"
    })
    .when("/cand", {
        templateUrl : "cand.html"
    })
    .when("/vote", {
        templateUrl : "vote.html"
    })
    .when("/curr", {
        templateUrl : "curr.html"
    });
});

</script>
</head>
<script type></script>
<body>
         <div ng-app = "header" ng-controller = "head" class="container-fluid" style="background-image: url(2.jpg);padding-top: 0.5vw;padding-bottom: 0.5vw;">
         	<div class="row">
         		<div class="col-sm-2">
         			<img ng-src="{{image1}}" class="img-responsive">
         		</div>
                <div class="col-sm-8">
         			 <h1 class="text-center" style="">	{{head}}  </h1>
         		</div>
         		<div class="col-sm-2">
         			 <h5 class="text-center"><b>HELPLINE NUMBER</b></h5>
         			 <h5 class="text-center"><b>+132454323</b></h5>
                     <h5 class="text-center"><b>+234562345</b></h5>
         		</div> 	
             </div>
          </div>
          <div class="container-fluid" style="margin-top: 0.5vw;">
          <nav class="navbar navbar-inverse">
  <div class="container">
   <ul class="nav navbar-nav" style=" width: 100%;
    text-align: center;" >
      <li class="active" style="float: none;
      display: inline-block;"><a href="#/home"><h4>Home</h4></a></li> 
      <li style="float: none;
      display: inline-block;"> <a href="#/cand"><h4>Candidates</h4></a></li>
      <li style="float: none;
      display: inline-block;"><a href="#/vote"><h4>Vote</h4> </a></li>
      <li style="float: none;
      display: inline-block;"><a href="#!curr "><h4>Current Result</h4></a></li>
    </ul>
  </div>
</nav>
<div ng-view></div>
</div>

</body>
</html>