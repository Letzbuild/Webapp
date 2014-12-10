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
                                             	<div class="thumbnail"><img ng-src="images/productimages/{{subcategorydisp.url}}" err-SRC="images/productimages/noimage.jpg" class="media-object"></div>
                                            </a>
                                            <div class="media-body">
                                            	
                                                    <ul class="breadcrumb"><span class="maincontentheading">You are here:</span> 
                                                        <li class="active maincontentheadinginner"><?php echo($subcategory) ?></li>
                                                        <li class="active maincontentheadinginner">{{ subcategorydisp.name }}</li>
                                                        
                                                        
                                                     </ul>
                                                 <h3 class="media-heading">{{ subcategorydisp.name }}</h3>
                                     			 <h4>{{subcategorydisp.desc}}</h4>
                                     			 <h3>Code: <strong>{{subcategorydisp.code }}</strong> 
                                                  <span data-placement="top" data-toggle="tooltip" title=""><a ng-href="#{{ subcategorydisp.code}}enquiry" class="btn btn-lg btn-default btn-sm pull-right" data-toggle="modal">Send Enquiry</a></span></h3>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                   
                                      <div class="modal-body">
                                         
                                          <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <h1 class="panel-title">Specifications</h1>
                                                </div>
                                                
                                                <div   ng:repeat="(key, value) in subcategorydisp.specs">
                                                	<span class="list-group-item">{{key}} <span class="pull-right"> {{value}} </span></span>
                                        		</div>
                                          </div>
                                         
                                          <div class="panel panel-default panel-success">
                                                <div class="panel-heading ">
                                                   <h1 class="panel-title">Star Suppliers</h1>
                                                </div>
                                               
                                                
                                                <div class="panel-body"  ng:repeat="child in subcategorydisp.starSuppliers">
                                                	<li style="padding:-10px;margin:-10px;">{{child.name}}</li>
                                        		</div>
                                                <div class="panel-body">
                                                   <a ng-href="suppliersshow.php?pcode={{ child.cat | encodeURIComponent }}" class="btn btn-lg btn-default btn-sm" >View More Suppliers</a>
                                                </div>
                                          </div> 
                                          
                                           <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h1 class="panel-title">Manufacturers</h1>
                                                </div>
                                                <div class="panel-body"  ng:repeat="child in subcategorydisp.manufacturers">
                                                	<li style="padding:-10px;margin:-10px;">{{child}}</li>
                                        		</div>
                                          </div>
                                         
                                          <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h1 class="panel-title">Purpose</h1></span>
                                                </div>
                                                <div class="panel-body"  ng:repeat="child in subcategorydisp.purpose">
                                                	<li style="padding:-10px;margin:-10px;">{{child}}</li>
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