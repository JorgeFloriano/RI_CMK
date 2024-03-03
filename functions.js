function unchecked(x) {
   document.getElementsByName(x)[0].checked = false;
   document.getElementsByName(x)[1].checked = false;
   document.getElementsByName(x)[2].checked = false;
}
function check(ch1, nc1, nc2, nc3) {
   document.getElementById(ch1).style.color = "rgb(41, 50, 184)";
   document.getElementById(nc1).style.color = "rgb(198, 194, 194)";
   document.getElementById(nc2).style.color = "rgb(198, 194, 194)";
   document.getElementById(nc3).style.color = "rgb(198, 194, 194)";
}