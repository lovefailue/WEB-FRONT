async function load() {
    checkStatusLogin()
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });

    let accountId = params.accountId;
    console.log(accountId);
    reqBody = {
        account_id: accountId
    };
    let resData = await getApi("../Code/connectDB/account/account/get-list-room-profile.php", reqBody);
    dataA = resData.data

    showData(dataA)
}
load();

function showData(dataA) {
    // console.log(dataA[0])
    document.getElementById("room").innerHTML = dataA[0].room;
    document.getElementById("fname").innerHTML = dataA[0].fname;
    document.getElementById("lname").innerHTML = dataA[0].lanme;
    document.getElementById("tel").innerHTML = dataA[0].tel;
    document.getElementById("email").innerHTML = dataA[0].email;
}

function checkElcUnit() {
    const elcUnit = document.getElementById("elcUnit").value;
    if (elcUnit == "" || elcUnit == null) {
        document.getElementById("errElcUnit").innerHTML = "กรุณากรอกยูนิตที่ใช้ไป";
        return false;
    }
    else {
        document.getElementById("errElcUnit").innerHTML = "";
        return true;
    }
}
function checkElcCost() {
    const elcCost = document.getElementById("elcCost").value;
    if (elcCost == "" || elcCost == null) {
        document.getElementById("errElcCost").innerHTML = "กรุณากรอกค่าไฟ";
        return false;
    }
    else {
        document.getElementById("errElcCost").innerHTML = "";
        return true;
    }
}
function checkWaterCost() {
    const waterCost = document.getElementById("waterCost").value;
    if (waterCost == "" || waterCost == null) {
        document.getElementById("errWaterCost").innerHTML = "กรุณากรอกค่าน้ำ";
        return false;
    }
    else {
        document.getElementById("errWaterCost").innerHTML = "";
        return true;
    }
}
function checkRoomCost() {
    const roomCost = document.getElementById("roomCost").value;
    if (roomCost == "" || roomCost == null) {
        document.getElementById("errRoomCost").innerHTML = "กรุณากรอกค่าห้อง";
        return false;
    }
    else {
        document.getElementById("errRoomCost").innerHTML = "";
        return true;
    }
}
function checkTotal() {
    const total = document.getElementById("total").value;
    if (total == "" || total == null) {
        document.getElementById("errTotal").innerHTML = "กรุณากรอกจำนวนเงินทั้งหมด";
        return false;
    }
    else {
        document.getElementById("errTotal").innerHTML = "";
        return true;
    }
}


function GetAddBillCost() {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
}

async function loadForAddCost() {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });

    let accountId = params.accountId;
    // console.log(accountId);
    reqBody = {
        account_id: accountId
    };
    let resData = await getApi("../Code/connectDB/account/account/get-list-room-profile.php", reqBody);
    dataA = resData.data
    AddBillCost(dataA)
}

async function AddBillCost(data) {
    if (!checkElcUnit() || !checkElcCost() || !checkWaterCost() || !checkRoomCost() || !checkTotal()) {
        checkElcUnit()
        checkElcCost()
        checkWaterCost()
        checkRoomCost()
        checkTotal()
    } else {
        var AddMonth = document.getElementById("addMonth").value
        var ElcUnit = document.getElementById("elcUnit").value
        var ElcCost = document.getElementById("elcCost").value
        var WaterCost = document.getElementById("waterCost").value
        var RoomCost = document.getElementById("roomCost").value
        var Total = document.getElementById("total").value
        reqBody = {
            room: data[0].room,
            elc_cost: ElcCost,
            water_cost: WaterCost,
            room_cost: RoomCost,
            elc_unit: ElcUnit,
            total: Total,
            mount_cost: AddMonth
        };
        let resData = await postApi("../Code/connectDB/cost/add-bill-cost.php", reqBody);
        // console.log(resData)
        window.location.reload();
    }
}

async function loadBillCost() {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });

    let accountId = params.accountId;
    console.log(accountId);
    reqBody = {
        account_id: accountId
    };
    let resData = await getApi("../Code/connectDB/account/account/get-list-room-profile.php", reqBody);
    dataA = resData.data


    reqBody = {
        room: dataA[0].room
    };
    let resDataBill = await getApi("../Code/connectDB/cost/get-list-room-bill-cost.php", reqBody);
    console.log(resDataBill)
    showBillCost(resDataBill)
}

function showBillCost(data) {
    var Month = document.getElementById("getMonth").value

    boxBillCost = document.getElementById("box_billCost")
    var showData = data.data
    console.log(Month)

    if (showData != null) {
        boxBillCost.innerHTML = ""
        for (var i = 0; i < showData.length; i++) {
            if (showData[i].mount_cost == Month) {
                if(showData[i].status == "ค้างชำระ")
                {
                    boxBillCost.innerHTML += `
                <tr>
                    <td style="text-align: center;">${showData[i].elc_cost}</td>
                    <td style="text-align: center;">${showData[i].water_cost}</td>
                    <td style="text-align: center;">${showData[i].room_cost}</td>
                    <td style="text-align: center;">${showData[i].elc_cost}</td>
                    <td style="text-align: center;width:13vw;">
                        <div class="th1">
                            <div class="th1_1">${showData[i].status}</div>
                            <div class="th1_2" style="margin-top:-0.5vh;">
                                <button type="submit" class="btn btn-warning btn-block" style="width:5vw;" id="editStatusCost" onclick="EditStatusCost('${showData[i].cost_id}')"></a>แก้ไข <i class="fas fa-edit"></i></button>
                            </div>
                        </div>
                    </td>
                </tr>
                `
                }
                else if(showData[i].status == "ชำระเรียบร้อย"){
                    boxBillCost.innerHTML += `
                <tr>
                    <td style="text-align: center;">${showData[i].elc_cost}</td>
                    <td style="text-align: center;">${showData[i].water_cost}</td>
                    <td style="text-align: center;">${showData[i].room_cost}</td>
                    <td style="text-align: center;">${showData[i].elc_cost}</td>
                    <td style="text-align: center;width:13vw;">
                        <div class="th1">
                            <div class="th1_1" style="margin-left:2vw;">${showData[i].status}</div>
                        </div>
                    </td>
                </tr>
                `
                }
            }
        }
    }
}

async function EditStatusCost(costID){
    document.getElementById("editStatusCost").value = costID
    reqBodyEdit = {
        cost_id: costID,
        status: "ชำระเรียบร้อย"
    };
    let resDataEdit = await postApi("../Code/connectDB/cost/edit-status-bill-cost.php", reqBodyEdit);
    window.location.reload();
}

