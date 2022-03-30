async function load() {
    let resData = await getApi("get-list-post.php","room=104");
    console.log(resData)

    // let reqBody = {
    //     "post_id":"1555aa55555",
    //     "status":"รับแล้ว"

    // };
    // let resData = await postApi("edit-status-post.php", reqBody);
    // console.log(resData);
}
load();