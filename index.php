<?php $showsearch="true" ?>
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

<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>
function category($scope,$http) {
	 $http.get("http://localhost:4567/products/categories")
	.success(function(response) {$scope.names = response;});
}

$scope.randomSort = function(person){
        return Math.random();
    };

</script>
<!-- angular scripts ends-->
</head>

<body>
<?php include('top.php') ?>
<?php include('carousel.php') ?>
<hr>
<div class="container">
  <div class="row" style="padding-top:15px"> 
   
	<?php include('sidel-col2topl-search.php') ?>
      
      <!-- angular catergory and subcategory display starts -->
      <div  ng-app="" ng-controller="category">
        <div  ng:repeat="x in names">
          <div class="col-sm-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title" >{{ x._id }}<span class="badge pull-right" >{{ x.cnt }}</span></</h4>
              </div>
              <div ng:repeat="child in x.subCats | limitTo:5">
                <div class="panel-body">
                  <li style="padding-bottom:0px;margin:0px;"><a  ng-href="subcategory.php?subcategory={{child.cat}}">{{child.cat}}</a><span class="badge pull-right">{{child.cnt}}</span></li>
                </div>
              </div>
              
              <!-- Modal HTML starts--> 
              <a href="#{{ x._id }}" class="btn btn-lg btn-warning btn-sm" data-toggle="modal">View More</a>
              <div id="{{ x._id }}" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">{{ x._id }} </h4>
                      <h6>List of Subcategories for category <strong>{{ x._id }}</strong></h6>
                    </div>
                    <div class="modal-body">
                      <div ng:repeat="child in x.subCats">
                        <li style="padding-bottom:0px;margin:0px;">{{child.cat}}<span class="badge">{{child.cnt}}</span></li>
                      </div>
                    </div>
                    <div class="modal-footer"> To close this window click anywhere on the screen or press this button
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal HTML ends--> 
            </div>
          </div>
        </div>
      </div>
      
      <!-- angular catergory and subcategory display ends --> 
      
    </div>
    <!-- Column 2 image bar ends--> 
    
  </div>
  <!-- side bar and image display bar rows and column end here -->
  
  <hr>
</div>

<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
