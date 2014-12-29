<?php
if (empty($_GET['scode'])) {$scode='';} else {$scode=$_GET["scode"]; }
if (empty($_GET['sname'])) {$sname='';} else {$sname=$_GET["sname"]; }
if (empty($_GET['frompage'])) {$frompage='';} else {$frompage=$_GET["frompage"]; }

$showsearch="false";
$pagetab="suppliers";
//echo($scode);
//echo($frompage);
$submitlink=urlencode($scode);

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
<script src="js/myscript.js"></script>



<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>

<script>
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	  $http.get("http://<?php echo($serverlink) ?>/suppliers/<?php echo($submitlink) ?>")
	 
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
		<ul class="breadcrumb"><span class="maincontentheading"></span> 
    	<li><a href="javascript:window.history.go(-1)">Back (Previous Page)</a></li>
		<li class="active maincontentheadinginner">Supplier Details - <strong>( for Supplier: <?php echo ($sname) ?> )</strong></li>
		</ul> 
	
   <div class="row" > 

	<?php include('sidel-col2topl-search.php') ?>
	<div ng-app1="MyApp1">
      <div ng-app="MyApp" ng-controller="subcategory">
      
        	<div class="media">
                <a href="#" class="pull-left">
                      <img ng-src="images/supplierimages/{{subcategorylist.url}}" err-SRC="images/supplierimages/noimage.jpg" class="thumbnail"/>
                </a>
                <div class="media-body">
                    <span class="list-group-item list-group-item-warning">
                		<span class="glyphicon glyphicon-user contactglyphfont" ></span> <span class="contactspace"> Supplier Name: <strong>{{subcategorylist.name}}</strong> </span>&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-barcode contactglyphfont" ></span> <span class="contactspace"> Rating: <strong>{{subcategorylist.rating}} / 5</strong> </span>
		            </span>
                   
                </div>
            </div> 
            <div class="clearfix"></div>
            <div class="visible-xs" style="padding-bottom:15px"></div>                     
        	
            <div class="list-group">
            <span class="list-group-item list-group-item-warning">
                <span class="glyphicon glyphicon-user contactglyphfont" ></span> <span class="contactspace"> Contact Person: {{subcategorylist.contact.fname}} {{subcategorylist.contact.lname}} </span>
            </span>
            <span href="#" class="list-group-item list-group-item-warning">
                <span class="glyphicon glyphicon-flag contactglyphfont" ></span> <span class="contactspace"> City: {{subcategorylist.city}} </span>
            </span>
            <span class="list-group-item list-group-item-warning">
                <span class="glyphicon glyphicon-envelope contactglyphfont" ></span><span class="contactspace"> Email: <a href="mailto:{{subcategorylist.email}}">{{subcategorylist.email}}</a> </span>
            </span>
            <span class="list-group-item list-group-item-warning">
                <span class="glyphicon glyphicon-phone contactglyphfont" ></span><span class="contactspace"> Phone: 
                 <span ng:repeat="child in subcategorylist.phone">
               		 {{child}} /
                  </span>
                
                </span>
            </span>
            
            <span class="list-group-item list-group-item-warning">
                <span class="glyphicon glyphicon-envelope contactglyphfont" ></span><span class="contactspace"> Address: {{subcategorylist.address}} </span>
            </span>
            
            
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
