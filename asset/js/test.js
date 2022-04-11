async function load() {
    // let resData = await getApi("../Code/connectDB/account/account/delete-account.php", {
    //     account_id: "62421e17a64d9", 
    // });

    let reqBody = {
        "topic": "ปิดหอ",
        "description": "ตั้งแต่1-1"
    }  
    let resData = await postApi("../Code/connectDB/announce/add-complain.php", reqBody);
    console.log(resData)
}
load();