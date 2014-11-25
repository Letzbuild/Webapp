<?php
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LetzBuild</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/main.css">
<link href="css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.0.js"></script>
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	 $http.get("http://localhost:4567/products/retrieve?cat=<?php echo($subcategory) ?>&limit=10&page=1") 
	.success(function(response) {$scope.subcategorylist = response;});
}

angular.module('ui.bootstrap.demo', ['ui.bootstrap']);
angular.module('ui.bootstrap.demo').controller('subcategory', function ($scope) {
  $scope.dynamicPopover = 'Hello, World!';
  $scope.dynamicPopoverTitle = 'Title';
});

</script>
<!-- angular scripts ends-->
</head>

<body>
<?php include('top.php') ?>
<hr>
<div class="container">
  <div class="row" style="padding-top:15px"> 

	<?php include('sidel-col2topl-search.php') ?>

      <div  ng-app="" ng-controller="subcategory">

     

                        <div class="form-group">
      
<br><br><br>
      <button popover="I appeared on mouse enter!" popover-trigger="mouseenter" class="btn btn-default">Mouseenter</button>

  
</div>
                       
                   
              
         </div>

      
      
      <!-- angular catergory and subcategory display ends --> 
      
    </div>
</div>
<hr>

<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
