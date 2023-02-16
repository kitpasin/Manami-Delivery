var loader = document.getElementById("loader")

window.addEventListener("load", function () {
  loader.style.display = "none"
})

function showPassword() {
  password = document.getElementById("password");
  if (password.value !== "" && password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password"
  }
}

function showConfirm() {
  confirm = document.getElementById("confirm");
  if (confirm.value !== "" && confirm.type === "password") {
    confirm.type = "text"
  } else {
    confirm.type = "password"
  }
}

function signUp() {
    let policy = document.getElementById('policy')
    if (policy.checked === true) {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Sign up successful.",
          showConfirmButton: false,
          width: 400,
          timer: 1000,
        });
        setTimeout(() => {
            window.location.href = "/login";
        }, 1250);
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

function loginPage() {
  window.location.href = "/login";
}
