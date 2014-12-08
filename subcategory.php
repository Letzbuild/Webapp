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

<!-- date picker scripts -->

  
  
<!-- date picker ends -->


<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	 $http.get("http://localhost:4567/products/retrieve?cat=<?php echo ($submitlink) ?>&limit=10&page=1") 
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


var app1 = angular.module('MyApp1', []);
app.filter('encodeURIComponent', function() {
    return window.encodeURIComponent;
});



	
$('datepicker').datetimepicker({

        pickTime: false

  }).on('changeDate', function (e) {

        $(this).datetimepicker('hide');

  });



</script>
<script>
    $(document).ready(function(){

        $('[data-toggle="popover"]').popover();   

    });

</script>
<!-- angular scripts ends-->

</head>

<body>

<?php include('top.php') ?>
<div class="container">
   
    <ul class="breadcrumb"><span class="maincontentheading">You are here:</span> 
    	<li><a href="index.php">Sub Category</a></li>
        <li class="active maincontentheadinginner">Product List - <strong>( <?php echo ($subcategory) ?> )</strong>
        
	 </ul> <div class="row" > 
     <!-- pagination -->
  
  <!-- pagination ends -->
	<?php include('sidel-col2topl-search.php') ?>
	<div ng-app1="MyApp1">
      <div  ng-app="MyApp" ng-controller="subcategory">
        <div  ng:repeat="subcategorydisp in subcategorylist">
          <div class="col-sm-4">
     		
          	 	<div class="thumbnail">
                    
                    <img ng-src="images/products/{{subcategorydisp.code}}.jpg" err-SRC="images/products/noimage.jpg" />
                    
                    <div class="caption">
                        <h3>{{subcategorydisp.name}}</h3>
                        <p>Code: <strong>{{subcategorydisp.code}}</strong></p>
                      
                            <!-- view details and send enquiry button as includes -->
                 			<?php include('viewproductdetails-m.php') ?>           
                            <?php include('sendenquiryproduct-m.php') ?>   
                            <!-- view details and send enquiry button as includes ends-->   
                              
                              
                              
                              
                              
                    </div>
               </div>
       
         </div>
       </div>
     </div>
     </div><!--myapp1 ends -->
     </div> <!-- this div ends the column sm 9 from the include file side-col2... -->
  </div>
</div>

<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
