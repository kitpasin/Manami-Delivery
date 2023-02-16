var loader = document.getElementById("loader")

window.addEventListener("load", function () {
  loader.style.display = "none"
})

function discard() {
  const btnChangePassword = document.querySelector(".info-item-btnpassword");
  const changePassword = document.querySelector(".info-item-password");
  const inputs = document.querySelectorAll(".info-item-password-group input");
    inputs.forEach((el) => el.value = "");
    btnChangePassword.style.display = "flex"
    changePassword.style.display = "none"
}

function newPassword() {
    let newPassword = document.getElementById("newPassword")
    let confirmNewPassword = document.getElementById("confirmNewPassword")
    if (newPassword.value !== '' && confirmNewPassword.value !== ''
        && newPassword.value === confirmNewPassword.value) {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Password change successful.",
          showConfirmButton: false,
          width: 400,
          timer: 1000,
        });
        setTimeout(() => {
          discard()
        }, 1250);
    }else {
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Password change failed.",
          text: "Something went wrong.",
          showConfirmButton: false,
          width: 400,
          timer: 1000,
        });
    }
}

const upload = document.querySelector(".info-item-profile-frame-image");
const image = document.querySelector(".info-item-profile-frame-image img");
const inputFile = document.createElement("input");
inputFile.type = "file";

upload.addEventListener("click", () => {
  inputFile.click();
});

inputFile.addEventListener("change", () => {
  const reader = new FileReader();
  reader.onload = function (e) {
    upload.querySelector("img").src = e.target.result;
  };
  reader.readAsDataURL(inputFile.files[0]);
  image.style.opacity = "1";
});

function showChangePassword() {
  const btnChangePassword = document.querySelector(".info-item-btnpassword")
  const changePassword = document.querySelector(".info-item-password");
  btnChangePassword.style.display = "none"
  changePassword.style.display = "flex"
}

function saveInfo() {
  Swal.fire({
      position: "center",
      icon: "success",
      title: "Changed successful.",
      showConfirmButton: false,
      width: 400,
      timer: 1000,
  });
  setTimeout(() => {
      window.location.reload()
  }, 1000);
}