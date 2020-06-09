
// alistener();
var urlBase = 'http://simplicity.local'


document.onclick = function (event) {
    // Compensate for IE<9's non-standard event model
    //
    if (event === undefined) event = window.event;
    var target = 'target' in event ? event.target : event.srcElement;
    // alert('clicked on '+ target.id);
    // console.table(target);
    var deviceId = 1;
    switch (target.id) {
        
        case 'themeSelector':
        // console.table(target);
        document.querySelector('#dateWidget').className = target.dataset.color;
        themeSelector(target.dataset.color);
        break;
        
    }
    switch (target.innerText) {
        case 'Update':
            alert('are you sure?');
            break;
    
    }
};

function themeSelector(color){

    params = {
            'color': color,
        }

        sendPetition(params, urlBase + '/settings/color' , themeSelectorHandler);
        
}

function themeSelectorHandler(result){
    console.log('color cambiado');
}




