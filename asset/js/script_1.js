async function load() {
    // let resData = await getApi("app-api/v1/account/get-list-profile.php", {
    //     account_id: 3,
    // });
    let reqBody = { username: "u0001", password: "1234" };
    let resData = await postApi("Code/connectDB/account/account/get_list_room_profile.php", reqBody);
    console.log(resData)
}
load();