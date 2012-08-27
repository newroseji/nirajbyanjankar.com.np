

function checkfp(){	

	var ee;
	

	ee=document.frmfp.txteml.value;

	
	if(ee==""){
		alert("Email is blank.");
		document.regfrm.txtemail.focus();
		return false;
	}
	
	if(ee.indexOf("@",0)==-1 || ee.indexOf(".",0)==-1){
		alert("Invalid Email Address.");
		document.frmfp.txteml.focus();
		return false;
	}
	
	

}

// copyright, 2010, NirajByanjankar.com.np