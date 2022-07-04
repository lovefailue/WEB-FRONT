async function loadBanking(){
    checkStatusLogin()
    let resData = await getApi("https://btf-cost.inwcompro.com/sample/get-banking.php", "");
    dataBanking = resData.data
    console.log(dataBanking)
    showDataBanking(dataBanking)
}
loadBanking();

function showDataBanking(dataBanking){
    tableBanking = document.getElementById("table_banking")
    if(dataBanking != null){
        for(var i = 0; i < dataBanking.length; i++){
            tableBanking.innerHTML += `
            <tr>
                <td style="text-align: center;">${dataBanking[i].bank}</td>
                <td style="text-align: center;">${dataBanking[i].name_banking}</td>
                <td style="text-align: center;">${dataBanking[i].number_banking}</td>
                <td >
                    <div style="width:4vw; margin:0 auto;">
                        <button type="submit" class="btn btn-block btn-danger" style="width:4vw;" onclick="deleteBanking('${dataBanking[i].banking_id}')"></a>ลบ</button>
                    </div>
                </td>
            </tr >
            `
        }
    }
}

function checkNameBanking() {
    const nameBanking = document.getElementById("nameBanking").value;
    if (nameBanking == "" || nameBanking == null) {
        document.getElementById("errNameBanking").innerHTML = "กรุณากรอกชื่อบัญชี";
        return false;
    }
    else {
        document.getElementById("errNameBanking").innerHTML = "";
        return true;
    }
}

function checkNumBanking() {
    const numBanking = document.getElementById("numBanking").value;
    if (numBanking == "" || numBanking == null) {
        document.getElementById("errNumBanking").innerHTML = "กรุณากรอกเลขบัญชี";
        return false;
    }
    else if(numBanking.length < 10){
        document.getElementById("errNumBanking").innerHTML = "เลขบัญชีสั้นเกินไป";
        return false;
    }
    else {
        document.getElementById("errNumBanking").innerHTML = "";
        return true;
    }
}

function showDropDownBanking(){
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
}

async function addBanking(){
    if(!checkNameBanking() || !checkNumBanking()){
        checkNameBanking()
        checkNumBanking()
    }
    else{
        var Banking = document.getElementById("banking").value
        var NameBanking = document.getElementById("nameBanking").value
        var NumBanking = document.getElementById("numBanking").value

        reqBody = {
            bank: Banking,
            number_banking: NumBanking,
            name_banking: NameBanking,
        };
        let resData = await postApi("https://btf-cost.inwcompro.com/sample/add-banking.php", reqBody);
        console.log(resData)
        if (resData.status == "success") {
            swal.fire({
                title: "เพิ่มบัญชีธนาคารสำเร็จ",
                icon: 'success'
            })
            .then(function () {
                window.location = "banking.php"
            });
        }
        // window.location.reload();
    }
}

function deleteBanking(bankingID){
    var modal = document.getElementById("ModalDeleteBanking");
    modal.style.display = "block";
    console.log(bankingID);

    document.getElementById('confirmDelete').addEventListener("click",async function() {
        let reqBody = {
            banking_id: bankingID
        };
        let resData = await getApi("https://btf-cost.inwcompro.com/sample/delete-banking.php", reqBody);


        if (resData.status == "success") {
            swal.fire({
                title: "ลบบัญชีธนาคารสำเร็จ",
                icon: 'success'
            })
            .then(function () {
                window.location = "banking.php"
            });
        }
        // window.location.reload();
        // console.log(resData)
    }); 

    
}