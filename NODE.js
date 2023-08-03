var radomNumber1 = Math.floor(Math.random()*6+1)
imageString1 = "images/dice"+radomNumber1+".png"
image1=document.querySelectorAll(".img")[0]
image1.setAttribute("src", imageString1)

var radomNumber2 = Math.floor (Math.random()*6+1)
imageString2 = "images/dice"+radomNumber2+".png"
image1=document.querySelectorAll(".img")[1]
image1.setAttribute("src", imageString2)

$(document).ready(function(){
    $("#reset").click(function(){ 
     location.reload();
     });
   });

if (radomNumber1 > radomNumber2){
 "jogador 1 ganhou"
 }else{
    "jogador 2 ganhou"
 }