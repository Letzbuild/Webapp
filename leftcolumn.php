    <!-- Column 1 side bar starts-->

	 	<div class="col-sm-2 padding-left-zero" >
			<a class="btn btn-default  btn-block btn-sm" href="quotationrequest.php?linkid=quotationrequest">Quotation Request</a>
			<a class="btn btn-default  btn-block btn-sm" href="quotationrequest.php?linkid=bom">BOM</a>
			<a class="btn btn-default  btn-block btn-sm" href="quotationrequest.php?linkid=procurementmanagement">Procurement Management</a>
		</div>
    <P class="visible-xs"><Br /></P>
	
  		<!--<div class="col-sm-9" > 
     		<div class="category-tab">
        	     <ul class="nav nav-tabs nav-justified" >
                    <li style="height:20px" class="<?php echo($pagetabproduct) ?>"><a href="index.php" style="cursor:pointer">Products</a></li>
                    <li style="height:20px" class="<?php echo($pagetabsuppliers) ?>"><a href="suppliers.php" style="cursor:pointer">Suppliers</a></li>
                    <li style="height:20px" class="<?php echo($pagetabservices) ?>"><a href="services.php" style="cursor:pointer">Services</a></li>
                </ul>
           </div> 
   	  	</div>
		
       
	   
	    <div class="col-sm-12">
        <?php 
		if ($showsearch=="true")
		{
		?>
        
          
           
            <div class="input-group custom-input-group">
                
              	<input name="lastname" type="text" class="form-control" id="searchbox" placeholder="Enter Search Criteria">
				<span class="input-group-addon"  style="cursor:pointer"><span class="glyphicon glyphicon-search"></span></span>
            </div>
         	
     	<?php
		}
		?>
		   </div>
         -->  
           <!-- note: the div column sm-9 is still open -->