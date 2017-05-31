function ajax() {
  var lengte = document.getElementById("lengte").value;
  var gewicht = document.getElementById("gewicht").value;
  if (window.XMLHttpRequest) {

      var xhttp = new XMLHttpRequest();
  } else {

      var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("result").innerHTML = xhttp.responseText;
    }
};

xhttp.open("GET", "bereken.php?lengte="+ lengte + "&gewicht=" + gewicht, true);
xhttp.send();
}
