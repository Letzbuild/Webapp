<?php
if (empty($_GET['pcode'])) {$pcode='';} else {$pcode=$_GET["pcode"]; }
if (empty($_GET['pname'])) {$pname='';} else {$pname=$_GET["pname"]; }
if (empty($_GET['frompage'])) {$frompage='';} else {$frompage=$_GET["frompage"]; }
$showsearch="false";
if($frompage=='products'){$pagetab="product";}
if($frompage=='suppliers'){$pagetab="suppliers";}

$submitlink=urlencode($pcode);
//echo $submitlink;
?>
<?php include('includes/sitevariables.php') ?>

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
<script src="js/myscript.js"></script>



<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>

<script>
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	 $http.get("http://<?php echo($serverlink) ?>/suppliers/retrieve?pcode=<?php echo ($submitlink) ?>") 
	 //$http.get("supplier.json?cat=<?php echo ($submitlink) ?>&limit=10&page=1") 
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


</script>
<!-- angular scripts ends-->

</head>

<body>

<?php include('top.php') ?>
<div class="container">
  	<?php
	if($frompage=='products')
	{
	?>
		<ul class="breadcrumb"><span class="maincontentheading"></span> 
    	<li><a href="index.php">Sub Category</a></li>
        <li><a href="javascript:window.history.go(-2)">Products List</a></li>
		<li><a href="javascript:window.history.go(-1)">Products Details</a></li>
        <li class="active maincontentheadinginner">More Suppliers - <strong>( for Product: <?php echo ($pname) ?> )</strong></li>
	    </ul> 
	<?php
    }
	else
	{
	?>
    	<ul class="breadcrumb"><span class="maincontentheading"></span> 
    	<li><a href="suppliers.php">Supplier</a></li>
        <li><a href="javascript:window.history.go(-1)">Supplier List </a></li>
        <li class="active maincontentheadinginner">Product Details - <strong>( for Product: <?php echo ($pname) ?> )</strong></li>
        </ul>  
     <?php
	}
	?> 
   <div class="row" > 

	<?php include('sidel-col2topl-search.php') ?>
	<div ng-app1="MyApp1">
      <div ng-app="MyApp" ng-controller="subcategory">
        <div  ng:repeat="subcategorydisp in subcategorylist | limitTo:1">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img ng-src="images/productimages/{{subcategorydisp._id.purl}}" err-SRC="images/productimages/noimage.jpg" class="thumbnail"/>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{subcategorydisp._id.pname}}</h4>
                        <p>Code: {{subcategorydisp._id.pcode}}</p>
                    </div>
                </div>
         </div>
         
         <div class="clearfix"></div>      
          
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Suppliers List for Product <strong><?php echo ($pname) ?> </strong></h1>
                </div>
                <div class="panel-body" ng:repeat="subcategorydisp in subcategorylist"><li>{{subcategorydisp._id.sname}}<strong> ( Rating: {{subcategorydisp._id.rating}} / 5 ) </strong>
                <a href="supplierdetails.php?scode={{subcategorydisp._id.scode | encodeURIComponent  }}&sname={{subcategorydisp._id.sname | encodeURIComponent}}&frompage=products" class="btn btn-default btn-sm btn-default  buttonspacebottom pull-right">View Supplier Details</a></li></div>
                
            </div>      
                
                
            
            	

     </div><!-- controller ends -->
     </div><!-- app ends for uri encode-->
     </div> <!-- this div ends the column sm 9 from the include file side-col2... -->
  </div><!-- row clas ends -->
</div>

<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
