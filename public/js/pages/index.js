var loader = document.getElementById("loader")

window.addEventListener("load", function () {
  loader.style.display = "none"
})

function loginPage() {
  window.location.href = "/login"
}

function wadPage() {
  Swal.fire({
    position: "center",
    icon: "error",
    title: "Session failed",
    text: "Please login.",
    showConfirmButton: false,
    width: 400,
    timer: 1000,
  });
}

function vendingPage() {
  Swal.fire({
    position: "center",
    icon: "error",
    title: "Session failed",
    text: "Please login.",
    showConfirmButton: false,
    width: 400,
    timer: 1000,
  });
}