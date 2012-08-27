

function inited(){
		var dd=new Date();
		document.regfrm.txtdt.value=dd;
}
function checkterms(){	

	var fn,ln,aa,ee,ppw,cpw;
	fn=document.regfrm.txtfn.value;
	ln=document.regfrm.txtln.value;
	

	ee=document.regfrm.txtemail.value;

	ppw=document.regfrm.txtpw1.value;
	cpw=document.regfrm.txtpw2.value;

	if(fn==""){
		alert("First Name is blank.");
		document.regfrm.txtfn.focus();
		return false;
	}
	else if(ln==""){
		alert("Last Name is blank.");
		document.regfrm.txtln.focus();
		return false;
	}
	
	else if(ee==""){
		alert("Email is blank.");
		document.regfrm.txtemail.focus();
		return false;
	}
	
	else if(ppw==""){
		alert("Password is blank. It must be at least 6 characters.");
		document.regfrm.txtpw1.focus();
		return false;
	}
	else if(cpw==""){
		alert("Confirm password is blank. It must be at least 6 characters.");
		document.regfrm.txtpw2.focus();
		return false;
	}	
	
								
	if(ppw.length<6){
		alert("Password must be minimum length of 6 characters or less than 16 characters.");
		document.regfrm.txtpw1.focus();
		return false;
	}
	else if(cpw.length<6){
		alert("Password must be minimum length of 6 characters or less than 16 characters.");
		document.regfrm.txtpw2.focus();
		return false;
	}
	
	if(ppw!=cpw){
		alert("Password does not matched.");
		document.regfrm.txtpw2.focus();
		return false;
	}
	
	if(ee.indexOf("@",0)==-1 || ee.indexOf(".",0)==-1){
		alert("Invalid Email Address.");
		document.regfrm.txtemail.focus();
		return false;
	}
	
	
	if(document.regfrm.tc1.checked==false){
		alert('You must agree the terms and conditions before registering. Please check the checkbox if you agree.');

		return false;
	}

}


function checklogin(){	

	var em,pw;
	em=document.loginfrm.txtemail.value;
	pw=document.loginfrm.txtpw.value;

	if(em==""){
		alert("Email address is missing.");
		document.loginfrm.txtemail.focus();
		return false;
	}
	if(em.indexOf("@",0)==-1 || em.indexOf(".",0)==-1){
		alert("Invalid Email Address.");
		document.loginfrm.txtemail.focus();
		return false;
	}
	if(pw==""){
		alert("Password is missing.");
		document.loginfrm.txtpw.focus();
		return false;
	}
}


function checklogin2(){	

	var em,pw;
	em=document.loginfrm2.txtemail2.value;
	pw=document.loginfrm2.txtpw2.value;

	if(em==""){
		alert("Email address is missing.");
		document.loginfrm2.txtemail2.focus();
		return false;
	}
	if(em.indexOf("@",0)==-1 || em.indexOf(".",0)==-1){
		alert("Invalid Email Address.");
		document.loginfrm2.txtemail2.focus();
		return false;
	}
	if(pw==""){
		alert("Password is missing.");
		document.loginfrm2.txtpw2.focus();
		return false;
	}
}

// copyright, 2010, NirajByanjankar.com.np