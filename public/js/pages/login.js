var loader = document.getElementById('loader')

window.addEventListener('load', function(){
    loader.style.display = 'none'
})

function showPassword() {
    password = document.getElementById('password')
    if (password.value !== '' && password.type === 'password') {
        password.type = 'text'
    }else {
        password.type = 'password'
    }
}

function login() {
    let name = document.getElementById('name')
    let password = document.getElementById("password");
    if (name.value !== '' && password.value !== '') {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Login successful.",
          showConfirmButton: false,
          width: 400,
          timer: 1000,
        }); 
        setTimeout(()=> {
            window.location.href = "/home";
        },1250)
    }
    else {
        Swal.fire({
          position: "center",
          icon: "error",
          title: "login failed.",
          text: "Something went wrong.",
          showConfirmButton: false,
          width: 400,
          timer: 1000,
        });
    }
}

function registerPage() {
  window.location.href = "/register"
}