<?php
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LetzBuild</title>

<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>

$scope.dataSets = {
    "names": ["Horace", "Slughorn", "Severus", "Snape"],
    "genders": ["Male", "Female"]
}

</script>
<!-- angular scripts ends-->
</head>

<body>


<div ng-repeat="(key, data) in dataSets">
  {{key}}
</div>

</body>
</html>
