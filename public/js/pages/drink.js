var loader = document.getElementById("loader");

window.addEventListener("load", function () {
  loader.style.display = "none";
});

function foodNdrinkPage() {
  const num = document.getElementById("quantity");
  const quantity = parseInt(document.getElementById("quantity").innerHTML);
  if (quantity > 0 ) {
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Added successful.",
        showConfirmButton: false,
        width: 400,
        timer: 1000,
    });
    setTimeout(() => {
        window.location.href = "/vending&cafe/food&drink";
    }, 1250);
  } else {
    Swal.fire({
        position: "center",
        icon: "error",
        title: "Added failed.",
        text: "Please select quantity",
        showConfirmButton: false,
        width: 400,
        timer: 1000,
    });
  }
}

function minusQuantity() {
  const num = document.getElementById("quantity");
  const quantity = parseInt(document.getElementById("quantity").innerHTML);
  if (quantity > 0) {
    num.innerHTML = quantity - 1;
  }
}

function plusQuantity() {
  const num = document.getElementById("quantity");
  const quantity = parseInt(document.getElementById("quantity").innerHTML);
  num.innerHTML = quantity + 1;
}

const tempTypes = document.querySelectorAll(".bottle-item-sweetness-box-temp-button button");
tempTypes.forEach((tempType) => {
  tempType.addEventListener("click", function () {
    if (tempType.classList.contains("active")) {
      this.classList.remove("active");
    } else {
      tempTypes.forEach((el) => el.classList.remove("active"));
      this.classList.add("active");
    }
  });
});
