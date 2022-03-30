async function load() {
    // let resData = await getApi("account/edit-username.php","account_id=6238b9e636e46");
    // console.log(resData)

    let reqBody = {
        "account_id":"6238bde6d8b6a",
        "usernameNew":"test01",
        "username":"test06",
        "password":"123456"

    };
    let resData = await postApi("account/edit-username.php", reqBody);
    console.log(resData)
}

load();