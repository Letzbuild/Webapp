function fieldcoloranderrormessage(fieldname,errormessage,errorcolor,errortype)
{

errormessagefieldname=fieldname + "-display";
document.getElementById(errormessagefieldname).innerHTML=errormessage;
document.getElementById(errormessagefieldname).style.color=errorcolor;
}

function quotationenquiryform()
{
var msg=''
var errtype='finished';

var firstname = $("#firstname").val();
var lastname = $("#lastname").val();
var organisation = $("#organisation").val();
var location = $("#location").val();
var mobilenumber = $("#mobilenumber").val();
var email = $("#email").val();
var enquiryheading = $("#enquiryheading").val();
var anyadditionalinstruction = $("#anyadditionalinstruction").val();
var submitlink = $("#submitlink").val();

var enquirynumber = $("#enquirynumber").val();

//initialize all fields before display everytime submit button is clicked
fieldcoloranderrormessage("firstname","","red","finished");
fieldcoloranderrormessage("lastname","","red","finished");
fieldcoloranderrormessage("organisation","","red","finished");
fieldcoloranderrormessage("location","","red","finished");
fieldcoloranderrormessage("mobilenumber","","red","finished");
fieldcoloranderrormessage("email","","red","finished");
fieldcoloranderrormessage("enquiryheading","","red","finished");
fieldcoloranderrormessage("anyadditionalinstruction","","red","finished");



if (firstname=='')
	{
		fieldcoloranderrormessage("firstname","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (lastname=='')
	{
		fieldcoloranderrormessage("lastname","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (organisation=='')
	{
		fieldcoloranderrormessage("organisation","This field is required","red","unfinished");
		errtype="unfinished"
	}
if (location=='')
	{
		fieldcoloranderrormessage("location","This field is required","red","unfinished");
		errtype="unfinished"
	}
if (mobilenumber=='')
	{
		fieldcoloranderrormessage("mobilenumber","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (email=='')
	{
		fieldcoloranderrormessage("email","This field is required","red","unfinished");
		errtype="unfinished"
	}
		
if (enquiryheading=='')
	{
		fieldcoloranderrormessage("enquiryheading","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (anyadditionalinstruction=='')
	{
		fieldcoloranderrormessage("anyadditionalinstruction","This field is required","red","unfinished");
		errtype="unfinished"
	}

//check if errors exist or not
if (errtype=='unfinished')
	{
		return false;
		//alert('Some information is Missing In Fields. These Fields Are Mandatory.' + '\n' + msg)
	}
if (errtype=='finished')
	{
		var dataString = 'firstname='+ firstname + '&lastname=' + lastname + '&organisation=' + organisation + '&location=' + location + '&mobilenumber=' + mobilenumber + '&email=' + email + '&enquiryheading=' + enquiryheading + '&anyadditionalinstruction=' + anyadditionalinstruction + '&enquirynumber=' + enquirynumber;
		/*$.ajax({
		type: "POST",
		url: submitlink,
		data: dataString,
		success: function(data) 
			{
			 document.getElementById('quotationservices').reset();
		     $('.success').fadeIn(200).show();
    		},
     	 error: function() 
		 	{
			$('.error').fadeIn(200).show();
			}
		});*/
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
			if (xmlhttp.readyState==2)
			{
			
			}	  
			 if (xmlhttp.readyState==3)
			{
			
			} 
			
			
			if (xmlhttp.readyState==4)
				{
				var responsetext=xmlhttp.responseText;
				if (responsetext=='"success"')
					{
					document.getElementById('quotationservices').reset();
					 $('.success').fadeIn(200).show();
					} 
				if (responsetext=='"failure"')
					{
					
					document.getElementById('quotationservices').reset();
					$('.error').fadeIn(200).show();
					} 
				}

		  }
		xmlhttp.open("POST",submitlink,true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(dataString);
		

	}		
}

<!-- quotation services ends -->

function isphonenumber(ele)
   {strString=ele.value
   var strValidChars = "0123456789";
   var strChar;
   var blnResult = true;

   if (strString.length == 0) 
   {
   return false;
   }
   //  test strString consists of valid characters listed above
   for (i = 0; i < strString.length && blnResult == true; i++)
      {
      strChar = strString.charAt(i);
	  
      errormessagefieldname=ele.id + "-display";
	  if (strValidChars.indexOf(strChar) == -1)
         {
         blnResult = false;
		 
		 document.getElementById(errormessagefieldname).innerHTML="Enter a valid  number";
		 document.getElementById(errormessagefieldname).style.color="#F00";
		 errtype="unfinished"
		 ele.focus();
		 ele.select()
         }
	 else
		 {	document.getElementById(errormessagefieldname).innerHTML="";
			document.getElementById(errormessagefieldname).style.color="#FFF";
			
			
		 }
      }
   return blnResult;
   
   }
   
 
 
/**
 * DHTML email validation script.
 */

function echeck(myid) {
		str=myid.value
		
		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
	    var emailresult = true;
	   
		if (str.indexOf(at)==-1){
		   emailresult=false;
			}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   emailresult=false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		   emailresult=false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		   emailresult=false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		   emailresult=false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		   emailresult=false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		   emailresult=false;
		 }
		 	errormessagefieldname=myid.id + "-display";
			if (str !='' && emailresult==false)
				{
				errormessagefieldname=myid.id + "-display";
				document.getElementById(errormessagefieldname).innerHTML="Enter a valid Email ID";
				document.getElementById(errormessagefieldname).style.color="#F00";
				errtype="unfinished"
				myid.focus();
		        myid.select();
				}
 			else
			 {	document.getElementById(errormessagefieldname).innerHTML="";
				document.getElementById(errormessagefieldname).style.color="#FFF";
				errtype="finished"
				
			 }
			return emailresult; 
	}


 

 
function productenquiry()
{
var msg=''
var errtype='finished';

var firstname = $("#firstname").val();
var lastname = $("#lastname").val();
var organisation = $("#organisation").val();
var mobilenumber = $("#mobilenumber").val();
var email = $("#email").val();
var quantity = $("#quantity").val();

var e = document.getElementById("specification");
var specification = e.options[e.selectedIndex].value;

var subject = $("#subject").val();
var datepicker = $("#datepicker").val();
var budget = $("#budget").val();
var deliverylocation = $("#deliverylocation").val();
var frequency = $("#frequency").val();
var reasonforpurchase = $("#reasonforpurchase").val();
var anyspecialinstruction = $("#anyspecialinstruction").val();

var enquirynumber = $("#enquirynumber").val();
var productcode = $("#productcode").val();
var serverlink = $("#serverlink").val();

fieldcoloranderrormessage("firstname","","red","finished");
fieldcoloranderrormessage("lastname","","red","finished");
fieldcoloranderrormessage("organisation","","red","finished");
fieldcoloranderrormessage("mobilenumber","","red","finished");
fieldcoloranderrormessage("email","","red","finished");
fieldcoloranderrormessage("quantity","","red","finished");
fieldcoloranderrormessage("specification","","red","finished");
fieldcoloranderrormessage("subject","","red","finished");
fieldcoloranderrormessage("datepicker","","red","finished");
fieldcoloranderrormessage("budget","","red","finished");
fieldcoloranderrormessage("deliverylocation","","red","finished");
fieldcoloranderrormessage("frequency","","red","finished");
fieldcoloranderrormessage("reasonforpurchase","","red","finished");
fieldcoloranderrormessage("anyspecialinstruction","","red","finished");


if (firstname=='')
	{
		fieldcoloranderrormessage("firstname","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (lastname=='')
	{
		fieldcoloranderrormessage("lastname","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (organisation=='')
	{
		fieldcoloranderrormessage("organisation","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (mobilenumber=='')
	{
		fieldcoloranderrormessage("mobilenumber","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (email=='')
	{
		fieldcoloranderrormessage("email","This field is required","red","unfinished");
		errtype="unfinished"
	}
		
if (quantity=='')
	{
		fieldcoloranderrormessage("quantity","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (specification=="none" )
	{
		fieldcoloranderrormessage("specification","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (subject=='')
	{
		fieldcoloranderrormessage("subject","This field is required","red","unfinished");
		errtype="unfinished"
	}
			
if (datepicker=='')
	{
		fieldcoloranderrormessage("datepicker","This field is required","red","unfinished");
		errtype="unfinished"
	}
	
if (budget=='')
	{
		fieldcoloranderrormessage("budget","This field is required","red","unfinished");
		errtype="unfinished"
	}
			
if (deliverylocation=='')
	{
		fieldcoloranderrormessage("deliverylocation","This field is required","red","unfinished");
		errtype="unfinished"
	}
	
if (frequency=='')
	{
		fieldcoloranderrormessage("frequency","This field is required","red","unfinished");
		errtype="unfinished"
	}
	
if (reasonforpurchase=='')
	{
		fieldcoloranderrormessage("reasonforpurchase","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (anyspecialinstruction=='')
	{
		fieldcoloranderrormessage("anyspecialinstruction","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (errtype=='unfinished')
	{
		//alert('Some information is Missing In Fields. These Fields Are Mandatory.' + '\n' + msg)
	}
if (errtype=='finished')
	{
		
		
		var dataString = 'firstname='+ firstname + '&lastname=' + lastname + '&organisation=' + organisation + '&mobilenumber=' + mobilenumber + '&email=' + email + '&quantity=' + quantity + '&specification=' + specification + '&subject=' + subject + '&datepicker=' + datepicker + '&approximatebudget=' + budget + '&deliverylocation=' + deliverylocation + '&frequency=' + frequency + '&reasonforpurchase=' + reasonforpurchase + '&anyspecialinstruction=' + anyspecialinstruction + '&enquirynumber=' + enquirynumber + '&pcode=' + productcode;
		
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
			if (xmlhttp.readyState==2)
			{
			var responsetext=xmlhttp.responseText;
			//alert("2: " + responsetext)
			}	  
			 if (xmlhttp.readyState==3)
			{
			var responsetext=xmlhttp.responseText;
			//alert("3: " + responsetext)
			} 
			
			
			if (xmlhttp.readyState==4)
				{
				var responsetext=xmlhttp.responseText;
				//alert("4: " + responsetext)
				if (responsetext=='"success"')
					{
					document.getElementById('productenquiryform').reset();
					 $('.success').fadeIn(200).show();
					} 
				if (responsetext=='"failure"')
					{
					
					document.getElementById('quotationservices').reset();
					$('.error').fadeIn(200).show();
					} 
				}

		  }
		xmlhttp.open("POST",serverlink,true);
		//xmlhttp.setRequestHeader('Access-Control-Allow-Origin', '*');
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(dataString);

	}		
}


//register page scripts
function textCounter(field, countfield, maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else 
countfield.value = maxlimit - field.value.length;
}


function supplierenquiry()
{
var msg=''
var errtype='finished';
alert("entered");
var firstname = $("#firstname").val();
var lastname = $("#lastname").val();
var organisation = $("#organisation").val();
var mobilenumber = $("#mobilenumber").val();
var email = $("#email").val();
var quantity = $("#quantity").val();

var e = document.getElementById("specification");
var specification = e.options[e.selectedIndex].value;

var subject = $("#subject").val();
var datepicker = $("#datepicker").val();
var budget = $("#budget").val();
var deliverylocation = $("#deliverylocation").val();
var frequency = $("#frequency").val();
var reasonforpurchase = $("#reasonforpurchase").val();
var anyspecialinstruction = $("#anyspecialinstruction").val();

var enquirynumber = $("#enquirynumber").val();
var productcode = $("#suppliercode").val();
var serverlink = $("#serverlink").val();

fieldcoloranderrormessage("firstname","","red","finished");
fieldcoloranderrormessage("lastname","","red","finished");
fieldcoloranderrormessage("organisation","","red","finished");
fieldcoloranderrormessage("mobilenumber","","red","finished");
fieldcoloranderrormessage("email","","red","finished");
fieldcoloranderrormessage("quantity","","red","finished");
fieldcoloranderrormessage("specification","","red","finished");
fieldcoloranderrormessage("subject","","red","finished");
fieldcoloranderrormessage("datepicker","","red","finished");
fieldcoloranderrormessage("budget","","red","finished");
fieldcoloranderrormessage("deliverylocation","","red","finished");
fieldcoloranderrormessage("frequency","","red","finished");
fieldcoloranderrormessage("reasonforpurchase","","red","finished");
fieldcoloranderrormessage("anyspecialinstruction","","red","finished");


if (firstname=='')
	{
		fieldcoloranderrormessage("firstname","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (lastname=='')
	{
		fieldcoloranderrormessage("lastname","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (organisation=='')
	{
		fieldcoloranderrormessage("organisation","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (mobilenumber=='')
	{
		fieldcoloranderrormessage("mobilenumber","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (email=='')
	{
		fieldcoloranderrormessage("email","This field is required","red","unfinished");
		errtype="unfinished"
	}
		
if (quantity=='')
	{
		fieldcoloranderrormessage("quantity","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (specification=="none" )
	{
		fieldcoloranderrormessage("specification","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (subject=='')
	{
		fieldcoloranderrormessage("subject","This field is required","red","unfinished");
		errtype="unfinished"
	}
			
if (datepicker=='')
	{
		fieldcoloranderrormessage("datepicker","This field is required","red","unfinished");
		errtype="unfinished"
	}
	
if (budget=='')
	{
		fieldcoloranderrormessage("budget","This field is required","red","unfinished");
		errtype="unfinished"
	}
			
if (deliverylocation=='')
	{
		fieldcoloranderrormessage("deliverylocation","This field is required","red","unfinished");
		errtype="unfinished"
	}
	
if (frequency=='')
	{
		fieldcoloranderrormessage("frequency","This field is required","red","unfinished");
		errtype="unfinished"
	}
	
if (reasonforpurchase=='')
	{
		fieldcoloranderrormessage("reasonforpurchase","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (anyspecialinstruction=='')
	{
		fieldcoloranderrormessage("anyspecialinstruction","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (errtype=='unfinished')
	{
		//alert('Some information is Missing In Fields. These Fields Are Mandatory.' + '\n' + msg)
	}
if (errtype=='finished')
	{
		
		
		var dataString = 'firstname='+ firstname + '&lastname=' + lastname + '&organisation=' + organisation + '&mobilenumber=' + mobilenumber + '&email=' + email + '&quantity=' + quantity + '&specification=' + specification + '&subject=' + subject + '&datepicker=' + datepicker + '&approximatebudget=' + budget + '&deliverylocation=' + deliverylocation + '&frequency=' + frequency + '&reasonforpurchase=' + reasonforpurchase + '&anyspecialinstruction=' + anyspecialinstruction + '&enquirynumber=' + enquirynumber + '&scode=' + productcode;
		
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
			if (xmlhttp.readyState==2)
			{
			var responsetext=xmlhttp.responseText;
			//alert("2: " + responsetext)
			}	  
			 if (xmlhttp.readyState==3)
			{
			var responsetext=xmlhttp.responseText;
			//alert("3: " + responsetext)
			} 
			
			
			if (xmlhttp.readyState==4)
				{
				var responsetext=xmlhttp.responseText;
				//alert("4: " + responsetext)
				if (responsetext=='"success"')
					{
					document.getElementById('supplierenquiryform').reset();
					 $('.success').fadeIn(200).show();
					} 
				if (responsetext=='"failure"')
					{
					
					document.getElementById('supplierenquiryform').reset();
					$('.error').fadeIn(200).show();
					} 
				}

		  }
		xmlhttp.open("POST",serverlink,true);
		//xmlhttp.setRequestHeader('Access-Control-Allow-Origin', '*');
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(dataString);

	}		
}
