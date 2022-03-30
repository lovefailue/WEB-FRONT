async function load() {
    // let resData = await getApi("get-list-bill-cost.php","cost_id=08fc54c7-d4ca-4715-8aed-4fba5e99a1ea");
    // console.log(resData)

    let reqBody = {
        "room":"105"
    };
    let resData = await postApi("get-list-room-bill-cost.php", reqBody);
    console.log(resData);
}
load();