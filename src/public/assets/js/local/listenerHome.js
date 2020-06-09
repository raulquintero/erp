
// alistener();
// var urlDevice = 'http://kumai.local1'


document.addEventListener("keydown", function (event) {
    var target = 'target' in event ? event.target : event.srcElement;
    // alert('enter on '+ target.id);
    if (event.key === "Enter") {
        event.preventDefault();
        switch (target.id) {
            case 'key1':
                sendKey1(urlPortero);
                break;
            case 'key2':
                sendKey2(urlPortero);
                break;
            
        }
    }
});

document.onclick = function (event) {
    // Compensate for IE<9's non-standard event model
    //
    if (event === undefined) event = window.event;
    var target = 'target' in event ? event.target : event.srcElement;
    // alert('clicked on '+ target.id);
    var deviceId = 1;
    switch (target.id) {
        

        case 'load':
            console.log("block");
            loadKey(deviceId, urlDevice);
            break;
        case 'delete1':
            let id = target.getAttribute("data-id");
            deleteKey(id);
            break;
    }
};

function deleteKey(id){
    var r = confirm("Are Your Sure?");
    if (r == true) {
        params = {
            'id': id,
        }



        sendPetition(params, urlDevice + '/employee/delete' , deleteKeyHandler);
        
    } 
}
function deleteKeyHandler(result){
    document.getElementById('messages').innerHTML = 'Item was deleted';

    let table = $('#example').DataTable( );

    table
        .row( 1 )
        .remove()
        .draw();
}

function loadKey(deviceId){
    document.getElementById('messages').innerHTML = '';

    params = {
        'device_id': deviceId,
    }
    console.log(params);
    if (params['deviceId'] != ""){
        // button = document.getElementById('block' + deviceId.toString()).disabled = true;
        sendPetition(params, urlDevice + '/users/datatable', loadHandler);
    } 
   
}

function loadHandler(result){
    console.log(result);
    if ( result['status'] != 200){
        errorHandler(result['status']);
    }
    document.getElementById('messages').innerHTML = JSON.stringify(result['data']);

    // document.getElementById('options' + deviceId).innerHTML = '<button type="button" id="unblock' + deviceId + '" class="btn btn-success" onclick="unblockKey(' + deviceId + ')">UnBlock</button>';

}

function unblockKey(deviceId){
    params = {
        'device_id': deviceId,
    }
    console.log(params);
    if (params['deviceId'] != ""){
        button = document.getElementById('unblock' + deviceId.toString()).disabled = true;
        sendPetition(params, urlDevice + '/unblock', unblockHandler);
    } 
   
}

function unblockHandler(result){
    console.log(result);
    if ( result['status'] != 200){
        errorHandler(result['status']);
    }
    deviceId = result['data']['deviceId'].toString();
    button = document.getElementById('unblock' + deviceId.toString()).disabled = false;
    document.getElementById('messages').innerHTML = result['data']['message'].toUpperCase();

    document.getElementById('options' + deviceId).innerHTML = '<button type="button" id="block' + deviceId + '" class="btn btn-warning" onclick="blockKey(' + deviceId + ')">Block</button>';

}


