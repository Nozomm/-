
const pics_src = ["./img/chirotaro/1.JPG","./img/chirotaro/2.JPG","./img/chirotaro/3.JPG"];
let num = -1;
 
 
function slideshow_timer(){
 
  num = Math.floor(Math.random()*pics_src.length);
 
  document.getElementById("mypic").src = pics_src[num];
 
}
 
setInterval(slideshow_timer,1000);