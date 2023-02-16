var loader = document.getElementById("loader");

window.addEventListener("load", function () {
    loader.style.display = "none";
});

const payTypes = document.querySelectorAll(".ordersum-item-payment-type-group");
const bank = document.querySelector(".ordersum-item-payment-bank");
const slip = document.querySelector(".ordersum-item-payment-slip");
payTypes.forEach((payType) => {
    payType.addEventListener("click", function () {
        if (payType.classList.contains("active")) {
            this.classList.remove("active");
            bank.style.display = "none";
        } else {
            payTypes.forEach((el) => el.classList.remove("active"));
            this.classList.add("active");
            if (payTypes[0].classList.contains("active")) {
                bank.style.display = "flex";
            } else {
                bank.style.display = "none";
            }
            if (payTypes[1].classList.contains("active")) {
                slip.style.display = "none"
            } else {
                slip.style.display = "flex"
            }
        }
    });
});

const upload = document.querySelector(
    ".ordersum-item-payment-slip-content-left"
);
const image = document.querySelector(
    ".ordersum-item-payment-slip-content-left img"
);
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

function uploadFile() {
    inputFile.click();
    inputFile.addEventListener("change", () => {
        const reader = new FileReader();
        reader.onload = function (e) {
            upload.querySelector("img").src = e.target.result;
        };
        reader.readAsDataURL(inputFile.files[0]);
        image.style.opacity = "1";
    });
}
