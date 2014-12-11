<div class="pull-right"><i><h6>Fields with asterix are required</h6></i></div>
<div class="clearfix"></div>
<div class="formouter">
	
    <form name="productenquiryform" id="productenquiryform">

     		<label for="firstname" onkeyup="productenquiry(this.form.name)">First Name<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input type="text" class="form-control" id="firstname" placeholder="First Name"  maxlength="30" mandatory="yes" >
	            <span id="firstname-display"></span>
            </div>
			 	
       
            <label for="lastname">Last Name<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              	<input type="text" class="form-control" id="lastname" placeholder="Last Name" maxlength="30" mandatory="yes">
				<span id="lastname-display"></span>	
            </div>

            <label for="organisation">Organisation<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
              	<input type="text" class="form-control" id="organisation" placeholder="Organisation" maxlength="30" mandatory="yes">
                <span id="organisation-display"></span>
            </div>
			 	

            <label for="mobilenumber">Mobile Number<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
            <div class="input-group custom-input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
              	<input type="text" class="form-control" id="mobilenumber" placeholder="Mobile Number" onblur="isphonenumber(document.getElementById(this.id))" maxlength="10"  mandatory="yes" >
            	<span id="mobilenumber-display"></span>
            </div>
		  
          <label for="email">Email<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>    
       	  <div class="input-group custom-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="text" class="form-control" id="email" placeholder="Email" onblur="echeck(document.getElementById(this.id))" maxlength="30" mandatory="yes">
            <span id="email-display"></span>
         </div>
        
		<label for="quantity">Quantity<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
        <div class="input-group custom-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-align-justify"></span></span>
            <input type="text" class="form-control" id="quantity" placeholder="Quantity" maxlength="6"onblur="isphonenumber(document.getElementById(this.id))"  mandatory="yes">
            <span id="quantity-display"></span>
       </div>
       <!-- <div class="form-group">
                <label class="radio-inline">
                    <input type="radio" name="radioquantity" value="kilograms"> Kilograms
                <sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>

                <label class="radio-inline">
                    <input type="radio" name="radioquantity" value="metrictonnes"> Metric Tonnes
                <sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
        </div>-->
        
                                          
        
        
        <label for="specification">Quantity Specification<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
        <div class="input-group custom-input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-align-justify"></span></span>
         <select class="form-control"  id="specification" name="specification" mandatory="yes">
            <option value="none" selected>Select One</option>
            <option  ng:repeat="child in subcategorydisp.orderSpec" value="{{child}}">{{child}}</option>
         </select>
  		<span id="specification-display"></span>
        </div>
 
        <label for="subject">Subject<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
        <div class="input-group custom-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
            <input type="text" class="form-control" id="subject" placeholder="Subject" maxlength="30" mandatory="yes">
            <span id="subject-display"></span>
        </div>
        
         <label for="datepicker" control-label>Date Needed<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
         <div class="input-group custom-input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            <input type="text" class="form-control clsDatePicker" id="datepicker" placeholder="Click To Add Date" mandatory="yes"   maxlength="15" style="z-index: 9999999" >
             <span id="datepicker-display"></span>
        </div>       
        
        <label for="budget">Approximate Budget<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
        <div class="input-group custom-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
            <input type="text" class="form-control" id="budget" placeholder="Approximate Budget" onblur="isphonenumber(document.getElementById(this.id))"  maxlength="9" mandatory="yes">
            <span id="budget-display"></span>
        </div>
 
        <label for="deliverylocation">Delivery Location<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
        <div class="input-group custom-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
            <input type="text" class="form-control" id="deliverylocation" placeholder="Delivery Location"  maxlength="30" mandatory="yes">
             <span id="deliverylocation-display"></span>
        </div>
        
         <label for="frequency">Frequency<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
        <div class="input-group custom-input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-sort-by-attributes"></span></span>
            <input type="text" class="form-control" id="frequency" placeholder="Frequency"  maxlength="30" mandatory="yes">
             <span id="frequency-display"></span>
        </div>               
 
         <label for="reasonforpurchase">Reason For Purchase<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
        <div class="input-group custom-input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
            <input type="text" class="form-control" id="reasonforpurchase" placeholder="Reason For Purchase"  maxlength="30" mandatory="yes">
             <span id="reasonforpurchase-display"></span>
        </div>  
 
         <label for="anyspecialinstruction">Any Special Instruction<sup>&nbsp;<span class="glyphicon glyphicon-asterisk superclass"></span></sup></label>
        <div class="input-group custom-input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span> 
           <textarea rows="3" class="form-control" id="anyspecialinstruction" placeholder="Any Special Instruction"  mandatory="yes" wrap=physical  onKeyDown="textCounter(this.form.anyspecialinstruction,this.form.remLen,200);" onKeyUp="textCounter(this.form.anyspecialinstruction,this.form.remLen,200);"></textarea>
           <input readonly class="form-control" type=text name=remLen size=3 maxlength=3 value="200"> characters left<br>
           <span id="anyspecialinstruction-display"></span>
        </div> 
                
        <button type="button" class="btn btn-warning"  onclick="productenquiry(this.form.name)" mandatory="no">Submit</button>
        <span class="error" style="display:none">
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> Form was not saved. Please try again later.
        </div>
        </span>
        <span  class="success" style="display:none"> 
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> Form was saved successfully. Please check your email for details.
        </div>
       </span>
       <input type="hidden" value="<?php echo($productenquirynumber) ?>" name="enquirynumber" id="enquirynumber" >
       
       <input type="hidden" value="<?php echo($myserverlink) ?>" name="serverlink" id="serverlink" />
       
       
    </form>
</div>
