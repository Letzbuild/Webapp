<?php
if (empty($_GET['category'])) {$category='';} else {$category=$_GET["category"]; }
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
//if (empty($_GET['pagecount'])) {$pagecount='';} else {$pagecount=$_GET["pagecount"]; }
$showsearch="false";
$pagetab="product";
$submitlink=urlencode($subcategory);
$mycategory=urlencode($category);
//$totalitemscount=urlencode($pagecount);
include('includes/sitevariables.php');
$myserverlink="http://$serverlink/products/categories/".$category."? ";

include('includes/sitevariables.php');

?>

<!DOCTYPE html>
<html ng-app="master-app">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LetzBuild</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/angular.min.js"></script>
	<script src="js/ui-bootstrap.js"></script>
	
	<script type="text/javaScript">
		var productname=""
	</script>
	<script type="text/javaScript">
		var myserverlink=<?php echo("'".$myserverlink."'") ?>
	</script>
	<script src="js/pagination-application.js"></script>
	

    
</head>
<body >

<?php include('top.php')?>
<div class="container">
 
	<?php include('leftcolumn.php') ?>
	
	<div class="col-sm-10 ">
		<h4 class="pageheader"><span class="fa fa-database fa-breadcrumb" ></span>Products <span class="fa fa-book fa-exchange" ></span> <span class="fa fa-user fa-breadcrumb"></span>Suppliers</h4>
		<div class="breadcrumb-panel"><a href="index.php">Home</a> <span class="fa fa-long-arrow-right fa-breadcrumb"></span> <?php echo($category) ?> </div>
		<hr class="hr-header">
	
	
		<div ng-controller="master-control" data-ng-init="setPage(bigCurrentPage)" >
			<pagination total-items="bigTotalItems"  ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm pagination-header" boundary-links="true" rotate="false" num-pages="numPages" items-per-page="itemsperpage" ng-click="setPage(bigCurrentPage)"></pagination>
			<h4 class="pageheader product-header" ><span class="fa fa-database fa-breadcrumb" ></span>Subcategory Under <?php echo($category) ?></h4><div class="hr-header"></div>
			<?php include('pageloader.php') ?>
			
					<div  ng:repeat="items in returnedlist.result"  ng-show="dataLoaded" >
							
						
							
							
								<div class="col-sm-3 padding-left-zero">
								<div class="panel panel-default">
								<div class="panel-body-category" >
									<a  href="products.php?subcategory={{items.category | encodeURIComponent }}&pagecount={{items.cnt | encodeURIComponent }}&category=<?php echo(urlencode($category)) ?>">{{items.category}}</a><span class="badge pull-right">{{items.cnt}}</span>
								</div>
								<div class="panel-body panel-body-category">
									<a  href="products.php?subcategory={{items.category | encodeURIComponent }}&pagecount={{items.cnt | encodeURIComponent }}&category=<?php echo(urlencode($category)) ?>">
										<img  ng-src="images/productimages/{{subcategorydisp.url}}" err-SRC="images/productimages/noimage.jpg" class="pagination-header img-responsive"/>
									</a>
								</div>
								</div>
								</div>
							
					</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
</body>
</html>
