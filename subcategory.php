<?php
if (empty($_GET['subcategory'])) {$subcategory='';} else {$subcategory=$_GET["subcategory"]; }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LetzBuild</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/main.css">
<link href="css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- angular scripts starts-->
<script src= "js/angular.min.js"></script>
<script>
function subcategory($scope,$http) {
	<!-- $http.get("subcategory.json")-->
	 $http.get("http://localhost:4567/products/retrieve?cat=<?php echo($subcategory) ?>&limit=10&page=1") 
	.success(function(response) {$scope.subcategorylist = response;});
}


</script>
<!-- angular scripts ends-->
<style>
.modal .modal-body {
    
    overflow-y: auto;
}
</style>
</head>

<body>
<?php include('top.php') ?>
<hr>
<div class="container">
  <div class="row" style="padding-top:15px"> 

	<?php include('sidel-col2topl-search.php') ?>

      <div  ng-app="" ng-controller="subcategory">
        <div  ng:repeat="subcategorydisp in subcategorylist">
          <div class="col-sm-4">
     
          	 	<div class="thumbnail">
                    <img src="images/productimages/{{subcategorydisp.name}}.jpg" alt="{{subcategorydisp.name}}">
                    <div class="caption">
                        <h3>{{subcategorydisp.name}}</h3>
                        <p>Code: <strong>{{subcategorydisp.code}}</strong></p>
                      
                            
                 			 <!-- Modal HTML starts--> 
                               <script> 
                               $(document).ready(function(){
                                $('[data-toggle="tooltip"]').tooltip({placement : 'top'});
                                });
                                </script>
                             
                             <span data-placement="top" data-toggle="tooltip" title=""><a ng-href="#{{ subcategorydisp.code}}" class="btn btn-lg btn-warning btn-sm" data-toggle="modal">View Details</a></span>
                             
                              <div id="{{subcategorydisp.code}}" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                     
                                     	<div class="media">
                                            <a href="#" class="pull-left">
                                                <div class="thumbnail"><img src="images/productimages/{{subcategorydisp.name}}.jpg" class="media-object"></div>
                                            </a>
                                            <div class="media-body">
                                            	 <h6><?php echo($subcategory) ?> > {{ subcategorydisp.name }} </h6> 
                                                 <h2 class="media-heading">{{ subcategorydisp.name }}</h2>
                                     			 <h4>{{subcategorydisp.desc}}</h4>
                                     			 <h3>Code: <strong>{{subcategorydisp.code }}</strong> </h3>
                                                  <span data-placement="top" data-toggle="tooltip" title=""><a ng-href="#{{ subcategorydisp.code}}enquiry" class="btn btn-lg btn-default btn-sm" data-toggle="modal">Send Enquiry</a></span>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                   
                                      <div class="modal-body">
                                         
                                          <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h1 class="panel-title">Purpose</h1>
                                                </div>
                                                <div class="panel-body"  ng:repeat="child in subcategorydisp.purpose">
                                                	<li style="padding-bottom:0px;margin:0px;">{{child}}</li>
                                        		</div>
                                          </div>
                                           <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <h1 class="panel-title">Specifications</h1>
                                                </div>
                                                <div class="panel-body">
                                                    <strong><i><span>Unit<span class="pull-right">Measurement</span></span></i></strong>
                                                </div>
                                                <div class="list-group"  ng:repeat="(key, value) in subcategorydisp.specs">
                                                	<span class="list-group-item">{{key}} <span class="pull-right"> {{value}} </span></span>
                                        		</div>
                                          </div>                                      
                                          <div class="panel panel-default panel-success">
                                                <div class="panel-heading ">
                                                    <h1 class="panel-title">Star Suppliers</h1>
                                                </div>
                                                <div class="panel-body">
                                                    <strong><i><span>Supplier<span class="pull-right">Code</span></span></i></strong>
                                                </div>
                                                <div class="list-group"  ng:repeat="child in subcategorydisp.starSuppliers">
                                                	<span class="list-group-item">{{child.name}}<span class="pull-right">{{child.scode}}</span></span>
                                        		</div>
                                          </div> 
                                   </div>
                                  
                                    <div class="modal-footer"> To close this window click anywhere on the screen or press this button
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Modal HTML ends-->            
                              
                              
                              <!-- modal for enquiry starts -->
                              <span data-placement="top" data-toggle="tooltip" title=""><a ng-href="#{{ subcategorydisp.code}}enquiry" class="btn btn-lg btn-default btn-sm" data-toggle="modal">Send Enquiry</a></span>
                             <div id="{{subcategorydisp.code}}enquiry" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                     
                                     	<div class="media">
                                            <div class="media-body">
                                            	<h2>Enquiry Form</h2>
                                            	 
                                                 <h2 class="media-heading">{{ subcategorydisp.name }}</h2>
                                     			 <h6><?php echo($subcategory) ?> > {{ subcategorydisp.name }} > Send Enquiry Form</h6> 
                                                 <h4>{{subcategorydisp.desc}}</h4>
                                     			 <h3>Code: <strong>{{subcategorydisp.code }}</strong> </h3>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                   
                                     
                                  
                                    <div class="modal-footer"> To close this window click anywhere on the screen or press this button
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             
                             
                             
                              <!-- modal for enquiry ends -->
                              
                              
                              
                              
                              
                    </div>
               </div>
       
         </div>
       </div>
     </div>
      
  </div>
</div>
<hr>
<!-- footer include -->
<?php include('footer.php') ?>
</body>
</html>
