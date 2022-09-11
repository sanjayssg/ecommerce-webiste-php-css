var pagetop,menu,yPos;
function yScroll(){
pagetop=document.getElementById('pagetop');
menu=document.getElementById('menu');
yPos=window.pageYOffset;
if(yPos>50){
pagetop.style.height="50px";
pagetop.style.paddingTop="1px";
menu.style.height="0px";
}else{
pagetop.style.height="90px";
pagetop.style.paddingTop="20px";
menu.style.height="40px";
}
}
window.addEventListener("scroll",yScroll);