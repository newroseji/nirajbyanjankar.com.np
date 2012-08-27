var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
  if(popUpWin)
  {
    if(!popUpWin.closed) popUpWin.close();
  }
  popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menub ar=no,scrollbar=no,resizable=no,copyhistory=yes,width='+width+',height='+height+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

function random_banner(){
  var i=0;
  pic = new Array();
  pic[0] = '<IMG SRC="images/ThumbPics/pic1.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  pic[1] = '<IMG SRC="images/ThumbPics/pic2.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  pic[2] = '<IMG SRC="images/ThumbPics/pic3.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  pic[3] = '<IMG SRC="images/ThumbPics/pic4.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  pic[4] = '<IMG SRC="images/ThumbPics/pic5.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  pic[5] = '<IMG SRC="images/ThumbPics/pic6.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  pic[6] = '<IMG SRC="images/ThumbPics/pic7.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  pic[7] = '<IMG SRC="images/ThumbPics/pic8.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  pic[8] = '<IMG SRC="images/ThumbPics/pic9.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  pic[9] = '<IMG SRC="images/ThumbPics/pic10.gif" WIDTH=120 HEIGHT=120 class=bgGray  id=imgThmb>';
  today = new Date();
  i=today.getSeconds();
  n=0;
  n=pic.length;
  k=[i-Math.round((i-1)/n)*n];
  if(k<0 || k>=10){
	k=7;
  }
  return pic[k];
}
