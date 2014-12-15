<?php
if (empty($_GET['pcode'])) {$pcode='';} else {$pcode=$_GET["pcode"]; }
$showsearch="false";
$pagetab="suppliers";
$submitlink=urlencode($pcode);
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
	 $http.get("http://<?php echo($serverlink) ?>/suppliers/retrieve?cat=<?php echo ($submitlink) ?>&limit=10&page=1") 
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
        <li class="active maincontentheadinginner">Supplier List - <strong>( for Sub Category: <?php echo ($pcode) ?> )</strong>
        
	 </ul> 
   <div class="row" > 

	<?php include('sidel-col2topl-search.php') ?>
	<div ng-app1="MyApp1">
      <div ng-app="MyApp" ng-controller="subcategory">
        <div  ng:repeat="subcategorydisp in subcategorylist">
                <!-- panel starts -->
                <div class="panel panel-default panel-warning">
             				 
                        <div class="panel-heading " style="margin-bottom:15px">
                        	{{subcategorydisp._id.sname}}  <strong>(Rating: {{subcategorydisp._id.rating}} / 5) </strong>
                            <a href="supplierdetails.php?scode={{subcategorydisp._id.scode | encodeURIComponent  }}&sname={{subcategorydisp._id.sname | encodeURIComponent}}" class="btn btn-default btn-sm btn-default  buttonspacebottom">View Supplier Details</a>
                        </div>
                        <div ng:repeat="products in subcategorydisp._id.prods" class="col-sm-4">
                        
                                   
                        	
                            <div class="thumbnail ">
                            	
                                <img ng-src="images/productimages/{{products._id.purl}}" err-SRC="images/productimages/noimage.jpg" />
                                <div class="caption">
                              
                                    <h3>{{products._id.pname}}</h3>
                                    <p>Code: {{products._id.pcode}}</p>
                                    
                                    <a href="productdetails.php?scode={{subcategorydisp._id.scode | encodeURIComponent  }}&sname={{subcategorydisp._id.sname | encodeURIComponent}}&pcode={{products._id.pcode | encodeURIComponent}}&pname={{products._id.pname | encodeURIComponent}}" class="btn btn-default btn-sm btn-group-justified buttonspacebottom" >View Product Details</a>
                                    
                                    
                                    
                                     <a href="supplierenquiryform.php?scode={{subcategorydisp._id.scode | encodeURIComponent  }}&sname={{subcategorydisp._id.sname | encodeURIComponent}}&pcode={{products._id.pcode | encodeURIComponent}}&pname={{products._id.pname | encodeURIComponent}}" class="btn btn-default btn-sm btn-group-justified btn-warning">Send Supplier Enquiry</a>
                                  
                                </div>
                             </div>      
                               
                            </div>
                        <div class="clearfix"></div>
                </div> <!-- panel ends -->
                          
            	
           		
                              
                              
                              
                
       
        
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
