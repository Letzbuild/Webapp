<?php
if (empty($_GET['category'])) {$category='';} else {$category=$_GET["category"]; }
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
//if (empty($_GET['pagecount'])) {$pagecount='';} else {$pagecount=$_GET["pagecount"]; }
$showsearch="false";
$pagetab="product";
$submitlink=urlencode($subcategory);
$mycategory=urlencode($category);
//$totalitemscount=urlencode($pagecount);
include('includes/sitevariables.php');
$myserverlink="http://$serverlink/products/categories?";


?>

<!DOCTYPE html>
<html ng-app="master-app">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LetzBuild</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/angular.min.js"></script>
	<script src="js/ui-bootstrap.js"></script>
	
	<script type="text/javaScript">
		var productname=""
	</script>
	<script type="text/javaScript">
		var myserverlink=<?php echo("'".$myserverlink."'") ?>
	</script>
	<script src="js/pagination-application.js"></script>
	

    
</head>
<body >

<?php include('top.php')?>
<div class="container">
 
	<?php include('leftcolumn.php') ?>
	
	<div class="col-sm-10 ">
		<h4 class="pageheader"><span class="fa fa-envelope fa-breadcrumb" ></span>Contact Us</h4>
		<div class="breadcrumb-panel"><span class="fa fa-long-arrow-right fa-breadcrumb "></span><a href="index.php">Home</a><span class="fa fa-long-arrow-right fa-breadcrumb "></span>Contact Us</div>
		<hr class="hr-header">
	
	
		<h3>Get in Touch</h3>
         <p>We are very approachable and would love to speak to you. Feel free to call or send us an email.</p>
                  
		<div class="col-sm-12 padding-left-zero" >	
           <div class="list-group">
				<span class="list-group-item list-group-item-warning">
					<span class="fa fa-building contactglyphfont" ></span><span class="contactspace"> Letzbuild India Private Limited </span>
				</span>
				<span class="list-group-item list-group-item-warning">
					<span class="fa fa-map-marker fa-breadcrumb" ></span><span class="contactspace"> Address No: 2/238, 1st Street, Muthaiah Nagar, Kovilambakkam, Chennai 600117 </span>
				</span>
				<span class="list-group-item list-group-item-success">
					<span class="glyphicon glyphicon-earphone contactglyphfont" ></span><span class="contactspace"> +91 44 2268 0518 ( Support ) </span>
				</span>
				<span href="#" class="list-group-item list-group-item-success">
					<span class="glyphicon glyphicon-earphone contactglyphfont" ></span><span class="contactspace"> +91 98410 30418 ( Sales ) </span>
				</span>
				<a href="mailto: admin@letzbuild.com?subject=Enquiry" class="list-group-item list-group-item-info">
					<span class="fa fa-envelope" ></span><span class="contactspace"> info@letzbuild.com</span>
				</a>
				<a href="http://www.letzbuild.com" target="_blank" class="list-group-item list-group-item-info">
				  <span class="fa fa-laptop fa-breadcrumb" ></span><span class="contactspace"> www.letzbuild.com</span>
				</a>
			</div> 
		</div>
		<div class="col-sm-12 padding-left-zero" >	
		<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?q=12.944933,80.182664&amp;num=1&amp;ie=UTF8&amp;ll=12.944816,80.182858&amp;spn=0.00469,0.008256&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?q=12.944933,80.182664&amp;num=1&amp;ie=UTF8&amp;ll=12.944816,80.182858&amp;spn=0.00469,0.008256&amp;t=m&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		</div>
		
		
    	
		<!--<div class="col-sm-5 padding-left-zero">	
                <span class="panel-title"><h3>How Can We Help?</h3></span>
                <form name="sharpsmarthomeenquiryform" id="sharpsmarthomeenquiryform"  method="post">

                    <label for="firstname">Name</label>
                    <div class="input-group custom-input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user glyphiconenquiryform"></span></span>
                        <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Name" maxlength="30"  mandatory="yes" >
                        <span id="firstname-display"></span>
                    </div>
                    
         
                  <label for="email">Email</label>
                  <div class="input-group custom-input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope glyphiconenquiryform"></span></span>
                    <input type="text" class="form-control" id="email"  name="email" placeholder="Email" onBlur="echeck(document.getElementById(this.id))" maxlength="30" mandatory="yes">
                    <span id="email-display"></span>
                </div> 	
               

                    <label for="mobilenumber">Contact Number</label>
                    <div class="input-group custom-input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone glyphiconenquiryform"></span></span>
                        <input type="text" class="form-control" id="mobilenumber" name="mobilenumber"  placeholder="Contact Number" onBlur="isphonenumber(document.getElementById(this.id))" maxlength="10" mandatory="yes" >
                        <span id="mobilenumber-display"></span>
                    </div>


              
                <div class="form-group">
                    <label for="anyadditionalinstruction">Requirements</label>
                   <textarea rows="3" class="form-control" id="anyadditionalinstruction"  name="anyadditionalinstruction" placeholder="Requirements" mandatory="yes"  wrap=physical  onKeyDown="textCounter(this.form.anyadditionalinstruction,this.form.remLen,200);" onKeyUp="textCounter(this.form.anyadditionalinstruction,this.form.remLen,200);"></textarea>
                    <input readonly class="form-control" type=text name=remLen size=3 maxlength=3 value="200"> characters left<br>
                    <span id="anyadditionalinstruction-display"></span>
                </div>   
        
                <input  type="button" class="btn btn-danger" value="Submit" onClick="enquiryform()"/>
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
           
            </form>
		</div>-->
		
		
		
	</div>
</div>
<?php include('footer.php') ?>
</body>
</html>
