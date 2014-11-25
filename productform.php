<?php
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	 $http.get("http://localhost:4567/products/retrieve?cat=<?php echo($subcategory) ?>&limit=10&page=1") 
	.success(function(response) {$scope.subcategorylist = response;});
}


</script>
</head>

<body style="margin:40px;">

    <form>
    	<div class="form-group form-horizontal">
            <label for="inputfirstname">First Name</label>
            <input type="text" class="form-control" id="inputfirstname" placeholder="First Name">
        </div>
        
    	<div class="form-group">
            <label for="inputlastname">Last Name</label>
            <input type="text" class="form-control" id="inputlastname" placeholder="Last Name">
        </div>

    	<div class="form-group">
            <label for="inputorganisation">Organistion</label>
            <input type="text" class="form-control" id="inputorganisation" placeholder="Organisation">
        </div>

     	<div class="form-group">
            <label for="inputmobilenumber">Mobile Number</label>
            <input type="text"  class="form-control" id="inputmobilenumber" placeholder="Mobile Number">
        </div>
 
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        
        <div class="form-group">
            <label for="inputquantity">Quantity</label>
            <input type="email" class="form-control" id="inputquantity" placeholder="Quantity">
        </div>
        <div class="form-group">
                <label class="radio-inline">
                    <input type="radio" name="radioquantity" value="kilograms"> Kilograms
                </label>

                <label class="radio-inline">
                    <input type="radio" name="radioquantity" value="metrictonnes"> Metric Tonnes
                </label>
        </div>
 
        <div class="form-group">
            <label for="inputsubject">Subject</label>
            <input type="email" class="form-control" id="inputsubject" placeholder="Subject">
        </div>
        
         <div class="form-group">
            <label for="inputdateneeded">Date Needed</label>
            <input type="email" class="form-control" id="inputdateneeded" placeholder="Date Needed">
        </div>       
        
        <div class="form-group">
            <label for="inputapproximatebudget">Approximate Budget</label>
            <input type="email" class="form-control" id="inputapproximatebudget" placeholder="Approximate Budget">
        </div>
 
        <div class="form-group">
            <label for="inputdeliverylocation">Delivery Location</label>
            <input type="email" class="form-control" id="inputdeliverylocation" placeholder="Approximate Budget">
        </div>
        
        <div class="form-group">
            <label for="inputfrequency">Frequency</label>
            <input type="email" class="form-control" id="inputfrequency" placeholder="Frequency">
        </div>               
 
        <div class="form-group">
            <label for="inputreasonforpurchase">Reason For Purchase</label>
            <input type="email" class="form-control" id="inputreasonforpurchase" placeholder="Reason For Purchase">
        </div>  
 
        <div class="form-group">
            <label for="inputanyspecialinstructions">Any Special Instruction</label>
           <textarea rows="3" class="form-control" id="inputanyspecialinstructions" placeholder="Any Special Instruction"></textarea>
        </div> 
                
        <button type="submit" class="btn btn-warning">Submit</button>
    </form>

</body>
</html>
