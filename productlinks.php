<div class="category-tab">
	<ul class="nav nav-tabs nav-tabs-custom nav-justified" id="myTab" style="margin-bottom:15px;">
		<li  class="<?php echo($productdetailsactive) ?>"><a  href="productdetails.php?pcode=<?php echo(urlencode($pcode)) ?>&pname=<?php echo(urlencode($pname)) ?>&category=<?php echo(urlencode($category)) ?>&subcategory=<?php echo(urlencode($subcategory)) ?>&pagecount=<?php echo(urlencode($pagecount)) ?>&frompage=products" style="cursor:pointer;font-size:12px;"><span class="fa fa-database fa-navbar" ></span>Product Details</a></li>
		<li  class="<?php echo($productenquiryactive) ?>"><a  href="productenquiryform.php?pcode=<?php echo(urlencode($pcode)) ?>&pname=<?php echo(urlencode($pname)) ?>&category=<?php echo(urlencode($category)) ?>&subcategory=<?php echo(urlencode($subcategory)) ?>&pagecount=<?php echo(urlencode($pagecount)) ?>&frompage=products" style="cursor:pointer;font-size:12px;"><span class="fa fa-database fa-navbar" ></span>Product Enquiry</a></li>
		<li  class="<?php echo($suppliersactive) ?>"><a  href="suppliersforproduct.php?pcode=<?php echo(urlencode($pcode)) ?>&pname=<?php echo(urlencode($pname)) ?>&category=<?php echo(urlencode($category)) ?>&subcategory=<?php echo(urlencode($subcategory)) ?>&pagecount=<?php echo(urlencode($pagecount)) ?>&frompage=products" style="cursor:pointer;font-size:12px;"><span class="fa fa-user fa-navbar" ></span>Suppliers</a></li>
		<?php 
		if ($supplierenquiryshow=="true")
		{	
		?>
		<li  class="<?php echo($supplierenquiryactive) ?>"><a   style="font-size:12px;"><span class="fa fa-user fa-navbar" ></span>Supplier Enquiry</a></li>
		<?php
		}
		?>
	</ul>
</div>