var xmlhttp;

function showUser(str)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
var url="chkajaxx.php";

url=url+"?q="+str;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function stateChanged()
{
if (xmlhttp.readyState==4)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}

function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
}



function eng(){
document.dtfrm.txte.style.visibility='visible';
document.dtfrm.txtn.style.visibility='hidden';
document.dtfrm.txtf.value="eng";
document.dtfrm.txtn.value="";
document.dtfrm.frmSend.value="Convert to Nepali Date";
document.dtfrm.txte.focus();
}

function nep(){
document.dtfrm.txtn.style.visibility='visible';
document.dtfrm.txte.style.visibility='hidden';
document.dtfrm.txtf.value="nep";
document.dtfrm.txte.value="";
document.dtfrm.frmSend.value="Convert to English Date";
document.dtfrm.txtn.focus();
}


function  valifrm(){
	var t1=document.dtfrm.txte.value;
	var t2=document.dtfrm.txtn.value;
	theradio=document.dtfrm.radiobutton;
   
	var strr;
	if(!theradio[0].checked && !theradio[1].checked)
	{
		alert('Please select the desired Date Type.')
		return false;
	}
	
	if(t1=="" &&  t2==""){
		alert ('Please enter the Date in MM/DD/YYYY format.' )
		return false;
	}
	
	if(theradio[0].checked)
	{
		strr="eng-" + document.dtfrm.txte.value;
	}
	else if(theradio[1].checked)
	{
		strr="nep-" + document.dtfrm.txtn.value;
	}

	showUser(strr);		
		
}
