function countdown(){
var time=new Date("December 25, 2016 00:01:00");
var now=new Date();
var timediff=time.getTime() - now.getTime();
if(timediff<=0){
clearTimeout(timer);
document.write("gdh");
}
var seconds=Math.floor(timediff / 1000);
var minutes=Math.floor(seconds / 60);
var hours=Math.floor(minutes / 60);
var days=Math.floor(hours / 24);
hours %=24;
minutes %=60;
seconds %=60;

document.getElementById("days").innerHTML=days;
document.getElementById("hours").innerHTML=hours;
document.getElementById("minutes").innerHTML=minutes;
document.getElementById("seconds").innerHTML=seconds;

var timer=setTimeout('countdown()',1000);
}