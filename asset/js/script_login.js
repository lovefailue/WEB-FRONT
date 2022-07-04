function checkUsernameLog() {
    // check username is correct
    const username = document.getElementById("usernameLog").value;

    if (username == "") {
        document.getElementById("errUser").innerHTML = "กรุณากรอกชื่อผู้ใช้";
        return false;
    }
    else {
        document.getElementById("errUser").innerHTML = "";
        return true;
    }
}
function checkPasswordLog() {
    // check password is correct
    const password = document.getElementById("passwordLog").value;

    if (password == "") {
        document.getElementById("errPass").innerHTML = "กรุณากรอก password";
        return false;
    }
    else {
        document.getElementById("errPass").innerHTML = "";
        return true;
    }
}


async function login() {
    if (!checkUsernameLog() || !checkPasswordLog()) {
        checkUsernameLog()
        checkPasswordLog()
        // console.log("fail")
        localStorage.setItem("status_login", "fail");
        console.log(localStorage.getItem("status_login"));
    } else {
        let reqBody = {
            username: document.getElementById("usernameLog").value,
            password: document.getElementById("passwordLog").value
        };
        let resData = await postApi("https://btf-account.inwcompro.com/authenticate/login.php", reqBody);
        statusLog = resData.status;
        console.log(statusLog)

        if (statusLog == "fail") {
            localStorage.setItem("status_login", "fail");
            swal.fire({
                title: "Username หรือ Password ไม่ถูกต้อง",
                icon: 'error'
            }).then(function () {
                window.location.reload();
            });
        }else if(statusLog == "success"){
            localStorage.setItem("status_login", "loggedin");
            console.log(localStorage.getItem("status_login"));
            swal.fire({
                title: "ยินดีต้อนรับ Admin",
                icon: 'success'
            }).then(function () {
                window.open("Dashboard.php", "_self");
            });
        }
        // console.log("successe")
        // localStorage.setItem("status_login", "loggedin");
        // console.log(localStorage.getItem("status_login"));
        // window.open("Dashboard.php", "_self");
    }
    // console.log(statusLog)
    // CheckLogin(statusLog)
}

// function CheckLogin(statusLog) {
//     if (statusLog == "123") {
//         swal.fire({
//             title: "Username หรือ Password ไม่ถูกต้อง",
//             icon: 'success'
//         }).then(function () {
//             window.location.reload();
//         });
//     } else if (statusLog == "success") {
//         window.open("Dashboard.php", "_self");
//     }
// }