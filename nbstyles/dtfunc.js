
function eng(){
document.dtfrm.txte.style.visibility='visible';
document.dtfrm.txtn.style.visibility='hidden';
document.dtfrm.txtf.value="eng";
document.dtfrm.txtn.value="";
document.dtfrm.txte.focus();
}

function nep(){
document.dtfrm.txtn.style.visibility='visible';
document.dtfrm.txte.style.visibility='hidden';
document.dtfrm.txtf.value="nep";
document.dtfrm.txte.value="";
document.dtfrm.txtn.focus();
}


function  valifrm(){
	var t1=document.dtfrm.txte.value;
	var t2=document.dtfrm.txtn.value;
	theradio=document.dtfrm.radiobutton;
	
	if(!theradio[0].checked && !theradio[1].checked)
	{
		alert('Please select the desired Date.')
		return false;
	}
	
	if(t1=="" &&  t2==""){
		alert ('Please enter the Date.')
		return false;
	}
}
