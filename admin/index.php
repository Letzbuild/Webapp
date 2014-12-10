<?php
$pagetab="";
 include('../includes/sitevariables.php');
 $submitlink="http://$serverlink/users/";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LetzBuild Admin</title>
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../css/main.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/admin.js"></script>


</head>

<body>

<div class="col-sm-12 adminheader">
	<img src="../images/home/logo.png">
    <span><strong>Administration Back Office</strong></span>
</div>

<div class="container" style="padding-top:150px">
	<div class="row">
    	<div class="col-sm-4"></div>
        <div class="col-sm-4">
		<form name="loginform" id="loginform">
     		<label for="username">Email ID</label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input name="username" type="text" class="form-control" id="username"  placeholder="Email ID" maxlength="30"  mandatory="yes" >
	            <span id="username-display"></span>
            </div>
            
            <label for="password">Password</label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
              	<input name="password" type="password" class="form-control" id="password"  placeholder="Password" maxlength="30"  mandatory="yes" >
	            <span id="password-display"></span>
            </div>
             
          <input  type="button" class="btn btn-warning" value="Submit" class="submit" onClick="adminloginform()"/>
           <input type="hidden" value="<?php echo($submitlink) ?>" name="submitlink" id="submitlink" >
          
          <span class="error" style="display:none">
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Error!</strong> Username and Password do not match.
            </div>
            </span>
            <span  class="success" style="display:none"> 
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Login Successful!</strong>
            </div>
            </span>
          
          
   		 </form>
         
         <form name="userdetailform" id="userdetailform" action="dashboard.php" method="post">
         	<input type="hidden" value="" name="userid" id="userid">
         </form>
         
         
         </div>
         <div class="col-sm-4"></div>
	</div>
</div>

<!-- footer include -->
</body>
</html>
