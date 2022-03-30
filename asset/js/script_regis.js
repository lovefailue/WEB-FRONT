function checkName(){
    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    if(fname == "" || lname == "" ){
        document.getElementById("errFname").innerHTML="กรุณากรอกชื่อและนามสกุล";
        document.getElementById("errLname").innerHTML="กรุณากรอกชื่อและนามสกุล";
        return false;
    }
    else{
        document.getElementById("errFname").innerHTML="";
        document.getElementById("errLname").innerHTML="";
        return true;
    }
}

function checkUsername(){
    // check username is correct
    const username = document.getElementById("username").value;
    const english = /^[A-Za-z0-9]*$/;
    
    if(username == ""){
        document.getElementById("errUser").innerHTML = "กรุณากรอกชื่อผู้ใช้";
        return false;
    }
    else if(!english.test(username)){
        document.getElementById("errUser").innerHTML = "ชื่อผู้ใช้ไม่ถูกต้อง";
        return false;
    }
    else if(username.length < 4){
        document.getElementById("errUser").innerHTML = "ชื่อผู้ใช้ต้อง4ตัวอักษรขึ้นไป";
        return false;
    }
    else{
        document.getElementById("errUser").innerHTML = "";
        return true;
    }
}

function checkEmail(){
    // check email is correct
    const email = document.getElementById("email").value;

    if(email == ""){
        document.getElementById("errEmail").innerHTML = "กรุณากรอก Email";
        return false;
    }
    else if(!validateEmail(email)){;
        document.getElementById("errEmail").innerHTML = "รูปแบบ Email ไม่ถูกต้อง";
        return false;
    }
    else{
        document.getElementById("errEmail").innerHTML = "";
        return true;
    }
}

function validateEmail(email){
    //validate email patter is correct

    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    return re.test(String(email).toLowerCase());
}

function checkPassword(){
    // check password is correct
    const password = document.getElementById("password").value;

    if(password == ""){
        document.getElementById("errPass").innerHTML = "กรุณากรอก password";
        return false;
    }
    else if(password.length < 6){
        document.getElementById("errPass").innerHTML = "password ต้องมี6ตัวอักษรขึ้นไป";
        return false;
    }
    else{
        document.getElementById("errPass").innerHTML = "";
        return true;
    }
}
function checkConfirmPassword(){
    // check password is correct

    const confirmPassword = document.getElementById("c_password").value;
    const password = document.getElementById("password").value;

    if(confirmPassword != password){
        document.getElementById("errCPass").innerHTML = "รหัสผ่านไม่ตรงกัน กรุณากรอกใหม่";
        return false;
    }
    else{
        document.getElementById("errCPass").innerHTML = "";
        return true;
    }
}

function checkNumberRoom(){
    const room = document.getElementById("room").value;

    if(room.length != 2){
        document.getElementById("errRoom").innerHTML = "เลขห้องไม่ถูกต้อง"
    }
    else{
        document.getElementById("errRoom").innerHTML = "";
        return true;
    }
}

function checkTelephonNumber(){
    const tel = document.getElementById("tel").value;

    if(tel.length != 10){
        document.getElementById("errTel").innerHTML = "เบอร์โทรศัพท์ไม่ถูกต้อง"
    }
    else{
        document.getElementById("errTel").innerHTML = "";
        return true;
    }
}

async function regis() {
    if(!checkName() || !checkUsername() || !checkEmail() || !checkPassword() || !checkConfirmPassword() || !checkNumberRoom() || !checkTelephonNumber()){
        checkName()
        checkUsername()
        checkEmail()
        checkPassword()
        checkConfirmPassword()
        checkNumberRoom()
        checkTelephonNumber()
    }
    else{
        let reqBody = {
            fname: document.getElementById("fname").value,
            lname: document.getElementById("lname").value,
            room: document.getElementById("room").value,
            tel: document.getElementById("tel").value,
            email: document.getElementById("email").value,
            username: document.getElementById("username").value,
            password: document.getElementById("password").value
        };
        let resData = await postApi("../Code/connectDB/account/account/create-account.php", reqBody);
        console.log(resData);
        window.open("All_username.php", "_self");
    }
    
}