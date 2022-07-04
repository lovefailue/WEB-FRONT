async function load() {
    checkStatusLogin()
    let resData = await getApi("../Code/connectDB/announce/get-list-announce.php", {});
    console.log(resData)
    rawData = resData.data;
    console.log(rawData)
    showData(rawData);
}
load();

function showData(data) {
    boxAnnounce = document.getElementById("box_announce")
    if (data != null) {
        for (var i = 0; i < data.length; i++) {
            boxAnnounce.innerHTML += `
            <div class="info-box">
                <span class="info-box-icon bg-info"> <i class="fas fa-bullhorn"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text" style="display:none;" id = "dataID">เรื่อง: ${data[i].announce_id}</span>
                        <span class="info-box-text">เรื่อง: ${data[i].topic}</span>
                        <p class="info-box-text" style="word-break: break-all; white-space: normal; width:35vw;">เนื้อหา: ${data[i].description}</p>
                        <span class="info-box-number">วันที่: ${data[i].date}</span>
                    </div>
                    <div class="colum">
                        <button type="submit" class="btn btn-danger swalDefaultError" style="width:5vw; margin-top:2vh;" onclick="deleteData('${data[i].announce_id}')"></a>ลบ <i class="fas fa-trash-alt"></i></button>
                    </div>
                <!-- /.info-box-content -->
            </div>
            `
        }
    }
}

async function deleteData(data) {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";

    document.getElementById('confirmDelete').addEventListener("click", async function () {
        let reqBody = {
            announce_id: data
        }
        let resData = await getApi("https://btf-announce.inwcompro.com/sample/delete-announce.php", reqBody);
        console.log(resData)


        // window.location.reload();
        if (resData.status == "success") {
            swal.fire({
                title: "ลบประกาศสำเร็จ",
                icon: 'success'
            })
                .then(function () {
                    window.location = "annouce.php"
                });
        }
    });
}

// function checkNewTopic() {
//     const topic = document.getElementById("EditTopic").value;
//     if (topic == "") {
//         document.getElementById("errNewTopic").innerHTML = "กรุณากรอกหัวเรื่อง";
//         return false;
//     }
//     else {
//         document.getElementById("errNewTopic").innerHTML = "";
//         return true;
//     }
// }

// function checkNewDesc() {
//     const description = document.getElementById("editDescription").value;
//     if (description == "") {
//         document.getElementById("errNewDes").innerHTML = "กรุณากรอกรายละเอียด";
//         return false;
//     }
//     else {
//         document.getElementById("errNewDes").innerHTML = "";
//         return true;
//     }
// }

// function showEditData(id, topic, desc) {
//     // Get the modal
//     var modal = document.getElementById("myModal");
//     modal.style.display = "block";
//     document.getElementById("editID").value = id
//     document.getElementById("editTopic").value = topic
//     document.getElementById("editDescription").value = desc
//     console.log(topic)
// }

// async function editData() {
//     var newTopic = document.getElementById("editTopic").value
//     var newDesc = document.getElementById("editDescription").value
//     var newID = document.getElementById("editID").value
//     reqBody = {
//         topic: newTopic,
//         description: newDesc,
//         annnounce_id: newID
//     };
//     let resData = await postApi("../Code/connectDB/announce/edit-announce.php", reqBody);
//     window.location.reload();
// }



