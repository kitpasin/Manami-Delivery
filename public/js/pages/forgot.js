var loader = document.getElementById("loader")

window.addEventListener("load", function () {
  loader.style.display = "none"
})

function resetPassword() {
    let email = document.getElementById('email')
    if (email.value !== '') {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Sended successful.",
          showConfirmButton: false,
          width: 400,
          timer: 1000,
        });
    }else {
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Sign up failed.",
          text: "Something went wrong.",
          showConfirmButton: false,
          width: 400,
          timer: 1000,
        });
    }
}