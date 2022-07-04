async function load() {
    checkStatusLogin()
    let resData = await getApi("https://btf-cost.inwcompro.com/sample/get-receipt.php", "");
    dataReceipt = resData.data
    // console.log(dataReceipt)
    showReceipt(dataReceipt)
}
load();

function showReceipt(data) {
    tableReceipt = document.getElementById("table_receipt")

    if (data != null) {
        for (var i = 0; i < data.length; i++) {
            tableReceipt.innerHTML +=
                `
            <tr>
                <td style="text-align: center;">${data[i].room}</td>
                <td style="text-align: center;">${data[i].receipt_month}</td>
                <td style="text-align: center;">${data[i].receipt_date}</td>
                <td >
                    <div style="width:4vw; margin:0 auto;">
                        <button type="submit" class="btn btn-primary" style="width:4vw;" onclick="showInfoReceipt('${data[i].receipt_id}')"></a>ดู</button>
                    </div>    
                </td>
                <td >
                    <div style="width:4vw; margin:0 auto;">
                        <button type="submit" class="btn btn-block btn-danger" style="width:4vw;" onclick="deleteReceipt('${data[i].receipt_id}')"></a>ลบ</button>
                    </div>    
                </td>
            </tr >
            `
        }
    }
}

async function showInfoReceipt(receiptID) {
    reqBody = {
        receipt_id: receiptID
    };
    let resData = await getApi("https://btf-cost.inwcompro.com/sample/get-info-receipt.php", reqBody);
    receiptImg = resData.data.receipt_img;
    console.log(resData.data.receipt_img)

    var modal = document.getElementById("myModal");
    modal.style.display = "block";

    document.getElementById("infoReceipt").src = receiptImg
    // InfoReceipt.src += "data:image/png;base64,"+`${receiptImg}`
}

function deleteReceipt(receiptID){
    var modal = document.getElementById("myModalDeleteReceipt");
    modal.style.display = "block";

    document.getElementById('confirmDeleteReceipt').addEventListener("click",async function() {
        reqBody = {
            receipt_id: receiptID
        };
        let resData = await getApi("https://btf-cost.inwcompro.com/sample/delete-receipt.php", reqBody);
        // window.location.reload();
        // console.log(resData)
        if (resData.status == "success") {
            swal.fire({
                title: "ลบค่าใช้จ่ายสำเร็จ",
                icon: 'success'
            })
            .then(function () {
                window.location = "receipt.php"
            });
        }
    });
}
