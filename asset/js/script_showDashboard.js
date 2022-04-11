async function loadStatusAndCost() {

    let resDataStatus = await getApi("../Code/connectDB/account/account/get-list-all-profile.php", {});
    console.log(resDataStatus)
    rawDataStatus = resDataStatus.data;
    // console.log(rawDataStatus)

    showDasboard(rawDataStatus);
}
loadStatusAndCost();

function showDasboard(dataStatus, dataCost) {
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
                    <button type="submit" class="btn btn-warning btn-block" onclick="goToDetailUser()"></a>ดูข้อมูล<i class="fas fa-edit"></i></button>
                </td>
                <td>
                    <button type="submit" class="btn btn-warning btn-block" onclick="goToPackage()"></a>จัดการพัสดุ<i class="fas fa-edit"></i></button>
                </td >
            </tr >
            `
            }
        }
    }
}

function goToDetailUser(){
    window.open("moreDetail.php", "_self");
}

function goToPackage(){
    window.open("managePackage.php", "_self");
}