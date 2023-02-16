var loader = document.getElementById("loader");

window.addEventListener("load", function () {
  loader.style.display = "none";
});

// const mainGroups = document.querySelectorAll(".wadlist-item-list-content-group");

// mainGroups.forEach((mainGroup) => {
//   mainGroup.addEventListener("click", function () {
//     this.querySelector(".wadlist-item-list-content-group-subgroup").classList.toggle("active");
//   });
// });

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

function wadPage() {
  window.location.href = '/wash&dry'
}

function ordersumPage() {
  window.location.href = "/wash&dry/payment";
}