function unhide2(divID) {
	hideall2();
	
	var item = document.getElementById(divID);
	if (item) {
		item.className=(item.className=='hidden')?'unhidden':'unhidden';
	}
}

function hideall2(){
var div21= document.getElementById('T2Sec1');
if (div21) {
    div21.className=(div21.className=='unhidden')?'hidden':'hidden';
  }
var div22= document.getElementById('T2Sec2');
if (div22) {
    div22.className=(div22.className=='unhidden')?'hidden':'hidden';
  }
  
var div23= document.getElementById('T2Sec3');
if (div23) {
    div23.className=(div23.className=='unhidden')?'hidden':'hidden';
  }
var div24= document.getElementById('T2Sec4');
if (div24) {
    div24.className=(div24.className=='unhidden')?'hidden':'hidden';
  }
var div25= document.getElementById('T2Sec5');
if (div25) {
    div25.className=(div25.className=='unhidden')?'hidden':'hidden';
  }  

}

