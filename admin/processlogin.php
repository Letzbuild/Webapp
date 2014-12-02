
<?php
function gotopage()
{
	header('Location:');
}


if (empty($_POST['username'])) {$username='';} else {$username=$_POST["username"]; }
if (empty($_POST['password'])) {$password='';} else {$password=$_POST["password"]; }

echo md5($password);
gotopage();
?>