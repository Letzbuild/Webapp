<?php
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
$showsearch="true";
$pagetab="product";
$submitlink=urlencode($subcategory);
?>
<?php include('includes/sitevariables.php') ?>

<!DOCTYPE html>
<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LetzBuild</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/main.css">
<link href="css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>




<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	 $http.get("http://<?php echo($serverlink) ?>/products/retrieve?cat=<?php echo ($submitlink) ?>&limit=10&page=1") 
	.success(function(response) {$scope.subcategorylist = response;});
}


    var app = angular.module("MyApp", []);
    
    app.directive('errSrc', function() {
      return {
        link: function(scope, element, attrs) {
          element.bind('error', function() {
            if (attrs.src != attrs.errSrc) {
              attrs.$set('src', attrs.errSrc);
            }
          });
        }
      }
    });




</script>
</head>

<body>


		
      <div  ng-app="MyApp" ng-controller="subcategory">
        <div  ng:repeat="subcategorydisp in subcategorylist">
			<div class="col-sm-4">
     		
          	 	<div class="thumbnail">
                    <img ng-src="images/productimages/{{subcategorydisp.code}}.jpg" err-SRC="images/productimages/noimage.jpg" />
                   
                    	

               </div>
       		</div>
        
       </div>
     </div>

<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
