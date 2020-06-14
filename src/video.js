async function hidev(){
  var x = document.getElementById("video");
  x.style.display = "none";
}
async function video() {
var x = document.getElementById("video");
if (!document.getElementById("video")) {
  document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/siimple@3.3.1/dist/siimple.min.css">');
  document.write('<style>body{ background-color: black;</style>');
  document.write('<br><br><br><center><div id="video">');
  document.write('<iframe width="560" height="315" src="https://www.youtube.com/embed/YR4RFkc_q9E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
  document.write('</div><br>');
  document.write('<a href="/shop.php"><div class="siimple-btn siimple-btn--success">Close</div></a></center>');
}else{
console.log("Unknown Error");
}
if (x.style.display === "none") {
  x.style.display = "block";
} else {
  x.style.display = "none";
}
}
