
function checkform () { 

	//Initialise variables
	var errorMsg = "";


	var txtphone;
	var flg=0;

	txtphone=document.frmEnquiry.txttel.value;
	

	if (txtphone!=""){
		var digits="0123456789";
		var temp1;
	
		for (var i=0;i<txtphone.length;i++){
			temp1=txtphone.substring(i,i+1);
		
		
			if (digits.indexOf(temp1)==-1 || txtphone.length<7){
				flg=1;
			}
		}
	}

	if(flg==1){
		errorMsg += "\n\tPhone Number \t- Phone Number is Invalid.";
	}

	//Check for a Name
	if (document.frmEnquiry.txtname.value == ""){
		errorMsg += "\n\tFull Name \t- Enter your Full Name.";	
	}
 	
	//Check for an e-mail address and that it is valid
	if ((document.frmEnquiry.txtemail.value == "") || (document.frmEnquiry.txtemail.value.length > 0 && (document.frmEnquiry.txtemail.value.indexOf("@",0) == - 1 || document.frmEnquiry.txtemail.value.indexOf(".",0) == - 1))) { 
		errorMsg += "\n\tE-mail \t\t- Enter your valid e-mail address.";
	}
	
	
	//Check for an subject
	if (document.frmEnquiry.txtsub.value == "") { 
 		errorMsg += "\n\tSubject \t\t- Enter Subject.";
	}
	
	//Check for a comments
	if (document.frmEnquiry.txtcom.value == ""){
		errorMsg += "\n\tComments \t- Enter comments.";	
	}

	
	//If there is aproblem with the form then display an error
	if (errorMsg != ""){
		msg = "______________________________________________________________\n\n";
		msg += "Your Feedback has not been sent because there are problem(s) with the form.\n";
		msg += "Please correct the problem(s) and re-submit the form.\n";
		msg += "______________________________________________________________\n\n";
		msg += "The following field(s) need to be corrected: -\n";
		
		errorMsg += alert(msg + errorMsg + "\n\n");
		return false;
	}
	
	return true;
}



