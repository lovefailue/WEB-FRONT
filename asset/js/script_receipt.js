async function load() {
    checkStatusLogin()
    let resData = await getApi("../Code/connectDB/cost/get-receipt.php", "");
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
                <td style="text-align: center;">${data[i].receipt_mount}</td>
                <td style="text-align: center;">${data[i].receipt_date}</td>
                <td >
                    <div style="width:4vw; margin:0 auto;">
                        <button type="submit" class="btn btn-primary" style="width:4vw;" onclick="showInfoReceipt('${data[i].receipt_id}')"></a>ดู</button>
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
    let resData = await getApi("../Code/connectDB/cost/get-info-receipt.php", reqBody);
    receiptImg = resData.data.receipt_img;
    console.log(resData.data.receipt_img)

    var modal = document.getElementById("myModal");
    modal.style.display = "block";

    document.getElementById("infoReceipt").src = receiptImg
    // InfoReceipt.src += "data:image/png;base64,"+`${receiptImg}`


}
