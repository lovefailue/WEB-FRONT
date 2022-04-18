async function load() {

    let resData = await getApi("../Code/connectDB/complain/get-list-complain.php", {});
    console.log(resData)
    rawData = resData.data;
    console.log(rawData)
    showDataComplain(rawData);
}
load();

function showDataComplain(data) {
    boxComplain = document.getElementById("box_complain")
    if (data != null) {
        for (var i = 0; i < data.length; i++) {
            if (data[i].status == "ยังไม่ได้รับเรื่อง") {
                boxComplain.innerHTML += `
                <div class="info-box">
                    <span class="info-box-icon bg-info" style="height:10vh;"> <i class="fas fa-tools"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text" style="height:3vh; font-size:25px;">ห้อง : ${data[i].room}</span>
                            <span class="info-box-text">เรื่อง: ${data[i].topic}</span>
                            <span class="info-box-text">เนื้อหา: ${data[i].description}</span>
                            <span class="info-box-number">วันที่: ${data[i].date}</span>
                        </div>
                        <div class="colum" style="margin-top:1.5vh">
                            <button type=" submit" class="btn btn-success btn-block" style="width:5vw; margin-top:1.5vh;" id="editStatus" onclick="editStatusCom('${data[i].date}')">
                            </a>ยืนยัน<i class="fas fa-check-circle"></i></button>
                        </div>
                    <!-- /.info-box-content -->
                </div>
            `
            } else if(data[i].status == "รับเรื่องแล้ว"){
                boxComplain.innerHTML += `
                <div class="info-box">
                    <span class="info-box-icon bg-info" style="height:10vh;"> <i class="fas fa-tools"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text" style="height:3vh; font-size:25px;">ห้อง : ${data[i].room}</span>
                            <span class="info-box-text">เรื่อง: ${data[i].topic}</span>
                            <span class="info-box-text">เนื้อหา: ${data[i].description}</span>
                            <span class="info-box-number">วันที่: ${data[i].date}</span>
                        </div>
                        <div class="colum" style="margin-top:1.5vh">
                            <button type=" submit" class="btn btn-success btn-block" style="width:7vw; margin-top:1.5vh;" id="editStatus">
                            </a>รับเรื่องแล้ว</button>
                        </div>
                    <!-- /.info-box-content -->
                </div>
            `
            }

        }
    }
}

async function editStatusCom(date) {
    document.getElementById("editStatus").value = date
    reqBody = {
        date: date,
        status: "รับเรื่องแล้ว"
    };
    let resData = await postApi("../Code/connectDB/complain/edit-status-complain.php", reqBody);
    window.location.reload();
}