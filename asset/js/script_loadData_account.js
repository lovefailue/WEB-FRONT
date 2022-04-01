async function load() {
    let resData = await getApi("../Code/connectDB/account/account/get-list-room-profile.php",{
        account_id: "624469f83ff67",
    });
    console.log(resData)


    // let reqBody = { username: "u0001", password: "1234" };
    // let resData = await postApi("Code/connectDB/account/account/get_list_room_profile.php", reqBody);
    // console.log(resData)
}
load();