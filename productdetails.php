<?php
if (empty($_GET['scode'])) {$scode='';} else {$scode=$_GET["scode"]; }
if (empty($_GET['sname'])) {$sname='';} else {$sname=$_GET["sname"]; }
if (empty($_GET['pcode'])) {$pcode='';} else {$pcode=$_GET["pcode"]; }
if (empty($_GET['pname'])) {$pname='';} else {$pname=$_GET["pname"]; }
if (empty($_GET['pagecount'])) {$pagecount='';} else {$pagecount=$_GET["pagecount"]; }
if (empty($_GET['category'])) {$category='';} else {$category=$_GET["category"]; }
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
if (empty($_GET['frompage'])) {$frompage='';} else {$frompage=$_GET["frompage"]; }
$showsearch="false";
$productdetailsactive="active";
$productenquiryactive ="";
$suppliersactive="";
$supplierenquiryactive ="disabled";
if($frompage=='products'){$pagetab="product";}
if($frompage=='suppliers'){$pagetab="suppliers";}

include('includes/sitevariables.php');
$myserverlink="http://$serverlink/products/retrieve?pcode=".$pcode;
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
	var myserverlink=<?php echo("'".$myserverlink."'") ?>
	</script>
	<script src="js/master-application.js"></script>
   
</head>

<body>

<?php include('top.php')?>
<div class="container">

	<?php include('leftcolumn.php') ?>
	
	<div class="col-sm-10">
		<?php include('product-details-breadcrumb.php') ?>
		
		<div ng-controller="master-control">
			<?php include('productlinks.php') ?>
			<h4 class="pageheader product-header" ><span class="fa fa-database fa-breadcrumb" ></span>Product Details for <?php echo($pname) ?></h4><div class="hr-header"></div>
			<?php include('pageloader.php') ?>
			
			
			<div  ng:repeat="items in itemlist.result" ng-show="dataLoaded">
				<div class="media" >
					<a href="#" class="pull-left">
						  <img ng-src="images/productimages/{{items.url}}" err-SRC="images/productimages/noimage.jpg" class="thumbnail"/>
					</a>
					<div class="media-body">
						<p class="media-heading">{{items.name}}</p>
						
						<p><strong>Code:</strong> {{items.code}} <p>
						
					</div>
				</div>
				
				<div class="clearfix" ></div>
						<div class="tab-pane fade in active">
																				
													<table class="table table-responsive  table-striped table-condensed">
                                                	<thead >
                                                        <tr class="info">
                                                            <th>Specifications</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng:repeat="child in items.specs">
                                                            <td>{{child}}</td>
                                                        </tr>
	                                                </tbody>
													</table>  
													
													<table class="table table-responsive  table-striped table-condensed">
                                                	<thead >
                                                        <tr class="info">
                                                            <th>Dimensions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng:repeat="x in items.dim">
                                                            <td>{{x}}</td>
                                                        </tr>
	                                                </tbody>
													</table>  
												                       
                                                
                                                <table class="table table-responsive  table-striped table-condensed">
                                                	<thead >
                                                        <tr class="info">
                                                            <th>Manufacturers</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng:repeat="child in items.manufacturers">
                                                            <td>{{child}}</td>
                                                        </tr>
	                                                </tbody>
                                                 </table>
                                                 
                                                  <table class="table table-responsive  table-striped table-condensed">
                                                	<thead >
                                                        <tr class="info">
                                                            <th>Purpose</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr  ng:repeat="child in items.purpose">
                                                            <td>{{child}}</td>
                                                        </tr>
	                                                </tbody>
                                                 </table>  
                                                 
                                                  <table class="table table-responsive  table-striped table-condensed">
                                                	<thead >
                                                        <tr class="info">
                                                            <th>Order Specification</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng:repeat="child in items.orderSpec">
                                                            <td>{{child}}</td>
                                                        </tr>
	                                                </tbody>
                                                 </table>                 


						</div>
			</div>
		</div> 
	</div>
</div>
 <?php include('footer.php') ?>
</body>

</html>
