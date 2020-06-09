

var urlBase = authServer ? 'http://' + authServer : 'http://auth.redirectme.net'
console.log('urlBase', urlBase);
var remoteHost = '{{ httpReferer }}';
remoteHost = JSON.parse(decodeURIComponent(readCookie('__apsx'))).s;
console.log('remoteHostC', JSON.parse(decodeURIComponent(readCookie('__apsx'))).s , remoteHost);

document.addEventListener('contextmenu', event => event.preventDefault());

document.onclick = function (event) {
    // Compensate for IE<9's non-standard event model
    //
    if (event === undefined) event = window.event;
    var target = 'target' in event ? event.target : event.srcElement;
    // console.log (event.button);
    // alert('clicked on '+ target.id);
    if (event.button == 0){
        switch (target.id) {
            
            case 'loginButton':
            data={
                trying: true,
            }
            top.opener.postMessage(data, remoteHost);

            console.table(target);
            let uname = document.querySelector("#uname").value;
            let psw = document.querySelector("#psw").value;
            let appId = document.querySelector("#appId").value;
            // console.log(uname, psw, appId);
            let cadena = uname + '|' + psw + '|' + appId;
            console.log(cadena);
            authenticate(cadena);

            break;
            
        }
        switch (target.innerText) {
            case 'Update':
                alert('are you sure?');
                break;
        
        }
    } else {
        alert('blocked');
    }
};

function authenticate(cadena){

    params = {
            'cadena': cadena,
        }
        console.log('urlSendpetition', urlBase);
        sendPetition(params, urlBase + '/api/authenticate' , authenticateHandler);
        
}

function authenticateHandler(result){
    console.log('handler',result);
    console.log('token',result.data.token);
    data= {
        success: true,
        token: result.data.token,

    }
    console.log('cross_data',data);
console.log('success', result.success)
    if(result.success){
        top.opener.postMessage(data, remoteHost);
        window.close();
    } else {
        top.opener.postMessage({trying: false}, remoteHost);
        document.getElementById('messages').innerHTML = 'username o password invalidos!';
        console.log('error en la autentificacion');
    }
}




