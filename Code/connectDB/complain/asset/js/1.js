async function load() {
    // let resData = await getApi("get-list-room-complain.php");
    // console.log(resData)

    let reqBody = {
        "room":"123"
    };
    let resData = await postApi("get-list-room-complain.php", reqBody);
    console.log(resData);
}
load();