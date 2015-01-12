<?php
$pagetab="";
$showsearch="false";
include('../includes/sitevariables.php');
$myserverlink="http://$serverlink/enquiries/product/retrieve?";
?>

<html ng-app="master-app">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LetzBuild Admin</title>
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../css/main.css">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/admin.js"></script>
<script src= "../js/angular.min.js"></script>
<script src="../js/ui-bootstrap.js"></script>
	
	<script type="text/javaScript">
		var productname=""
	</script>
	<script type="text/javaScript">
		var myserverlink=<?php echo("'".$myserverlink."'") ?>
	</script>
	<script src="../js/pagination-application.js"></script>
</head>

<body>

<?php include('admintop.php') ?>


<div class="col-sm-12" style="margin:5px;"><Br>
	<h4 class="pageheader"><span class="fa fa-database fa-breadcrumb" ></span>Product Enquiry</h4><br>
	    
	<div ng-controller="master-control" data-ng-init="setPage(bigCurrentPage)" >
		<pagination total-items="bigTotalItems"  ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm pagination-header" boundary-links="true" rotate="false" num-pages="numPages" items-per-page="itemsperpage" ng-click="setPage(bigCurrentPage)"></pagination>
			
    						<div class="table-responsive"> 
							 <Br><table class="table table-striped table-hover table-condensed" >
                                <thead>
                                    <tr class="info">
                                        <th>Customer Name</th>
                                        <th>Product Code</th>
										<th>Product Name</th>
                                        <th>Enquiry Number</th>
                                        <th>Enquiry Date</th>
                                        <th>Mobile Number</th>
                                        <th>Date Needed</th>
                                    </tr>
                                </thead>
								
                                <tbody>
                                	<a >
                                   <tr ng:repeat="entry in returnedlist.result" ng-href="#{{ entry.enqno }}" data-toggle="modal" ng-show="dataLoaded" style="cursor:pointer">
                                    <td>{{entry.fname}}&nbsp;{{entry.lname}}</td>
                                    <td>{{entry.pcode}}</td>
									<td>{{entry.pname}}</td>
                                    <td>{{entry.enqno}}</td>
                                    <td>{{entry.enqDate}}</td>
                                    <td>{{entry.mobile}}</td>
                                    <td>{{entry.needDate | date:"MM/dd/yyyy 'at' h:mma"}}</td>
                                    </tr>
                                    </a>
                                    
                                </tbody>
                            </table>                           
                        </div>            
						<?php include('pageloader.php') ?>

    
                     <!-- Modal HTML starts--> 
                     <div ng:repeat="entry in returnedlist.result">
                               <div id="{{ entry.enqno }}" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<div class="media">
											<a href="#" class="pull-left">
												<img ng-src="../images/productimages/{{items.url}}" err-SRC="../images/productimages/noimage.jpg" class="thumbnail"/>
											</a>
											<div class="media-body">
												<h5>Product Code: <strong>{{ entry.pcode }}</strong></h5>
												<h5>Product Name: <strong>{{ entry.pname }}</strong></h5>
												<h5>Enquiry Number:  <strong>{{ entry.enqno }}</strong></h5>
												<h5>Enquiry Created On:  <strong>{{ entry.enqDate }}</strong></h5>
											</div>
										</div>
									
										<div class="clearfix"></div>									
                                                                          
                                        <div class="table-responsive"> 
							 			<table class="table table-striped table-hover table-condensed">
                                        <tr><td>Customer Name</td><td>{{entry.fname}}&nbsp;{{entry.lname}}</td></tr>
                                        <tr><td>Organisation</td><td>{{entry.org}}</td></tr>
                                        <tr><td>Mobile Number</td><td>{{entry.mobile}}</td></tr>
                                        <tr><td>Email</td><td>{{entry.email}}</td></tr>
                                        <tr><td>Quantity</td><td>{{entry.qty}}</td></tr>
                                        <tr><td>Quantity Specification</td><td>{{entry.orderSpec}}</td></tr>
										<tr><td>Specification </td><td>{{entry.spec}}</td></tr>
										<tr><td>Dimension </td><td>{{entry.dim}}</td></tr>
                                        <tr><td>Subject</td><td>{{entry.sub}}</td></tr>
                                        <tr><td>Date Needed</td><td>{{entry.needDate}}</td></tr>
                                        <tr><td>Budget</td><td>{{entry.budget}}</td></tr>
                                        <tr><td>Location</td><td>{{entry.loc}}</td></tr>
                                        <tr><td>Frequency</td><td>{{entry.freq}}</td></tr>
                                        <tr><td>Reason For Purchase</td><td>{{entry.reason}}</td></tr>
                                        <tr><td>Special Instruction</td><td>{{entry.instr}}</td></tr>
                                      
                                        </table>
                                        </div>
                                      
                                    </div>
                                    <div class="modal-footer"> To close this window click anywhere on the screen or press this button
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                       </div>
                       <!-- Modal HTML ends--> 
    
    
    </div>
     <!-- display ends -->  
    
</div>
</body>
</html>
