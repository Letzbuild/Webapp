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

?>
<?php
include('includes/sitevariables.php');
$myserverlink="http://$serverlink/enquiries/supplier/add";
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

<!-- date picker scripts -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

  
<!-- date picker ends -->


<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>
 var app = angular.module("MyApp", []);
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	 $http.get("http://<?php echo($serverlink) ?>/products/retrieve?pcode=<?php echo ($submitlink) ?>") 
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
<div class="container">
   
    <ul class="breadcrumb"><span class="maincontentheading">You are here:</span> 
    	<li><a href="suppliers.php">Supplier</a></li>
        <li class="active maincontentheadinginner">Supplier enquiry form <i>( To Supplier: <strong><?php echo($sname) ?></strong>, for  product: <strong><?php echo($pname) ?> )</i></strong>  </li>
        
	 </ul>
     <div class="row" > 
     <!-- pagination -->
  
  <!-- pagination ends -->
	<?php include('sidel-col2topl-search.php') ?>
      <div  ng-app="MyApp" ng-controller="subcategory">
        <div  ng:repeat="subcategorydisp in subcategorylist">
        
            <div class="pull-right"><i><h6>Fields with asterix are required</h6></i></div>
			<div class="clearfix"></div>
			<div class="formouter">
	
    		<form name="supplierenquiryform" id="supplierenquiryform">

			<label for="" onkeyup="">Supplier Name</label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input type="text" class="form-control" id="" placeholder=""  value="<?php echo($sname) ?>" maxlength="30" mandatory="yes" disabled>
	            
            </div>

     		<label for="firstname" onkeyup="productenquiry(this.form.name)">First Name<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input type="text" class="form-control" id="firstname" placeholder="First Name"  maxlength="30" mandatory="yes" >
	            <span id="firstname-display"></span>
            </div>
			 	
       
            <label for="lastname">Last Name<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input type="text" class="form-control" id="lastname" placeholder="Last Name" maxlength="30" mandatory="yes">
				<span id="lastname-display"></span>	
            </div>

            <label for="organisation">Organisation<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
              	<input type="text" class="form-control" id="organisation" placeholder="Organisation" maxlength="30" mandatory="yes">
                <span id="organisation-display"></span>
            </div>
			 	

            <label for="mobilenumber">Mobile Number<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
              	<input type="text" class="form-control" id="mobilenumber" placeholder="Mobile Number" onblur="isphonenumber(document.getElementById(this.id))" maxlength="10"  mandatory="yes" >
            	<span id="mobilenumber-display"></span>
            </div>
		  
              <label for="email">Email<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>    
              <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="text" class="form-control" id="email" placeholder="Email" onblur="echeck(document.getElementById(this.id))" maxlength="30" mandatory="yes">
                <span id="email-display"></span>
             </div>
            
            <label for="quantity">Quantity<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-align-justify"></span></span>
                <input type="text" class="form-control" id="quantity" placeholder="Quantity" maxlength="6"onblur="isphonenumber(document.getElementById(this.id))"  mandatory="yes">
                <span id="quantity-display"></span>
           </div>
           <!-- <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="radioquantity" value="kilograms"> Kilograms
                    <sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
    
                    <label class="radio-inline">
                        <input type="radio" name="radioquantity" value="metrictonnes"> Metric Tonnes
                    <sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            </div>-->
        
                                          
        
            
            <label for="specification">Quantity Specification<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-align-justify"></span></span>
             <select class="form-control"  id="specification" name="specification" mandatory="yes">
                <option value="none" selected>Select One</option>
                <option  ng:repeat="child in subcategorydisp.orderSpec" value="{{child}}">{{child}}</option>
             </select>
            <span id="specification-display"></span>
            </div>
     
            <label for="subject">Subject<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
                <input type="text" class="form-control" id="subject" placeholder="Subject" maxlength="30" mandatory="yes">
                <span id="subject-display"></span>
            </div>
            
             <label for="datepicker" control-label>Date Needed<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
             <div class="input-group custom-input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                <input type="text" class="form-control clsDatePicker" id="datepicker" placeholder="Click To Add Date" mandatory="yes"   maxlength="15" style="z-index: 9999999" >
                 <span id="datepicker-display"></span>
            </div>       
        
            <label for="budget">Approximate Budget<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
                <input type="text" class="form-control" id="budget" placeholder="Approximate Budget" onblur="isphonenumber(document.getElementById(this.id))"  maxlength="9" mandatory="yes">
                <span id="budget-display"></span>
            </div>
     
            <label for="deliverylocation">Delivery Location<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                <input type="text" class="form-control" id="deliverylocation" placeholder="Delivery Location"  maxlength="30" mandatory="yes">
                 <span id="deliverylocation-display"></span>
            </div>
            
             <label for="frequency">Frequency<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-sort-by-attributes"></span></span>
                <input type="text" class="form-control" id="frequency" placeholder="Frequency"  maxlength="30" mandatory="yes">
                 <span id="frequency-display"></span>
            </div>               
     
             <label for="reasonforpurchase">Reason For Purchase<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
                <input type="text" class="form-control" id="reasonforpurchase" placeholder="Reason For Purchase"  maxlength="30" mandatory="yes">
                 <span id="reasonforpurchase-display"></span>
            </div>  
     
             <label for="anyspecialinstruction">Any Special Instruction<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span> 
               <textarea rows="3" class="form-control" id="anyspecialinstruction" placeholder="Any Special Instruction"  mandatory="yes" wrap=physical  onKeyDown="textCounter(this.form.anyspecialinstruction,this.form.remLen,200);" onKeyUp="textCounter(this.form.anyspecialinstruction,this.form.remLen,200);"></textarea>
               <input readonly class="form-control" type=text name=remLen size=3 maxlength=3 value="200"> characters left<br>
               <span id="anyspecialinstruction-display"></span>
            </div> 
                
            <button type="button" class="btn btn-warning"  onclick="supplierenquiry(this.form.name)" mandatory="no">Submit</button>
            <span class="error" style="display:none">
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> Form was not saved. Please try again later.
            </div>
            </span>
            <span  class="success" style="display:none"> 
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> Form was saved successfully. Please check your email for details.
            </div>
           </span>
           <input type="hidden" value="<?php echo($scode) ?>" name="suppliercode" id="suppliercode" >
           <input type="hidden" value="<?php echo($sname) ?>" name="suppliername" id="suppliername">
           <input type="hidden" value="<?php echo($pcode) ?>" name="productcode" id="productcode" >
           <input type="hidden" value="<?php echo($pname) ?>" name="productname" id="productname">
            <input type="hidden" value="<?php echo($supplierenquirynumber) ?>" name="enquirynumber" id="enquirynumber" >
           <input type="hidden" value="<?php echo($myserverlink) ?>" name="serverlink" id="serverlink" />
       
       
        </form>

    </div>

			   <script>
               $(function() {
               $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+6M" });
                $( "#datepicker" ).datepicker({changeMonth: true, changeYear: true});
                $( "#datepicker" ).datepicker( "option", "dateFormat", "mm-dd-yy" );
                $( "#datepicker" ).datepicker( "option", "showAnim","fold" );
                });
                                          
                $(function() {
                $("body").delegate("#dateneeded", "focusin", function(){
                    $(this).dateneeded();
                });
                });
                    
                                
                $( document ).ready(function() {
                 $('.view-calender').datepicker({ format: "d MM, yy" }).on('changeDate', function(ev){
                $(this).datepicker('hide');
                });
                });
                
            
                </script>              
                                          
                              
                              
            </div>
                                 
	   </div>
     </div> <!-- this div ends the column sm 9 from the include file side-col2... -->
  </div>

</div>

                             
<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
