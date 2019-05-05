$(document).ready(function(){
    setInterval(function(){
      $("#pil").animate({height: "120px",width:"270px"},500);
      $("#pil").animate({height: "100px",width:"250px"},500);
    },1000);
});