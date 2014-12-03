<?php
function gotopage()
{
	header('Location:../admin');
}
if (empty($_POST['userid'])) {$userid='';} else {$userid=$_POST["userid"]; }
if($userid=='' || $userid=="" || $userid==null)
{
	gotopage();
}
if($userid!='')
{
	
}


?>