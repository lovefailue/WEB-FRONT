async function load() {
    checkStatusLogin()
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });

    let accountId = params.accountId;
    // console.log(accountId);
    reqBody = {
        account_id: accountId
    };
    let resData = await getApi("https://btf-account.inwcompro.com/account/get-list-room-profile.php", reqBody);
    dataA = resData.data

    showData(dataA)
}
load();

async function showData(dataA) {

    try {
        document.getElementById("room").innerHTML = dataA[0].room;
        let resData = await axios.get("https://btf-delivery.inwcompro.com/v1/" + dataA[0].room);
        dataPack = resData.data.data
        console.log(dataPack)

        tablePost = document.getElementById("table_post")
        if (dataPack != null) {
            for (let i = 0; i < dataPack.length; i++) {
                if (dataPack[i].status == "ยังไม่ได้รับ") {
                    tablePost.innerHTML += `
            <tr>
                <td style="text-align: center;">${dataPack[i].post_id}</td>
                <td style="text-align: center;">${dataPack[i].date}</td>
                <td style="text-align: center;">
                    <div class="th1">
                        <div class="th1_1">${dataPack[i].status}</div>
                        <div class="th1_2">
                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;" id="editStatusPost" onclick="editStatusPost('${dataPack[i].post_id}')"></a>แก้ไข <i class="fas fa-edit"></i></button>
                        </div>
                    </div>
                </td>
                <td >
                    <div>
                        <button type="submit" class="btn btn-block btn-danger" style="margin:0 auto; width:5vw;" id="deletePost" onclick="deletePost('${dataPack[i].post_id}')"></a>ลบ </button>
                    </div>
                </td>
            </tr>
            `
                } else if (dataPack[i].status == "รับพัสดุแล้ว") {
                    tablePost.innerHTML += `
            <tr>
                <td style="text-align: center;">${dataPack[i].post_id}</td>
                <td style="text-align: center;">${dataPack[i].date}</td>
                <td style="text-align: center;">
                    <div class="th1">
                        <div class="th1_1">${dataPack[i].status}</div>
                    </div>
                </td>
                <td >
                    <div >
                        <button type="submit" class="btn btn-block btn-danger" style="margin:0 auto; width:5vw;" id="deletePost" onclick="deletePost('${dataPack[i].post_id}')"></a>ลบ </button>
                    </div>
                </td>
            </tr>
            `
                }

            }
        }
    }
    catch (err) {
        console.log(err.response)
    }

}

function checkNumPost() {
    const numPost = document.getElementById("NumPost").value;
    if (numPost == "") {
        document.getElementById("errNumPost").innerHTML = "กรุณากรอกเลขพัสดุ";
        return false;
    }
    else {
        document.getElementById("errNumPost").innerHTML = "";
        return true;
    }
}

async function addPostLoad() {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });

    let accountId = params.accountId;
    // console.log(accountId);
    reqBodyLoad = {
        account_id: accountId
    };
    let resDataLoad = await getApi("https://btf-account.inwcompro.com/account/get-list-room-profile.php", reqBodyLoad);
    dataAdd = resDataLoad.data
    addPost(dataAdd)
}

async function addPost(data) {
    // console.log(data[0].room)
    if (!checkNumPost()) {
        checkNumPost()
    }
    else {
        let reqBodyAdd = {
            post_id: document.getElementById("NumPost").value,
            room: data[0].room
        };
        try {
            let resDataAdd = await axios.post("https://btf-delivery.inwcompro.com/v1", reqBodyAdd);
            console.log(resDataAdd.data)
            let alertAdd = resDataAdd.data.status;
            if (alertAdd == "success") {
                swal.fire({
                    title: "เพิ่มพัสดุสำเร็จ",
                    icon: 'success'
                })
                    .then(function () {
                        window.location.reload();
                    });
            }
        }
        catch (err) {
            console.log(err.response)
        }
    }
}


async function editStatusPost(postID) {
    document.getElementById("editStatusPost").value = postID
    reqBodyEdit = {
        post_id: postID,
        status: "รับพัสดุแล้ว"
    };
    try {
        let resDataEdit = await axios.put("https://btf-delivery.inwcompro.com/v1/", reqBodyEdit);
        let alertEdit = resDataEdit.data.status;
        console.log(resDataEdit.data.status)
        if (alertEdit == "success") {
            swal.fire({
                title: "แก้ไขสถานะพัสดุสำเร็จ",
                icon: 'success'
            })
                .then(function () {
                    window.location.reload();
                });
        }
    }
    catch (err) {
        console.log(err.response)
    }
}

function deletePost(postID) {

    var modal = document.getElementById("myModal");
    modal.style.display = "block";
    // console.log(topic)
    document.getElementById('confirmDelete').addEventListener("click", async function () {

        try {
            let resData = await axios.delete("https://btf-delivery.inwcompro.com/v1/" + postID)
            // console.log(resData.data)
            let alertDelete = resData.data.status;
            if (alertDelete == "success") {
                swal.fire({
                    title: "ลบพัสดุสำเร็จ",
                    icon: 'success'
                })
                    .then(function () {
                        window.location.reload();
                    });
            }
        }
        catch (err) {
            console.log(err.response)
        }

    });

}