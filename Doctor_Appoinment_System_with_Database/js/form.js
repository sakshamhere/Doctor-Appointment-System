
function validate()
{  

   
    
   

	let a=document.getElementById('name').value;
	if(a == "")
	{
		alert("please enter your Name");
		document.getElementById('name').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter your Name";
		return false;
	}

	 a=document.getElementById('mail').value;
	if(a == "")
	{
		alert("please enter your mail");
		document.getElementById('mail').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter your mail";
		return false;
	}
	var email=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(!email.test(a))
	{
		alert("enter a valid email")
		document.getElementById('mail').value='';
		document.getElementById('mail').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter a valid mail";
	}

	 a=document.getElementById('mob').value;
	if(a == "")
	{
		alert("please enter your mobile no");
		document.getElementById('mob').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter your mobile no";
		return false;
	}

	 a=document.getElementById('dob').value;
	if(a == "")
	{
		alert("please enter your date of birth");
		document.getElementById('dob').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter your date of birth";
		return false;
	}

	 a=document.getElementById('address').value;
	if(a == "")
	{
		alert("please enter your Address");
		document.getElementById('address').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter your Address";
		return false;
	}

      a=document.getElementById('city').value;
	if(a == "")
	{
		alert("please enter your City");
		document.getElementById('city').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter your City";
		return false;
	}

	 a=document.getElementById('password').value;
	if(a == "")
	{
		alert("please enter a password");
		document.getElementById('password').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter a password";
		return false;
	}

	 a=document.getElementById('conpassword').value;
	if(a == "")
	{
		alert("confirm your password");
		document.getElementById('conpassword').focus();
		var h=document.getElementById('warning')
		h.textContent="confirm your password";
		return false;
	}
    p=document.getElementById('password').value;
    cp=document.getElementById('conpassword').value;
   if(p!=cp)
   {
   	 alert("password you entered isn't same");
   	var h=document.getElementById('warning')
		h.textContent="password didn't match";

   	return false;
   }
     


	a=document.getElementById('designation').value;
	if(a == "")
	{
		alert("please enter a designation");
		document.getElementById('designation').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter a designation";
		return false;
	}


    a=document.getElementById('fee').value;
	if(a == "")
	{
		alert("please enter a fee");
		document.getElementById('fee').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter a fee";
		return false;
	}


	 a=document.getElementById('fileupload').value;
	if(a == '')
	{
		alert("select a profile pic");
		document.getElementById('fileupload').focus();
		var h=document.getElementById('warning')
		h.textContent="upload profile pic";
		return false;
	}
	var allowedextensions =/(\.jpg|\.jpeg|\.png|\.gif)$/i;
	if(!allowedextensions.exec(a))
	{
		alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.')
		return false;
	}

 

    a=document.getElementById('date').value;
	if(a == "")
	{
		alert("please enter a specific datetime");
		document.getElementById('date').focus();
		var h=document.getElementById('warning')
		h.textContent="please enter a specific datetime";
		return false;
	}

}

