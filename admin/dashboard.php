<?php
include('adminvariables.php')

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
<script src= "../js/angular.min.js"></script>
<script>
function category($scope,$http) {
	 $http.get("http://localhost:4567/products/categories")
	.success(function(response) {$scope.names = response;});
}
</script>

</head>

<body>

<?php include('admintop.php') ?>



</body>
</html>
