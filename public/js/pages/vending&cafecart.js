var loader = document.getElementById("loader");

window.addEventListener("load", function () {
  loader.style.display = "none";
});

function minusQuantity(element) {
  const parent = element.parentNode;
  const quantity = parent.querySelector(".quantity");
  let p = parseInt(quantity.innerHTML);
  if (p > 0) {
    p--;
    quantity.innerHTML = p;
  }
}

function plusQuantity(element) {
  const parent = element.parentNode;
  const quantity = parent.querySelector(".quantity");
  let p = parseInt(quantity.innerHTML);
  p++;
  quantity.innerHTML = p;
}

const minusIcons = document.querySelectorAll(
  ".cart-item-list-content-group-right-bot-right figure:first-child"
);
minusIcons.forEach((icon) => {
  icon.addEventListener("click", function () {
    minusQuantity(this);
  });
});

const plusIcons = document.querySelectorAll(
  ".cart-item-list-content-group-right-bot-right figure:last-child"
);
plusIcons.forEach((icon) => {
  icon.addEventListener("click", function () {
    plusQuantity(this);
  });
});


function drop() {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    width: 400,
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
          title: "Deleted!",
          text: "Your order has been deleted.",
          icon: "success",
          width: 400,
      });
    }
  });
}

function foodNdrinkPage() {
  window.location.href = "/vending&cafe/food&drink";
}

function vendingNcafepaymentPage() {
  window.location.href = "/vending&cafe/payment";
}