<?php
session_start();    
$sessionid=(session_id());
$uniqueid=(uniqid());

$randomkey="";
$combinedkey="";
$combinedkey=$sessionid . $uniqueid;
for($i = 0; $i <= 6; $i++){
	
    $randomkey .= $combinedkey[rand(0, strlen($combinedkey)-1)];
}
$productenquirynumber="pr".$randomkey;
$quotationservicesenquirynumber="qs".$randomkey;
$bomenquirynumber="bm".$randomkey;
$procurementmanagementenquirynumber="pm".$randomkey;


/*page tabs*/
if ($pagetab=="product")
{
	$pagetabproduct="active";
}
else
{
	$pagetabproduct="";
}

if ($pagetab=="suppliers")
{
	$pagetabsuppliers="active";
}
else
{
	$pagetabsuppliers="";
}
if ($pagetab=="services")
{
	$pagetabservices="active";
}else
{
	$pagetabservices="";
}



?>