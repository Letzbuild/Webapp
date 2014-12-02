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