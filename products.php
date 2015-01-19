<?php
if (empty($_GET['category'])) {$category='';} else {$category=$_GET["category"]; }
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
//if (empty($_GET['pagecount'])) {$pagecount='';} else {$pagecount=$_GET["pagecount"]; }
$showsearch="false";
$pagetab="product";
$submitlink=urlencode($subcategory);
$mycategory=($category);
//$totalitemscount=urlencode($pagecount);
include('includes/sitevariables.php');
$myserverlink="http://$serverlink/products/retrieve?cat=";
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
		var productname=<?php echo("'".$submitlink."'") ?>
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
		<h4 class="pageheader"><span class="fa fa-database fa-breadcrumb" ></span>Products <span class="fa fa-book fa-exchange"></span> <span class="fa fa-user fa-breadcrumb"></span>Suppliers</h4>
		<div class="breadcrumb-panel"><a href="index.php">Home</a><span class="fa fa-long-arrow-right fa-breadcrumb"></span><a href="subcategory.php?category=<?php echo ($mycategory) ?>&pagecount=''"><?php echo($mycategory) ?></a><span class="fa fa-long-arrow-right fa-breadcrumb "></span><?php echo($subcategory) ?></div>
		<hr class="hr-header">
	
	
		<div ng-controller="master-control" data-ng-init="setPage(bigCurrentPage)" >
			
			
			<pagination total-items="bigTotalItems"  ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm pagination-header" boundary-links="true" rotate="false" num-pages="numPages" items-per-page="itemsperpage" ng-click="setPage(bigCurrentPage)"></pagination>
			<h4 class="pageheader product-header" ><span class="fa fa-database fa-breadcrumb" ></span>Products Under <?php echo($subcategory) ?></h4><div class="hr-header"></div>
			<?php include('pageloader.php') ?>
			<div  ng:repeat="subcategorydisp in returnedlist.result"  ng-show="dataLoaded" >
				<div class="col-sm-3 padding-left-zero"  ng-show="dataLoaded">
					<div class="thumbnail">
						<a href="productdetails.php?pcode={{subcategorydisp.code | encodeURIComponent}}&pname={{subcategorydisp.name | encodeURIComponent}}&category=<?php echo(urlencode($mycategory)) ?>&subcategory=<?php echo(urlencode($submitlink)) ?>&frompage=products">
							<img  ng-src="images/productimages/{{subcategorydisp.url}}" err-SRC="images/productimages/noimage.jpg" class="pagination-header img-responsive"/>
						</a>
						<p class="media-heading">{{subcategorydisp.name}}<small></p><!--{{subcategorydisp.desc}}</i></small></h4>-->
						<p><strong>Code: </strong>{{subcategorydisp.code}}</p>
						<a href="productdetails.php?pcode={{subcategorydisp.code | encodeURIComponent}}&pname={{subcategorydisp.name | encodeURIComponent}}&category=<?php echo(urlencode($mycategory)) ?>&subcategory=<?php echo(urlencode($submitlink)) ?>&frompage=products" class="btn btn-default btn-xs btn-group-justified buttonspacebottom" >View Product Details</a>
						<a href="productenquiryform.php?pcode={{subcategorydisp.code | encodeURIComponent}}&pname={{subcategorydisp.name | encodeURIComponent}}&category=<?php echo(urlencode($category)) ?>&subcategory=<?php echo(urlencode($subcategory)) ?>&frompage=products" type="button" class="btn btn-primary btn-xs btn-group-justified btn-primary">Send Enquiry</a>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>
<?php include('footer.php') ?>
</body>
</html>
