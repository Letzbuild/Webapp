<?php
   
$sessionid=(session_id());
$uniqueid=(uniqid());

$randomkey="";
$combinedkey="";
$combinedkey=$sessionid . $uniqueid;
for($i = 0; $i <= 6; $i++){
	
    $randomkey .= $combinedkey[rand(0, strlen($combinedkey)-1)];
}
$supplierenquirynumber="sp".$randomkey;
$productenquirynumber="pr".$randomkey;
$quotationservicesenquirynumber="qs".$randomkey;
$bomenquirynumber="bm".$randomkey;
$procurementmanagementenquirynumber="pm".$randomkey;

/*server link*/
$serverlink="117.218.227.143:4567”;
//$serverlink="localhost:4567";

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