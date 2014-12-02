    <!-- Column 1 side bar starts-->
 	<div class="col-sm-3">
	<a class="btn btn-danger btn-lg btn-block" href="quotationrequest.php?linkid=quotationrequest">Quotation Request</a>
    <a class="btn btn-danger btn-lg btn-block" href="quotationrequest.php?linkid=bom">BOM</a>
    <a class="btn btn-danger btn-lg btn-block" href="quotationrequest.php?linkid=procurementmanagement">Procurement Management</a>
    </div>
    <!-- Column 1 side bar ends--> 
    
	
  		<div class="col-sm-9"> 
     		<div class="category-tab">
        	  <ul class="nav nav-tabs" style="margin:0px;">
                <li style="width:33%;text-align:center"><a href="#" data-toggle="tab" >Products</a></li>
                <li style="width:33%;text-align:center"><a href="#" data-toggle="tab">Services</a></li>
                <li style="width:34%;text-align:center"><a href="#" data-toggle="tab">Suppliers</a></li>
              </ul>
            </div>
   	  	</div>

       <div class="col-sm-9">
	       <div class="col-sm-12">
        <?php 
		if ($showsearch=="true")
		{
		?>
        
          
             <br />
            <div class="input-group custom-input-group">
                
              	<input name="lastname" type="text" class="form-control" id="searchbox" placeholder="Enter Search Criteria">
				<span class="input-group-addon"  style="cursor:pointer"><span class="glyphicon glyphicon-search"></span></span>
            </div>
         	
     	<?php
		}
		?>
		   </div>
           
           <!-- note: the div column sm-9 is still open -->