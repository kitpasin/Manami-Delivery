var loader = document.getElementById("loader");

window.addEventListener("load", function () {
  loader.style.display = "none";
});

function wadPage() {
  window.location.href = '/wash&dry'
}

function vendingPage() {
  window.location.href = "/vending&cafe";
}
