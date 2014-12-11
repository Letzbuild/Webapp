<?php
 $pagetab="";
 $showsearch="false";
 include('../includes/sitevariables.php');

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
function enquiryform($scope,$http) {
	 $http.get("http://<?php echo($serverlink) ?>/enquiries/product/retrieve")
	.success(function(response) {$scope.enquirylist = response;});
}
</script>

</head>

<body>

<?php include('admintop.php') ?>


<div class="col-sm-12" >
	<h3>Product Enquiry List</h3>
    <ul class="breadcrumb breadcrumb-spacetop"><span class="maincontentheading">You are here:</span>
        <li class="active maincontentheadinginner">Enquiries</li>
        <li class="active maincontentheadinginner">Product Enquiry</li>
	 </ul>
     <!-- display starts -->
     <div  ng-app="" ng-controller="enquiryform">
       
          	 
							<div class="table-responsive"> 
							 <Br><table class="table table-striped table-hover table-condensed">
                                <thead>
                                    <tr class="warning">
                                        <th>Customer Name</th>
                                        <th>Product</th>
                                        <th>Enquiry Number</th>
                                        <th>Enquiry Date</th>
                                        <th>Mobile Number</th>
                                        <th>Date Needed</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<a >
                                   <tr ng:repeat="entry in enquirylist" ng-href="#{{ entry.enqno }}" data-toggle="modal" style="cursor:pointer">
                                    <td>{{entry.fname}}&nbsp;{{entry.lname}}</td>
                                    <td>{{entry.pcode}}</td>
                                    <td>{{entry.enqno}}</td>
                                    <td>{{entry.enqDate}}</td>
                                    <td>{{entry.mobile}}</td>
                                    <td>{{entry.needDate | date:"MM/dd/yyyy 'at' h:mma"}}</td>
                                    </tr>
                                    </a>
                                    
                                </tbody>
                            </table>                           
                        </div>            
            

    
                     <!-- Modal HTML starts--> 
                     <div ng:repeat="entry in enquirylist">
                               <div id="{{ entry.enqno }}" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Product Enquiry <small>for product </small> {{ entry.pcode }}</h4>
                                      
                                      <h5>Enquiry Number:  <strong>{{ entry.enqno }}</strong></h6>
                                      <h5>Enquiry Created On:  <strong>{{ entry.enqDate }}</strong></h6>
                                      
                                    </div>
                                    <div class="modal-body">
                                      
                                        <div class="table-responsive"> 
							 			<table class="table table-striped table-hover table-condensed">
                                        <tr><td>Customer Name</td><td>{{entry.fname}}&nbsp;{{entry.lname}}</td></tr>
                                        <tr><td>Organisation</td><td>{{entry.org}}</td></tr>
                                        <tr><td>Mobile Number</td><td>{{entry.mobile}}</td></tr>
                                        <tr><td>Email</td><td>{{entry.email}}</td></tr>
                                        <tr><td>Quantity</td><td>{{entry.qty}}</td></tr>
                                        <tr><td>Order Specification</td><td>{{entry.orderSpec}}</td></tr>
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
