<?php
if (empty($_GET['scode'])) {$scode='';} else {$scode=$_GET["scode"]; }
if (empty($_GET['sname'])) {$sname='';} else {$sname=$_GET["sname"]; }
if (empty($_GET['pcode'])) {$pcode='';} else {$pcode=$_GET["pcode"]; }
if (empty($_GET['pname'])) {$pname='';} else {$pname=$_GET["pname"]; }
$showsearch="false";
$pagetab="suppliers";
//echo($scode);
//echo($sname);
//echo($pcode);
//echo($pname);
$submitlink=urlencode($pcode);
 
include('includes/sitevariables.php');

?>

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
	  $http.get("http://<?php echo($serverlink) ?>/products/retrieve?pcode=<?php echo ($submitlink) ?>&limit=10&page=1")
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
    <ul class="breadcrumb"><span class="maincontentheading">You are here:</span> 
    	<li><a href="suppliers.php">Supplier</a></li>
        <li><a href="javascript:window.history.go(-1)">Supplier List </a></li>
         <li class="active maincontentheadinginner">Product Details - <strong>( for Product: <?php echo ($pname) ?> )</strong></li>
        
	 </ul> 
   <div class="row" > 

	<?php include('sidel-col2topl-search.php') ?>
	<div ng-app1="MyApp1">
      <div ng-app="MyApp" ng-controller="subcategory">
        <div  ng:repeat="subcategorydisp in subcategorylist">
                
           		
              <div class="media">
                <a href="#" class="pull-left">
                      <img ng-src="images/productimages/{{subcategorydisp.url}}" err-SRC="images/productimages/noimage.jpg" class="thumbnail"/>
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{subcategorydisp.name}} <small><i>( Under Sub Category <strong>{{subcategorydisp.category}}</strong> )</i></small></h4>
                    <p>{{subcategorydisp.desc}}.</p>
                    <h3>Code: {{subcategorydisp.code}} </h3>
                    <a href="supplierenquiryform.php?scode=<?php echo($scode) ?>&sname=<?php echo($sname) ?>&pcode=<?php echo($pcode) ?>" class="btn btn-default btn-sm  btn-warning">Send Supplier Enquiry</a>
                </div>
            </div>                
              <div class="clearfix"></div>   
               <div class="visible-xs" style="padding-bottom:15px"></div>                     
          										
                                                <table class="table table-responsive  table-striped">
                                                	<thead >
                                                        <tr  class="warning">
                                                            <th>Specifications</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng:repeat="(key, value) in subcategorydisp.specs">
                                                            <td width="25%">{{key}}</td>
                                                            <td>{{value}}</td>

                                                        </tr>
	                                                </tbody>
                                                 </table>

                                                <table class="table table-responsive  table-striped">
                                                	<thead >
                                                        <tr class="warning">
                                                            <th>Star Suppliers</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng:repeat="supplier in subcategorydisp.starSuppliers">
                                                            <td>{{supplier.name}}</td>
                                                        </tr>
	                                                </tbody>
                                                 </table>                         
                                                
                                                <table class="table table-responsive  table-striped">
                                                	<thead >
                                                        <tr class="warning">
                                                            <th>Manufacturers</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng:repeat="child in subcategorydisp.manufacturers">
                                                            <td>{{child}}</td>
                                                        </tr>
	                                                </tbody>
                                                 </table>
                                                 
                                                  <table class="table table-responsive  table-striped">
                                                	<thead >
                                                        <tr class="warning">
                                                            <th>Purpose</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr  ng:repeat="child in subcategorydisp.purpose">
                                                            <td>{{child}}</td>
                                                        </tr>
	                                                </tbody>
                                                 </table>  
                                                 
                                                  <table class="table table-responsive  table-striped">
                                                	<thead >
                                                        <tr class="warning">
                                                            <th>Order Specification</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng:repeat="child in subcategorydisp.orderSpec">
                                                            <td>{{child}}</td>
                                                        </tr>
	                                                </tbody>
                                                 </table>                 
                
       
        
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
