function getApi(path = "", paramsData = {}) {
    var strParams = "";
    strParams += "?" + new URLSearchParams(paramsData).toString();
    return new Promise(async function(resolve, reject) {
        const res = await fetch(path + strParams, {
            method: "GET",
            mode: "cors",
            cache: "no-cache",
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
            },
            redirect: "follow",
            referrerPolicy: "no-referrer",
        });
        const status = res.status;
        if (status == 200 || status == 400 || status == 404 || status == 500) {
            return resolve(res.json());
        } else {
            return;
        }
    });
}

function postApi(path = "", reqData = {}) {
    return new Promise(async function(resolve, reject) {
        const res = await fetch(path, {
            method: "POST",
            mode: "cors",
            cache: "no-cache",
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
                "Access-Control-Allow-Origin": "*",
                "Content-Length": "500000000",
                "Access-Control-Allow-Credentials": true,
            },
            redirect: "follow",
            referrerPolicy: "no-referrer",
            body: JSON.stringify(reqData),
        });
        const status = res.status;
        if (status == 200 || status == 400 || status == 404 || status == 500) {
            return resolve(res.json());
        } else {
            return;
        }
    });
}

function postApiFile(path = "", reqData = new FormData()) {
    return new Promise(async function(resolve, reject) {
        const res = await fetch(path, {
            method: "POST",
            mode: "cors",
            cache: "no-cache",
            credentials: "same-origin",
            headers: {
                "Content-Type": "multipart/form-data",
                "Access-Control-Allow-Origin": "*",
                "Content-Length": "500000000",
                "Access-Control-Allow-Credentials": true,
            },
            redirect: "follow",
            referrerPolicy: "no-referrer",
            body: reqData,
        });
        const status = res.status;
        if (status == 200 || status == 400 || status == 404 || status == 500) {
            return resolve(res.json());
        } else {
            return;
        }
    });
}