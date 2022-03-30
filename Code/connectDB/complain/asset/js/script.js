async function load() {
    let resData = await getApi("account/get_list_all_profile.php");
    console.log(resData)

    // let reqBody = { username: "test01", password: "123456" };
    // let resData = await postApi("Code/connectDB/account/authenticate/login.php", reqBody);
    // console.log(resData)
}

load();