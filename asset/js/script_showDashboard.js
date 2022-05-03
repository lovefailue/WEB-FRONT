async function loadStatusAndCost() {
    checkStatusLogin()
    let resDataStatus = await getApi("../Code/connectDB/account/account/get-list-all-profile.php", {});
    console.log(resDataStatus)
    rawDataStatus = resDataStatus.data;
    // console.log(rawDataStatus)

    showDasboard(rawDataStatus);
}
loadStatusAndCost();

function showDasboard(dataStatus) {
    tableDasboard = document.getElementById("table_dasboard")
    console.log(dataStatus)
    // console.log(dataCost[6])
    if (dataStatus != null) {
        for (var i = 0; i < dataStatus.length; i++) {
            if (dataStatus[i].room != "99") {
                    tableDasboard.innerHTML += `
            <tr>
                <td style="text-align: center;">${dataStatus[i].room}</td>
                <td>
                    <button type="submit" class="btn btn-warning btn-block" style="margin:0 auto; width:8vw;" onclick="goToDetailUser('${dataStatus[i].account_id}')"></a>ดูข้อมูล<i class="fas fa-edit"></i></button>
                </td>
                <td>
                    <button type="submit" class="btn btn-warning btn-block" style="margin:0 auto; width:8vw;" onclick="goToPackage('${dataStatus[i].account_id}')"></a>จัดการพัสดุ<i class="fas fa-edit"></i></button>
                </td>
                <td >
                    <div style="display:flex; flex-direction:row;">
                        <button type="submit" class="btn btn-info" style="margin:0 auto; width:6vw;" ></a>Username</button>
                        <button type="submit" class="btn btn-secondary" style="margin:0 auto; width:6vw;" onclick="dropdownEditPass('${dataStatus[i].account_id}')"></a>Password</button>
                    </div>
                </td>
                <td >
                    <button type="submit" class="btn btn-block btn-danger" style="margin:0 auto; width:8vw;" onclick="deleteAccount('${dataStatus[i].account_id}')"></a>ลบ</button>
                </td>
            </tr >
            `
            }
        }
    }
}

function goToDetailUser(accountId){
    window.open("moreDetail.php"+"?accountId="+accountId, "_self");
}

function goToPackage(accountId){
    window.open("managePackage.php"+"?accountId="+accountId, "_self");
}


function deleteAccount(accountID) {
    // Get the modal
    // var accountId = accountID;
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
    // console.log(topic)
    document.getElementById('confirmDelete').addEventListener("click",async function() {
        reqBody = {
            account_id: accountID
        };
        let resDataStatus = await getApi("../Code/connectDB/account/account/delete-account.php", reqBody);
        window.location.reload();
        // console.log(accountID)
    }); 
}

async function logout(){
    await localStorage.setItem("status_login", "fail");
    window.open("login.php", "_self");
}

function dropdownEditPass(accountID){
    var modal = document.getElementById("myModalEditPass");
    modal.style.display = "block";
    document.getElementById("ID").value = accountID
    
    // console.log(Username)
    // console.log(NewPass)
}

function checkUsername(){
    const username = document.getElementById("username").value;
    if(username == ""){
        document.getElementById("errUser").innerHTML = "กรุณากรอกชื่อผู้ใช้";
        return false;
    }
    else{
        document.getElementById("errUser").innerHTML = "";
        return true;
    }
}

function checkNewPassword(){
    // check password is correct
    const newPassword = document.getElementById("newPass").value;

    if(newPassword == ""){
        document.getElementById("errNewPass").innerHTML = "กรุณากรอก password";
        return false;
    }
    else{
        document.getElementById("errNewPass").innerHTML = "";
        return true;
    }
}

function checkConfirmNewPassword(){
    // check password is correct

    const confirmNewPassword = document.getElementById("c_NewPass").value;
    const newPassword = document.getElementById("newPass").value;

    if(confirmNewPassword != newPassword){
        document.getElementById("errCNewPass").innerHTML = "รหัสผ่านไม่ตรงกัน กรุณากรอกใหม่";
        return false;
    }
    else{
        document.getElementById("errCNewPass").innerHTML = "";
        return true;
    }
}
// function checkNewPass(){
//     cost 
// }
 
async function editPass(){
    var ID = document.getElementById("ID").value
    var Username = document.getElementById("username").value
    var NewPass = document.getElementById("newPass").value
    if(!checkUsername() || !checkNewPassword() || !checkConfirmNewPassword()){
        checkUsername()
        checkNewPassword()
        checkConfirmNewPassword()
    }
    else{
        reqBody = {
            account_id: ID,
            username: Username,
            passwordNew: NewPass
        };
        let resData = await postApi("../Code/connectDB/account/account/edit-password.php", reqBody);
        window.location.reload();
        console.log(resData)
    }
}






