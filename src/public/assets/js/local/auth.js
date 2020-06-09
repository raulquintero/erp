var urlPortero = 'http://server.local/portero'

function sendKey1(url) {
    
    key1 = document.getElementById('key1');

    params = {
        'key1': key1.value,
        'token': 'a'
    }
    // console.log(params);
    if (params['key1'] != ""){
        sendPetition(params, url, sendKey1Handler);
    } else {
        document.getElementById('helpIdKey1').innerHTML = 'Required';
    }
}

function sendKey1Handler(result) {
    console.log(result);
    // data = data['result'];
    clientId = result['data']['key1'];
    document.getElementById("name").innerHTML = result['data']['firstname'] + ' ' + result['data']['lastname'];
    document.getElementById("formLogin").innerHTML = '';
    document.getElementById("formContinue").setAttribute('style', 'visibility:visible');
    document.getElementById("key2").focus();

}

function sendKey2(url) {
    params = {
        'key1': clientId,
        'key2': key2.value,
    };
    console.log(params);
    console.log(url);
    sendPetition(params, url, sendKey2Handler);
}

function sendKey2Handler(result) {
        if (result['statusCode']) {
        window.location.href = '/';
    }
    else{
        window.location.href = '/pin';
    }
    console.log(result);
    if (result['data']['message']){
        document.getElementById('helpIdPassword').innerHTML = result['data']['message'].toUpperCase();
    }
}