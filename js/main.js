// JavaScript Document
var imagecount=1;
var total=5;

function slid(x)
{
	var Image=document.getElementById("img");
	imagecount=imagecount +x;
	Image.src="img/img"+ imagecount +".jpg";
}

window.setInterval(
function slidA()
{
	var Image=document.getElementById("img");
	imagecount=imagecount +1;
	if(imagecount > total)
	{
		imagecount=1;
	}
	if(imagecount < 1)
	{
		imagecount=total;
	}
	Image.src="img/img"+ imagecount +".jpg";
},4000);
