async function load() {
    let resData = await getApi("../Code/connectDB/account/account/delete-account.php", "account_id=6235f9394ad45");
    console.log(resData)

    // let reqBody = {
    //     "username": "test01",
    //     "password": "123456",
    //     "fname": "tieza",
    //     "lname": "titiezaza",
    //     "room": "01",
    //     "tel": "0922294242",
    //     "email": "boxkeawzaza@gmail.com"

    // };
    // let resData = await postApi("../Code/connectDB/account/account/create-account.php", reqBody);
    // console.log(resData)
}
load();