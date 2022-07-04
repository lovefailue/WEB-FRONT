// async function load() {
//     let resData = await getApi("../Code/connectDB/account/account/delete-account.php", {
//         account_id: "62421e17a64d9", 
//     });

//     // let reqBody = { username: "u0001", password: "1234" };
//     // let resData = await postApi("Code/connectDB/account/account/get_list_room_profile.php", reqBody);
//     // console.log(resData)
// }
// load();

function checkTopic() {
    const topic = document.getElementById("topic").value;
    if (topic == "") {
        document.getElementById("errTopic").innerHTML = "กรุณากรอกหัวเรื่อง";
        return false;
    }
    else {
        document.getElementById("errTopic").innerHTML = "";
        return true;
    }
}

function checkDes() {
    const description = document.getElementById("description").value;
    if (description == "") {
        document.getElementById("errDes").innerHTML = "กรุณากรอกรายละเอียด";
        return false;
    }
    else {
        document.getElementById("errDes").innerHTML = "";
        return true;
    }
}

async function add_announce() {
    if (!checkTopic() || !checkDes()) {
        checkTopic()
        checkDes()
    }
    else {
        let reqBody = {
            topic: document.getElementById("topic").value,
            description: document.getElementById("description").value,
        };
        let resData = await postApi("https://btf-announce.inwcompro.com/sample/add-announce.php", reqBody);
        console.log(resData.status);
        if (resData.status == "success") {
            swal.fire({
                title: "เพิ่มประกาศสำเร็จ",
                icon: 'success'
            })
            .then(function () {
                window.location = "annouce.php"
            });
        }
        // window.location.reload();

    }

}