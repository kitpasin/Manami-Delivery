var loader = document.getElementById("loader")

window.addEventListener("load", function () {
  loader.style.display = "none"
});

function orderDetailWashNdryPage() {
  window.location.href = "/profile/orderhistory/orderdetailwash&dry";
}

function orderDetailVendingNcafePage() {
    window.location.href = "/profile/orderhistory/orderdetailvending&cafe";
}