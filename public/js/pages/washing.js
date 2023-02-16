var loader = document.getElementById("loader");

window.addEventListener("load", function () {
    loader.style.display = "none";
});

const capacitys = document.querySelectorAll(
    ".washing-item-type-capacity-content-group"
);
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

const waterTemps = document.querySelectorAll(
    ".washing-item-type-watertemp-content-group"
);
waterTemps.forEach((waterTemp) => {
    waterTemp.addEventListener("click", function () {
        if (waterTemp.classList.contains("active")) {
            this.classList.remove("active");
        } else {
            waterTemps.forEach((el) => el.classList.remove("active"));
            this.classList.add("active");
        }
    });
});

function wadlistPage() {
    window.location.href = "/wash&dry/cart";
}

function dryPage() {
    window.location.href = "/wash&dry/drying";
}

function addWashing() {
   Swal.fire({
       position: "center",
       icon: "error",
       title: "Added failed.",
       text: "Please select an option.",
       showConfirmButton: false,
       width: 400,
       timer: 1000,
   });
    const tests1 = document.querySelectorAll(
        ".washing-item-type-capacity-content-group"
    );
    const tests2 = document.querySelectorAll(
        ".washing-item-type-watertemp-content-group"
    );
    tests1.forEach((el1) => {
      if (el1.classList.contains("active")) {
        tests2.forEach((el2) => {
          if (el2.classList.contains("active")) {
             Swal.fire({
                 position: "center",
                 icon: "success",
                 title: "Added successful.",
                 showConfirmButton: false,
                 width: 400,
                 timer: 1000,
             });
          }
        });
      }
    });
}
