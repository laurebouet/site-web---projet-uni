// background accueil

var diapo = ['1.jpg', '2.jpg','3.jpeg', '4.jpg','5.jpg'];
var img = document.getElementById("img");
function diapoimg(n){
  var n = Math.floor(Math.random()*diapo.length);
  img.style.backgroundImage = 'linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("./images/'+diapo[n]+'")';
}

var change = false;
function set(){
  window.setTimeout( "set()", 5000);
  newImage = change ? diapoimg(): diapoimg();
  change = !change;
  document.getElementById('img').style.backgroundImage = newImage;
}
set();