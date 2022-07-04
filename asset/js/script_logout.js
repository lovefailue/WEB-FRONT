async function logout() {
    await localStorage.setItem("status_login", "fail");
    swal.fire({
        title: "logout เรียบร้อย",
        icon: 'success'
    })
        .then(function () {
            window.open("login.php", "_self");
        });
}