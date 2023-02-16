var loader = document.getElementById("loader");

window.addEventListener("load", function () {
  loader.style.display = "none";
});

const searchInput = document.getElementById("search");
const dishs = document.querySelectorAll(".food-item-category-dish-box");

searchInput.addEventListener("input", function() {
   const searchTerm = this.value.toLowerCase();
   dishs.forEach((dish) => {
     if (dish.textContent.toLowerCase().includes(searchTerm)) {
       dish.style.display = "flex";
     } else {
       dish.style.display = "none";
     }
   });
})

function foodPage() {
  window.location.href = "/vending&cafe/food&drink/food"
}

function drinkPage() {
    window.location.href = "/vending&cafe/food&drink/drink";
}

function snackPage() {
  window.location.href = "/vending&cafe/food&drink/snack"
}

function bottlePage() {
    window.location.href = "/vending&cafe/food&drink/bottle";
}

function cartPage() {
  window.location.href = "/vending&cafe/cart";
}

const foodCats = document.querySelectorAll(".food-item-category-list-box");
foodCats.forEach((foodCat) => {
  foodCat.addEventListener("click", function () {
    if (foodCat.classList.contains("active")) {
      this.classList.remove("active");
      this.querySelector(".food-item-category-list-box figure").classList.remove("active");
      this.querySelector(".food-item-category-list-box p").classList.remove("active");
    } else {
      foodCats.forEach((el) => {
        el.classList.remove("active");
        el.querySelector(".food-item-category-list-box figure").classList.remove("active");
        el.querySelector(".food-item-category-list-box p").classList.remove("active");
      });
      this.classList.add("active");
      this.querySelector(".food-item-category-list-box figure").classList.add("active");
      this.querySelector(".food-item-category-list-box p").classList.add("active");
    }
  });
});