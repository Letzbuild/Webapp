
                              <!-- modal for enquiry starts -->
                              <span data-placement="top" data-toggle="tooltip" title=""><a ng-href="#{{ subcategorydisp.code}}enquiry" class="btn btn-lg btn-default btn-sm" data-toggle="modal">Send Enquiry</a></span>
                             <div id="{{subcategorydisp.code}}enquiry" class="modal fade" style="z-index: 1040;">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                     
                                     	<div class="media">
                                            <div class="media-body">
                                            	 <ul class="breadcrumb"><span class="maincontentheading">You are here:</span> 
                                                        <li class="active maincontentheadinginner"><?php echo($subcategory) ?> </li>
                                                        <li class="active maincontentheadinginner">{{ subcategorydisp.name }}</li>
                                                        <li class="active maincontentheadinginner">Send Equiry</li>
                                                 </ul>
                                            	 
                                                 <h3 class="media-heading">{{ subcategorydisp.name }}</h3>
                                     			
                                                
                                                 
                                                 <h4>{{subcategorydisp.desc}}</h4>
                                     			 <h3>Code: <strong>{{subcategorydisp.code }}</strong> </h3>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                   <div class="modal-body">
                                   <?php include ('sendproductenquiryform.php') ?>
                                   </div>
                                     
                                  
                                    <div class="modal-footer"> To close this window click anywhere on the screen or press this button
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             
                             <script>
							   $(function() {
							   $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+6M" });
								$( "#datepicker" ).datepicker({changeMonth: true, changeYear: true});
								$( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
								$( "#datepicker" ).datepicker( "option", "showAnim","fold" );
								
							   
							  });
							  
							  $(function() {
								$("body").delegate("#dateneeded", "focusin", function(){
									$(this).dateneeded();
								});
							});
							
							
							$( document ).ready(function() {
							  $('.view-calender').datepicker({ format: "d MM, yy" }).on('changeDate', function(ev){
								$(this).datepicker('hide');
							});
							});

 							 </script>
                             
                              <!-- modal for enquiry ends -->