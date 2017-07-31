function validateform(){  
var fname=document.myform.name.value;  
var lname=document.myform.name.value;
var contact01=document.myform.name.value;
var address=document.myform.name.value;  
  
if (fname==null || fname==""){  
  alert("First Name can't be blank");  
	if(fname.length>20){
		alert("First Name must be less than 20 characters");
		return false;
	}
  return false;  
}else if(lname==null || lname==""){  
  alert("Last Name Can't be blank");
	if(lname.length>20){
		alert("Last Name must be less than 20 characters");
		return false;
	}
  return false;  
  }  
}else if(address==null || address==""){
	alert("Address can't be blank");
	return false;
}else if(contact01==null || contact01==""){
	alert("You have to provide atleast your 1st Mobile Number");
	if(contact01.length>10 || contact01<8){
		alert("Please provide valid Contact Number");
	}
}