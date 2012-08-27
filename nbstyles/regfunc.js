<!-- Hide from older browsers
	
//Check the enquiry form is filled in correctly
function CheckForm () { 
	//Initialise variables
	var errorMsg = "";

	var txtage,txtphone;

	txtage=document.frmEnquiry.txtage.value;
	txtphone=document.frmEnquiry.txtphone.value;

	var digits="0123456789";
	var temp1,temp2;
	
	for (var i=0;i<txtphone.length;i++){
		temp1=txtphone.substring(i,i+1);
		temp2=txtage.substring(i,i+1);
		
		if (digits.indexOf(temp1)==-1 || txtphone.length<7){
			errorMsg += "\n\tPhone Number \t\t- Phone Number is Invalid.";
		}

		if (digits.indexOf(temp2)==-1 || txtage.length<1){
			errorMsg += "\n\t\tAge \t\t- Age is Invalid.";
		}
	}



	//Check for a fName
	if (document.frmEnquiry.txtfname.value == ""){
		errorMsg += "\n\tFirst Name \t\t- Enter your First Name.";	
	}
	
	//Check for a lName
	if (document.frmEnquiry.txtlname.value == ""){
		errorMsg += "\n\tLast Name \t\t- Enter your Last Name.";	
	}
 	
	//Check for a password
	if (document.frmEnquiry.txtpw1.value == ""){
		errorMsg += "\n\tPassword \t\t- Enter your Password.";	
	}

	//Check for a password
	if (document.frmEnquiry.txtpw2.value == ""){
		errorMsg += "\n\tConfirm Password \t\t- Enter your Confirm Password.";	
	}

	//Comparing password
	if (document.frmEnquiry.txtpw2.value != document.frmEnquiry.txtpw1.value){
		errorMsg += "\n\tPassword \t\t- Password does not matchs.";	
	}

	//Check for a age
	if (document.frmEnquiry.txtage.value == ""){
		errorMsg += "\n\tAge \t\t\t- Enter your Age.";	
	}
	
	//Check for a address
	if (document.frmEnquiry.txtaddress.value == ""){
		errorMsg += "\n\tAddress \t\t\t- Enter your valid Address.";
	}
	
	//Check for an education level
	if (document.frmEnquiry.txtedu.value == "") { 
 		errorMsg += "\n\tEducation \t\t- Enter your Education level.";
	}


	//Check for an e-mail address and that it is valid
	if ((document.frmEnquiry.txtemail.value == "") || (document.frmEnquiry.txtemail.value.length > 0 && (document.frmEnquiry.txtemail.value.indexOf("@",0) == - 1 || document.frmEnquiry.txtemail.value.indexOf(".",0) == - 1))) { 
		errorMsg += "\n\tE-mail Address \t\t- Enter your valid e-mail address.";
	}
	
	
	//Check for a hobbies
	if (document.frmEnquiry.txthobbies.value == ""){
		errorMsg += "\n\tHobbies \t\t\t- Enter Hobbies.";	
	}

	//Check for a keyword
	if (document.frmEnquiry.txtkword.value == ""){
		errorMsg += "\n\tKeyword \t\t\t- Enter Keyword.";	
	}
	
	//If there is a problem with the form then display an error
	if (errorMsg != ""){
		msg = "______________________________________________________________\n\n";
		msg += "Your Information has not been sent because there are problem(s) with the form.\n";
		msg += "Please correct the problem(s) and re-submit the form.\n";
		msg += "______________________________________________________________\n\n";
		msg += "The following field(s) need to be corrected: -\n";
		
		errorMsg += alert(msg + errorMsg + "\n\n");
		return false;
	}
	
	return true;
}
// -->


// Copyright Niraj Byanjankar, 2006