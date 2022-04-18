async function loadStatusAndCost() {

    let resDataStatus = await getApi("../Code/connectDB/account/account/get-list-all-profile.php", {});
    console.log(resDataStatus)
    rawDataStatus = resDataStatus.data;
    // console.log(rawDataStatus)

    showDasboard(rawDataStatus);
}
loadStatusAndCost();

function showDasboard(dataStatus) {
    tableDasboard = document.getElementById("table_dasboard")
    // console.log(dataStatus)
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
        console.log(accountID)
    }); 
}
