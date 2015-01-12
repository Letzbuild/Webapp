<?php 

$pagetab="";
$showsearch="false";
include('includes/sitevariables.php');

//get links
if (empty($_GET['linkid'])) {$linkid='';} else {$linkid=$_GET["linkid"]; }
if ($linkid=="quotationrequest")
{
	$submitlink="http://$serverlink/enquiries/qs/add";
	$displaytext="Quotation Request";
}
if ($linkid=="bom")
{
	$submitlink="http://$serverlink/enquiries/bom/add";
	$displaytext="Bill Of Material (BOM)";
}
if ($linkid=="procurementmanagement")
{
	$submitlink="http://$serverlink/enquiries/pms/add";
	$displaytext="Procurement Management";
}
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
</head>

<body>
<?php include('top.php')?>
<div class="container">
 
	<?php include('leftcolumn.php') ?>
	
	<div class="col-sm-10 ">
		<h4 class="pageheader"><span class="fa fa-edit fa-breadcrumb" ></span><?php echo($displaytext) ?></h4>
		<div class="breadcrumb-panel"><a href="index.php">Home</a><span class="fa fa-long-arrow-right fa-breadcrumb "></span><?php echo($displaytext) ?></div>
		<hr class="hr-header">
     
   	
	
    <form name="quotationservices" id="quotationservices" action="<?php echo($submitlink) ?>" method="post">

			
			<div class="col-sm-6">
			<label for="firstname">First Name</label>
         	<div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input name="firstname" type="text" class="form-control input-sm" id="firstname" placeholder="First Name" maxlength="30"  mandatory="yes" >
	            <span id="firstname-display"></span>
            </div>
			</div>
			
			<div class="col-sm-6">
             <label for="lastname">Last Name</label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input name="lastname" type="text" class="form-control input-sm" id="lastname" placeholder="Last Name" maxlength="30" mandatory="yes">
				<span id="lastname-display"></span>	
            </div>
			</div>
			
			<div class="col-sm-6">
            <label for="organisation">Organisation</label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
              	<input type="text" class="form-control input-sm" id="organisation" name="organisation" placeholder="Organisation" maxlength="30" mandatory="yes">
                <span id="organisation-display"></span>
            </div>
			</div>
	         
			<div class="col-sm-6">
            <label for="location">Location</label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
              	<input type="text" class="form-control input-sm" id="location" name="location" placeholder="Location"maxlength="30"  mandatory="yes">
                <span id="location-display"></span>
            </div>		 	
			</div>
			
			<div class="col-sm-6">
            <label for="mobilenumber">Mobile Number</label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
              	<input type="text" class="form-control input-sm" id="mobilenumber" name="mobilenumber"  placeholder="Mobile Number" onblur="isphonenumber(document.getElementById(this.id))" maxlength="10" mandatory="yes" >
            	<span id="mobilenumber-display"></span>
            </div>
			</div>
		     
			<div class="col-sm-6">			 
			<label for="email">Email</label>
			<div class="input-group custom-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="text" class="form-control input-sm" id="email"  name="email" placeholder="Email" onblur="echeck(document.getElementById(this.id))" maxlength="30" mandatory="yes">
            <span id="email-display"></span>
			</div> 
			</div>
       
			<div class="col-sm-12">
			<label for="enquiryheading">Enquiry Heading</label>
			<div class="input-group custom-input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
            <input type="text" class="form-control input-sm" id="enquiryheading"  name="enquiryheading" placeholder="Enquiry Heading" maxlength="30" mandatory="yes">
            <span id="enquiryheading-display"></span>
			</div>
			</div>
			
			<div class="col-sm-12">
			<div class="form-group custom-input-group">
            <label for="anyadditionalinstruction">Any Additional Instruction</label>
			<textarea rows="3" class="form-control input-sm" id="anyadditionalinstruction"  name="anyadditionalinstruction" placeholder="Any Additional Instruction" mandatory="yes"  wrap=physical  onKeyDown="textCounter(this.form.anyadditionalinstruction,this.form.remLen,200);" onKeyUp="textCounter(this.form.anyadditionalinstruction,this.form.remLen,200);"></textarea>
            <input readonly class="form-control input-sm" type=text name=remLen size=3 maxlength=3 value="200"> characters left<br>
            <span id="anyadditionalinstruction-display"></span>
			</div> 
			</div>
			
			<div class="col-sm-12">
			<input  type="button" class="btn btn-warning" value="Submit" class="submit" onClick="quotationenquiryform()"/>
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
			</div>
	 <input type="hidden" value="<?php echo($submitlink) ?>" name="submitlink" id="submitlink" >
     <input type="hidden" value="<?php echo($productenquirynumber) ?>" name="enquirynumber" id="enquirynumber" >
    </form>
  </div>
      
</div>
</div>
<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
