var loader = document.getElementById("loader");

window.addEventListener("load", function () {
    loader.style.display = "none";
});

function signOut() {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        width: 400,
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, sign out!",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Success!",
                text: "Signing out.",
                icon: "success",
                width: 400,
                showConfirmButton: false,
                timer: 1000,
            });
        }
        setTimeout(() => {
            window.location.href = "/login";
        }, 1000);
    });
}

function infoPage() {
    window.location.href = "/profile/information";
}

function orderhistoryPage() {
    window.location.href = "/profile/orderhistory";
}
