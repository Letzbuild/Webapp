<?php
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
if (empty($_GET['pagecount'])) {$pagecount='';} else {$pagecount=$_GET["pagecount"]; }
$showsearch="false";
$pagetab="product";
$submitlink=urlencode($subcategory);
$totalitemscount=urlencode($pagecount);
include('includes/sitevariables.php');
$myserverlink="http://$serverlink/enquiries/product/add";
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
	var totalitemscount=<?php echo($totalitemscount) ?>
	</script>
	<script type="text/javaScript">
	var serverlink=<?php echo("'".$serverlink."'") ?>
	</script>
	<script src="js/master-application.js"></script>
	

    
</head>
<body >

<?php include('top.php')?>
<div class="container" style="margin-top:-15px">
    <ul class="breadcrumb"><span class="maincontentheading"></span> 
    	<li><a href="index.php">Sub Category</a></li>
        <li class="active maincontentheadinginner">Product List: </li>
		<span class="label label-default" style="font-size:15px;"> <?php echo ($subcategory) ?>,  No Of Products: <?php echo($totalitemscount) ?></span>
		<span  ng-controller="angular-bala-pops" class="badge cursor-pointer pull-right"  popover-trigger="mouseenter" popover="All products under Subcategory <?php echo($subcategory) ?> are listed with 12 records per page.From here you can send product enquiry for a particular product and also view its details.">Info</span>
		
	</ul>
	<div class="row">
	<?php include('sidel-col2topl-search.php') ?>
	<div ng-controller="master-control" data-ng-init="setPage(bigCurrentPage)">
		<!--<pagination direction-links="false" total-items="totalItems" ng-model="currentPage" num-pages="smallnumPages" ng-click="setPage(currentPage)" items-per-page="itemsperpage"></pagination>-->
		
		<pagination style="margin-top:-10px" total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true" rotate="false" num-pages="numPages" items-per-page="itemsperpage" ng-click="setPage(bigCurrentPage)"></pagination>
		<div class="row">
		<div  ng:repeat="subcategorydisp in returnedlist">
			<div class="col-sm-4">
				<div class="thumbnail" style="padding:5px">
					<img  ng-src="images/productimages/{{subcategorydisp.url}}" err-SRC="images/productimages/noimage.jpg" />
					<h4 class="media-heading">{{subcategorydisp.name}}<br><small><i><!--{{subcategorydisp.desc}}</i></small></h4>-->
					<p>Code: <strong>{{subcategorydisp.code}}</stron</p>
					<a href="productdetails.php?pcode={{subcategorydisp.code | encodeURIComponent}}&pname={{subcategorydisp.name | encodeURIComponent}}&frompage=products" class="btn btn-default btn-sm btn-group-justified buttonspacebottom" >View Product Details</a>
					<a href="productenquiryform.php?&pcode={{subcategorydisp.code | encodeURIComponent}}&pname={{subcategorydisp.name | encodeURIComponent}}" class="btn btn-default btn-sm btn-group-justified btn-warning">Send Product Enquiry</a>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div><!-- side col div ends -->
	</div>
 </div>
 <?php include('footer.php') ?>
  </body>
</html>
