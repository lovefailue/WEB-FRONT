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
        checkUsernameLog(),
        checkPasswordLog()
    } else {
        let reqBody = {
            username: document.getElementById("usernameLog").value,
            password: document.getElementById("passwordLog").value
        };
        let resData = await postApi("../Code/connectDB/account/authenticate/login.php", reqBody);
        console.log(resData.status)
        window.open("Dashboard.php", "_self");

    }

    // let reqBody = {
    //     username: document.getElementById("usernameLog").value,
    //     password: document.getElementById("passwordLog").value
    // };
    // let resData = await postApi("../Code/connectDB/account/authenticate/login.php", reqBody);
    // console.log(resData)
    // window.open("Dashboard.php", "_self");
}