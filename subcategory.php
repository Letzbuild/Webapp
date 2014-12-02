<?php
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
$showsearch="true"
?>
<?php include('includes/sitevariables.php') ?>

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

<!-- date picker scripts -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  
  
<!-- date picker ends -->


<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	 $http.get("http://localhost:4567/products/retrieve?cat=<?php echo($subcategory) ?>&limit=10&page=1") 
	.success(function(response) {$scope.subcategorylist = response;});
}


$('datepicker').datetimepicker({

        pickTime: false

  }).on('changeDate', function (e) {

        $(this).datetimepicker('hide');

  });



</script>
<!-- angular scripts ends-->

</head>

<body>

<?php include('top.php') ?>
<hr>
<div class="container">

  <div class="row" style="padding-top:15px"> 

	<?php include('sidel-col2topl-search.php') ?>

      <div  ng-app="" ng-controller="subcategory">
        <div  ng:repeat="subcategorydisp in subcategorylist">
          <div class="col-sm-4">
     
          	 	<div class="thumbnail">
                    <img src="images/productimages/{{subcategorydisp.name}}.jpg" alt="{{subcategorydisp.name}}">
                    <div class="caption">
                        <h3>{{subcategorydisp.name}}</h3>
                        <p>Code: <strong>{{subcategorydisp.code}}</strong></p>
                      
                            <!-- view details and send enquiry button as includes -->
                 			<?php include('viewproductdetails-m.php') ?>           
                            <?php include('sendenquiryproduct-m.php') ?>   
                            <!-- view details and send enquiry button as includes ends-->   
                              
                              
                              
                              
                              
                    </div>
               </div>
       
         </div>
       </div>
     </div>
     </div> <!-- this div ends the column sm 9 from the include file side-col2... -->
  </div>
</div>

<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
