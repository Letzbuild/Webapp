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
<link href="css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>

<!-- date picker scripts -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  
  <script>
   $(function() {
   $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+6M" });
    $( "#datepicker" ).datepicker({changeMonth: true, changeYear: true});
    $( "#datepicker" ).datepicker( "option", "dateFormat", "d MM, yy" );
	$( "#datepicker" ).datepicker( "option", "showAnim","fold" );
	
   
  });
  
  

  </script>
<!-- date picker ends -->


<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	 $http.get("http://localhost:4567/products/retrieve?cat=<?php echo($subcategory) ?>&limit=10&page=1") 
	.success(function(response) {$scope.subcategorylist = response;});
}






</script>
<!-- angular scripts ends-->
<style>
.modal .modal-body {
    
    overflow-y: auto;
}
</style>
</head>

<body>



<div style="padding:40px">
    <form name="productenquiryform" id="productenquiryform">

     		<label for="firstname">First Name</label>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input type="text" class="form-control" id="firstname" placeholder="First Name"  mandatory="yes" >
	            <span id="firstname-display"></span>
            </div>
			 	
       
            <label for="lastname">Last Name</label>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input type="text" class="form-control" id="lastname" placeholder="Last Name" mandatory="yes">
				<span id="lastname-display"></span>	
            </div>

            <label for="organisation">Organisation</label>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
              	<input type="text" class="form-control" id="organisation" placeholder="Organisation" mandatory="yes">
                <span id="organisation-display"></span>
            </div>
			 	

            <label for="mobilenumber">Mobile Number</label>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
              	<input type="text" class="form-control" id="mobilenumber" placeholder="Mobile Number" mandatory="yes" >
            	<span id="mobilenumber-display"></span>
            </div>
		      
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Email" onblur="echeck(document.getElementById(this.id))" mandatory="yes">
            <span id="email-display"></span>
        </div>
        

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity" placeholder="Quantity" mandatory="yes">
            <span id="quantity-display"></span>
       </div>
       <!-- <div class="form-group">
                <label class="radio-inline">
                    <input type="radio" name="radioquantity" value="kilograms"> Kilograms
                </label>

                <label class="radio-inline">
                    <input type="radio" name="radioquantity" value="metrictonnes"> Metric Tonnes
                </label>
        </div>-->
        <div class="form-group">
        
          <label for="specification">Specification</label>
          <select class="form-control"  id="specification" name="specification" mandatory="yes">
            <option value="none" selected>Select One</option>
            <option value="kilograms">Kilo Grams</option>
            <option value="metrictonnes">Metric Tonnes</option>
          </select>
  		<span id="specification-display"></span>
        </div>
 
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Subject" mandatory="yes">
            <span id="subject-display"></span>
        </div>
        
         <div class="form-group">
            <label for="datepicker">Date Needed</label>
            <input type="text" class="form-control" id="datepicker" placeholder="Click To Add Date" mandatory="yes">
             <span id="datepicker-display"></span>
        </div>       
        
        
        <div class="form-group">
            <label for="approximatebudget">Approximate Budget</label>
            <input type="text" class="form-control" id="approximatebudget" placeholder="Approximate Budget" mandatory="yes">
             <span id="approximatebudget-display"></span>
        </div>
 
        <div class="form-group">
            <label for="deliverylocation">Delivery Location</label>
            <input type="text" class="form-control" id="deliverylocation" placeholder="Delivery Location" mandatory="yes">
             <span id="deliverylocation-display"></span>
        </div>
        
        <div class="form-group">
            <label for="frequency">Frequency</label>
            <input type="text" class="form-control" id="frequency" placeholder="Frequency" mandatory="yes">
             <span id="frequency-display"></span>
        </div>               
 
        <div class="form-group">
            <label for="reasonforpurchase">Reason For Purchase</label>
            <input type="text" class="form-control" id="reasonforpurchase" placeholder="Reason For Purchase" mandatory="yes">
             <span id="reasonforpurchase-display"></span>
        </div>  
 
        <div class="form-group">
            <label for="specialinstructions">Any Special Instruction</label>
           <textarea rows="3" class="form-control" id="specialinstructions" placeholder="Any Special Instruction" mandatory="yes"></textarea>
            <span id="specialinstructions-display"></span>
        </div> 
                
        <button type="button" class="btn btn-warning"  onclick="checkfields(this.form.name)" mandatory="no">Submit</button>
    </form>
</div>

</body>
</html>
