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
                    <button type="submit" class="btn btn-primary" style="margin:0 auto; width:8vw; margin-left:2vw;" onclick="showInfoReceipt('${data[i].receipt_id}')"></a>ดู</button>
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
