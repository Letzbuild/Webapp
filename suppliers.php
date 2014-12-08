<?php
 $pagetab="suppliers";
 $showsearch="true";
 include('includes/sitevariables.php');

 ?>

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

<script src= "js/angular.min.js"></script>
<script type='text/javascript'>
var app = angular.module('app', []);
app.filter('encodeURIComponent', function() {
    return window.encodeURIComponent;
});
</script>


<script>
function category($scope,$http) {
	 $http.get("http://localhost:4567/products/categories")
	.success(function(response) {$scope.names = response;});
}


    $(document).ready(function(){

        $('[data-toggle="popover"]').popover();   

    });


</script>



</head>
<body>

<?php include('top.php') ?>
<div class="container">
    <ul class="breadcrumb"><span class="maincontentheading">You are here:</span> 
        <li class="active maincontentheadinginner">Suppliers - <span style="cursor:pointer" class="badge" data-toggle="popover" data-placement="right" title="Supplier Main" data-content="subcategory with total suppliers shown under each category, Click on that particular sub category to view all the suppliers for that particular sub category">info</span></li>
        
	 </ul> <div class="row" > 
   
	<?php 
	include('sidel-col2topl-search.php');
	?>


  <div ng-app="app">
  	  <div  ng-app="" ng-controller="category">
            <div  ng:repeat="x in names ">
              <div class="col-sm-4">
               
                <div class="panel panel-warning">
                  <div class="panel-heading">
                    <h4 class="panel-title" >{{ x.category}}<!--<span class="badge pull-right" >{{ x.cnt }}</span>--></h4>
                 
                  </div>
                  <div class="panel-body">
                  <div ng:repeat="child in x.subCats | limitTo:5">
                  		<li style="padding-bottom:5px;"><a  href="suppliersshow.php?pcode={{ child.cat | encodeURIComponent }}">{{child.cat}}</a><span class="badge pull-right" >{{child.suppCnt}}</span></li>
                   </div>
                </div>
                
                  	<div ng-show="x.subCats.length > 5">
                    	<a href="#{{ x._id }}" class="btn btn-lg btn-warning btn-sm" data-toggle="modal">View More</a> 
                    </div>

              <!-- Modal HTML starts--> 
			  <div id="{{ x._id }}" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" >{{ x.category }} </h4>
                    Click on a particular product to view suppliers
                    </div>
                    <div class="modal-body">
                    	<div class="panel panel-default"><div class="panel-heading">Products<span class="pull-right">Total Suppliers</span></div>
                            <div class="panel-body">
                            <div ng:repeat="child in x.subCats">
                                <a  href="subcategory.php?subcategory={{ child.cat | encodeURIComponent }}">{{child.cat}}</a><span class="badge pull-right">{{child.suppCnt}}</span>
                            </div>
                            </div>
                    	</div>
                    </div>
                    <div class="modal-footer"> 
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
             </div>
              <!-- Modal HTML ends--> 
               
                
               
                
      		  </div> <!-- sm col 4 ends -->
              
            </div>
        </div>
    </div>
  

 	</div><!-- side col sm-9 from include file ends -->
 
  </div>
</div>
<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>