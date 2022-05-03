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
    let resData = await getApi("../Code/connectDB/account/account/get-list-room-profile.php", reqBody);
    dataA = resData.data

    showData(dataA)
}
load();

async function showData(dataA) {
    document.getElementById("room").innerHTML = dataA[0].room;

    reqBody = {
        room: dataA[0].room
    };
    let resData = await getApi("../Code/connectDB/delivery/get-list-post.php", reqBody);
    dataPack = resData.data
    // console.log(dataPack)

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

async function addPostLoad() {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });

    let accountId = params.accountId;
    console.log(accountId);
    reqBodyLoad = {
        account_id: accountId
    };
    let resDataLoad = await getApi("../Code/connectDB/account/account/get-list-room-profile.php", reqBodyLoad);
    dataAdd = resDataLoad.data
    addPost(dataAdd)
}

async function addPost(data) {
    // console.log(data[0].room)
    let reqBodyAdd = {
        post_id: document.getElementById("NumPost").value,
        room: data[0].room
    };
    let resDataAdd = await postApi("../Code/connectDB/delivery/create-post.php", reqBodyAdd);
    console.log(resDataAdd);
    window.location.reload();
}

async function editStatusPost(postID) {
    document.getElementById("editStatusPost").value = postID
    reqBodyEdit = {
        post_id: postID,
        status: "รับพัสดุแล้ว"
    };
    let resDataEdit = await postApi("../Code/connectDB/delivery/edit-status-post.php", reqBodyEdit);
    console.log(resDataEdit)
    window.location.reload();
}

function deletePost(postID){
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
    // console.log(topic)
    document.getElementById('confirmDelete').addEventListener("click",async function() {
        reqBody = {
            post_id: postID
        };
        let resDataPost = await getApi("../Code/connectDB/delivery/delete-post.php", reqBody);
        window.location.reload();
        console.log(resDataPost)
    }); 
    
}