<?php
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
if (empty($_GET['pagecount'])) {$pagecount='';} else {$pagecount=$_GET["pagecount"]; }
$showsearch="false";
$pagetab="product";
$submitlink=urlencode($subcategory);
$pagecount=urlencode($pagecount);
include('includes/sitevariables.php');
$myserverlink="http://$serverlink/enquiries/product/add";
include('includes/sitevariables.php') 
?>

<!DOCTYPE html>
<html ng-app="myApp" ng-app lang="en">
<head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/angular.min.js"></script>
	<script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
	<?php include('js/app.php') ?> 
	
	<title>Letz Build</title>
</head>
<body>
<?php include('top.php') ?>
<div ng-controller="customersCrtl">
<div class="container">
    <ul class="breadcrumb"><span class="maincontentheading">You are here:</span> 
    	<li><a href="index.php">Sub Category</a></li>
        <li class="active maincontentheadinginner">Product List - <strong>( <?php echo ($subcategory) ?> )</strong>
        
	</ul>  
	<?php include('sidel-col2topl-search.php') ?>
	
	<div class="row">
        <div class="col-md-2">PageSize:
            <select ng-model="entryLimit" class="form-control input-sm">
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="col-md-3">Filter:
            <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control input-sm" />
        </div>
        
	    <div class="col-md-12" ng-show="filteredItems == 0">
            <div class="col-md-12">
                <h4>No customers found</h4>
            </div>
        </div>
        <div class="col-md-12" ng-show="filteredItems > 0">    
            <div pagination="" page="currentPage" max-size="20" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small pagination-sm" previous-text="«" next-text="»"></div>
        </div>
	
	
		<br/>
    
        <div  ng-show="filteredItems > 0">
			<!--Sort By: Product Sub Category&nbsp;<a ng-click="sort_by('name');"><i class="glyphicon glyphicon-sort"></i></a>
			Code&nbsp;<a ng-click="sort_by('code');"><i class="glyphicon glyphicon-sort"></i></a>
			Description &nbsp;<a ng-click="sort_by('Description');"><i class="glyphicon glyphicon-sort"></i></a><Br><br>-->
		
			<div ng-repeat="subcategorydisp in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
			
				<div class="col-sm-4">
					<div class="thumbnail">
						<img  ng-src="images/productimages/{{subcategorydisp.url}}" err-SRC="images/productimages/noimage.jpg" />
						<h4 class="media-heading">{{subcategorydisp.name}}<br><small><i>{{subcategorydisp.desc}}</i></small></h4>
						<p>Code: <strong>{{subcategorydisp.code}}</stron</p>
						<a href="productdetails.php?pcode={{subcategorydisp.code | encodeURIComponent}}&pname={{subcategorydisp.name | encodeURIComponent}}&frompage=products" class="btn btn-default btn-sm btn-group-justified buttonspacebottom" >View Product Details</a>
						 <a href="productenquiryform.php?&pcode={{subcategorydisp.code | encodeURIComponent}}&pname={{subcategorydisp.name | encodeURIComponent}}" class="btn btn-default btn-sm btn-group-justified btn-warning">Send Product Enquiry</a>
                        
						
						
					</div>
				</div>
			
			</div>
		
		
			
           <!-- <table class="table table-striped table-bordered table-responsive">
            <thead>
            <th>Image&nbsp;<a ng-click="sort_by('name');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Product Sub Category&nbsp;<a ng-click="sort_by('name');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Code&nbsp;<a ng-click="sort_by('code');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Description&nbsp;<a ng-click="sort_by('desc');"><i class="glyphicon glyphicon-sort"></i></a></th>
            
            </thead>
            <tbody>
                <tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td><img ng-src="images/productimages/{{data.url}}" err-SRC="images/productimages/noimage.jpg" /></td>
					<td>{{data.name}}</td>
                    <td>{{data.code}}</td>
                    <td>{{data.desc}}</td>
                </tr>
            </tbody>
            </table>-->
			<div class="col-md-12" ng-show="filteredItems == 0">
				<div class="col-md-12">
					<h4>No customers found</h4>
				</div>
			</div>
			<div class="col-md-12" ng-show="filteredItems > 0">    
				<!--<div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>-->
				<div pagination="" page="currentPage" max-size="20" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small pagination-sm" previous-text="«" next-text="»"></div>
				
			</div>
		</div>
	</div>
	</div><!-- side col ends -->
</div>
</div>
     
    </body>
</html>