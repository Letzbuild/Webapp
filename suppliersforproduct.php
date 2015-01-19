<?php
$supplierenquiryshow="false";
if (empty($_GET['scode'])) {$scode='';} else {$scode=$_GET["scode"]; }
if (empty($_GET['sname'])) {$sname='';} else {$sname=$_GET["sname"]; }
if (empty($_GET['pcode'])) {$pcode='';} else {$pcode=$_GET["pcode"]; }
if (empty($_GET['pname'])) {$pname='';} else {$pname=$_GET["pname"]; }
if (empty($_GET['pagecount'])) {$pagecount='';} else {$pagecount=$_GET["pagecount"]; }
if (empty($_GET['category'])) {$category='';} else {$category=$_GET["category"]; }
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
if (empty($_GET['frompage'])) {$frompage='';} else {$frompage=$_GET["frompage"]; }

$showsearch="false";
$productdetailsactive="";
$productenquiryactive ="";
$suppliersactive="active";
$supplierenquiryactive ="disabled";
if($frompage=='products'){$pagetab="product";}
if($frompage=='suppliers'){$pagetab="suppliers";}

include('includes/sitevariables.php');
$myserverlink="http://$serverlink/suppliers/retrieve?pcode=";

?>

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
		var productname="<?php echo($pcode) ?>"
	</script>
	<script type="text/javaScript">
		var myserverlink=<?php echo("'".$myserverlink."'") ?>
	</script>
	<script src="js/pagination-application.js"></script>
   
   <style>
   .rating{
  color: #a9a9a9;
  margin: 0;
  padding: 0;
  
}

ul.rating {
  display: inline-block;
}

.rating li {
  list-style-type: none;
  display: inline-block;
  padding: 1px;
  text-align: center;
  font-size:18px;
  font-weight: bold;
  
}

.rating .filled {
  color: orange;
}
   </style>
   
   
   

</head>

<body>

<?php include('top.php')?>
<div class="container">

	<?php include('leftcolumn.php') ?>
	
	<div class="col-sm-10 ">
		<?php include('product-details-breadcrumb.php') ?>

		<div ng-controller="master-control" data-ng-init="setPage(bigCurrentPage)" >
			<?php include('productlinks.php') ?>
			<h4 class="pageheader product-header" ><span class="fa fa-database fa-breadcrumb" ></span>Suppliers For <?php echo($pname) ?></h4><div class="hr-header"></div>
				<div  ng:repeat="items in returnedlist.result | limitTo:1" >
					<div class="media" >
						<a href="#" class="pull-left">
							  <img ng-src="images/productimages/{{items.purl}}" err-SRC="images/productimages/noimage.jpg" class="thumbnail"/>
						</a>
						<div class="media-body">
							<p class="media-heading">{{items.pname}}</p>
							
							<p><strong>Code:</strong> {{items.pcode}} <p>
							
						</div>
					</div>
				</div>
				<div class="clearfix" ></div>
				
			
			
			<pagination total-items="bigTotalItems"  ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm pagination-header" boundary-links="true" rotate="false" num-pages="numPages" items-per-page="itemsperpage" ng-click="setPage(bigCurrentPage)"></pagination>
			<?php include('pageloader.php') ?>
					<div  ng:repeat="items in returnedlist.result" ng-show="dataLoaded">
						<div class="media-supplier dropshadow" >
							<div class="media pageheader" >
								<a href="#" class="pull-left">
									 <img ng-src="images/productimages/{{items.purl}}1" err-SRC="images/productimages/noimage.jpg" class="thumbnail"/>
								</a>
								<div class="media-body">
									<h5 class="media-heading"><strong>{{items.supplier.name}} </strong> <span ng-controller="balajisrirangam-star-rating" fundoo-rating rating-value="[items.supplier.rating]" max="5" readonly="true"></span></h5>
									<span class="fa fa-map-marker fa-breadcrumb" ></span>: {{items.supplier.address}}<Br>
									<span class="fa fa-envelope fa-breadcrumb" ></span>: {{items.supplier.email}}<Br>

									<div  ng:repeat="(key,value) in items.supplier.phone"><span class="fa fa-phone-square fa-breadcrumb" ></span>: {{value}} </div>
									<span class="fa fa-laptop fa-breadcrumb" ></span>: <a href="www.letzbuild.com/{{items.supplier.name}}" target="_blank">www.letzbuild.com/{{items.supplier.name}}</a><Br>
								<p><a href="supplierenquiryform.php?scode={{items.supplier.scode | encodeURIComponent}}&sname={{items.supplier.name | encodeURIComponent}}&pcode={{items.pcode | encodeURIComponent}}&pname={{items.pname | encodeURIComponent}}&category=<?php echo(urlencode($category)) ?>&subcategory=<?php echo(urlencode($subcategory)) ?>" type="button" class="btn btn-primary btn-xs">Send Supplier Enquiry</a></p>
								</div>
							</div><div class="clearfix " ></div>
						</div>
					</div>
			<pagination total-items="bigTotalItems"  ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm pagination-header" boundary-links="true" rotate="false" num-pages="numPages" items-per-page="itemsperpage" ng-click="setPage(bigCurrentPage)"></pagination>		
					
					
					
			</div>
		</div>
</div>

<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
