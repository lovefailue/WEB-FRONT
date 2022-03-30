async function load() {
    let resData = await getApi("get-list-topic-announce.php","announce_id=61fbe59f0a03e");
    console.log(resData)

    // let reqBody = {
    //     "topic":"ปิดหอ",
    //     "description":"ตั้งแต่1-1"
    // };
    // let resData = await postApi("add-announce.php", reqBody);
    // console.log(resData)
}

load();