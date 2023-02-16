var loader = document.getElementById("loader");

window.addEventListener("load", function () {
  loader.style.display = "none";
});

const capacitys = document.querySelectorAll(".drying-item-capacity-content-group");
capacitys.forEach((capacity) => {
  capacity.addEventListener("click", function () {
    if (capacity.classList.contains("active")) {
      this.classList.remove("active");
    } else {
      capacitys.forEach((el) => el.classList.remove("active"));
      this.classList.add("active");
    }
  });
});

function addDry() {
  Swal.fire({
      position: "center",
      icon: "error",
      title: "Added failed.",
      text: "Please select an option.",
      showConfirmButton: false,
      width: 400,
      timer: 1000,
  });
  const tests1 = document.querySelectorAll(".drying-item-capacity-content-group")
  tests1.forEach((el1) => {
    if (el1.classList.contains("active")) {
      Swal.fire({
          position: "center",
          icon: "success",
          title: "Added successful.",
          showConfirmButton: false,
          width: 400,
          timer: 1000,
      });
    }
  })
}

capacitys[0].addEventListener("click", function() {
  if(capacitys[0].classList.contains("active")) {
    document.querySelector(".drying-item-time-bg-content-group-box-1").style.display = "flex";
    document.querySelector(".drying-item-time-bg-content-group-box-2").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-3").style.display = "none";
  }else {
    document.querySelector(".drying-item-time-bg-content-group-box-1").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-2").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-3").style.display = "none";
  }
}) 
capacitys[1].addEventListener("click", function () {
  if (capacitys[1].classList.contains("active")) {
    document.querySelector(".drying-item-time-bg-content-group-box-1").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-2").style.display = "flex";
    document.querySelector(".drying-item-time-bg-content-group-box-3").style.display = "none";
  } else {
    document.querySelector(".drying-item-time-bg-content-group-box-1").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-2").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-3").style.display = "none";
  }
});
capacitys[2].addEventListener("click", function () {
  if (capacitys[2].classList.contains("active")) {
    document.querySelector(".drying-item-time-bg-content-group-box-1").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-2").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-3").style.display = "flex";
  } else {
    document.querySelector(".drying-item-time-bg-content-group-box-1").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-2").style.display = "none";
    document.querySelector(".drying-item-time-bg-content-group-box-3").style.display = "none";
  }
});


function minusTime() {
  const num = document.getElementById("minute");
  const minute = parseInt(document.getElementById("minute").innerHTML);
  const pnum = document.getElementById("price");
  const price = parseInt(document.getElementById("price").innerHTML);
  if (minute > 0) {
    num.innerHTML = minute - 1;
    if ((minute) % 12 === 0) {
      pnum.innerHTML = price - 20;
    }
  }
}

function plusTime() {
  const num = document.getElementById("minute");
  const minute = parseInt(document.getElementById("minute").innerHTML);
  const pnum = document.getElementById("price");
  const price = parseInt(document.getElementById("price").innerHTML);
  num.innerHTML = minute + 1;
  if ((minute+1) % 12 === 0) {
    pnum.innerHTML = price + 20;
  }
}

function resetTime() {
  const num = document.getElementById("minute");
  const minute = parseInt(document.getElementById("minute").innerHTML);
  const pnum = document.getElementById("price");
  const price = parseInt(document.getElementById("price").innerHTML);
  num.innerHTML = minute * 0;
  pnum.innerHTML = price * 0;
}

function wadlistPage() {
  window.location.href = "/wash&dry/cart";
}