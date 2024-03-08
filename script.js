function includeHTML() {
  var z, i, elmnt, file, xhttp;
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      return;
    }
  }
}
const car = [
  { name: 'Subaru',price: 9000, color: "blue", img: "assets/voiture1.jpg" }, 
  { name: 'Gtrr',price: 18000, color: "white", img: "assets/voiture2.jpg" },
  { name: 'Dirt Car',price: 2500, color: "blue", img: "assets/voiture3.jpg" },
  { name: 'Mitsubishi',price: 22000, color: "grey", img: "assets/voiture4.jpg" },
  { name: 'Honda Type R 1998–2001',price: 29000, color: 'white', img: "assets/voiture5.jpg" },
  { name: 'Mitsubishi Evo', price: 1700, color: 'white', img: "assets/voiture6.jpg" }
];
