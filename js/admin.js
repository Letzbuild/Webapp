function fieldcoloranderrormessage(fieldname,errormessage,errorcolor,errortype)
{

errormessagefieldname=fieldname + "-display";
document.getElementById(errormessagefieldname).innerHTML=errormessage;
document.getElementById(errormessagefieldname).style.color=errorcolor;
}

function adminloginform()
{
var msg=''
var errtype='finished';

var username = $("#username").val();
var password = $("#password").val();

//initialize all fields before display everytime submit button is clicked
fieldcoloranderrormessage("username","","red","finished");
fieldcoloranderrormessage("password","","red","finished");


if (username=='')
	{
		fieldcoloranderrormessage("username","This field is required","red","unfinished");
		errtype="unfinished"
	}

if (password=='')
	{
		fieldcoloranderrormessage("password","This field is required","red","unfinished");
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
		var encryptpassword=md5(password)
		var dataString = 'email='+ username + '&password=' + encryptpassword;

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
			alert("2")
			}	  
			 if (xmlhttp.readyState==3)
			{
			alert("3")
			} 
			
			
			if (xmlhttp.readyState==4)
				{
				var responsetext=xmlhttp.responseText;
					{
						
					alert(responsetext)
					document.getElementById('loginform').reset();
					$('.success').fadeIn(200).show();
						
					}

				}

		  }
		xmlhttp.open("POST","http://localhost:4567/buyers/add",true);
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



//register page scripts
function textCounter(field, countfield, maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else 
countfield.value = maxlimit - field.value.length;
}