async function load() {
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
    console.log(dataA[0])
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
    console.log(accountId);
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
            status: "ค้างชำระ"
        };
        let resData = await postApi("../Code/connectDB/cost/add-bill-cost.php", reqBody);
        console.log(resData)
        window.location.reload();
    }
}