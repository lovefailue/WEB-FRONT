async function checkStatusLogin(){
    if(localStorage.getItem("status_login") == "loggedin"){
        console.log("ล็อกอินละน้าาาาา")
    }
    else{
        console.log("ยังไม่ได้ล็อกอินน้าาาาา")
        await window.open("login.php", "_self");
        alert("กรุณาล็อกอิน")
    }
}