var xhr = new XMLHttpRequest();


// function sendPetition(params,url ,handler) {

//     var xhr = new XMLHttpRequest();
//     // var data;
// console.log('sendPetition(params,url))',params,url);
//     xhr.open("POST", url, true);
//     xhr.setRequestHeader('Content-Type', 'application/json');
//     xhr.send(JSON.stringify(params));

//     xhr.onload = function () {

//         if (this.readyState == 4 && this.status == 200) {
//             var result = {
//                 code:JSON.parse(this.responseText)['code'],
//                 success:JSON.parse(this.responseText)['success'],
//                 data: JSON.parse(this.responseText)['data'],
//                 debug: JSON.parse(this.responseText)['debug'],
//             };
//             // person = {firstName:"John", lastName:"Doe", age:46};
//             console.log('response', result);
            
//             handler(result);
//         }
//     }

// }


function sendPetition(data, url, handler, method = 'POST') {
    data = JSON.stringify(data);
    console.log("here",data, url);
    let fetchData = {};
    let params = '';
    if (method == 'POST') {
        fetchData = {
            method: method,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
            body: data,
            // headers: new Headers(),
        }
    } else {
        console.table('data> ', data);
        for (let val in data) {
            console.log(data, val);
            params = params + '&' + data[val];
        };
        fetchData = {
            method: method,
            headers: new Headers(),
        }
    }

    console.log('params',params);

    (async () => {
        const rawResponse = await fetch(url + params, fetchData);
        const json = await rawResponse.json();
      
        console.log(json);
        var result = {
            code: json.code,
            success:json.success,
            data: json.data,
            debug: json.debug,
        };
        handler(result);
      })();


}

// function getDate(){
//     var today = new Date();
//     var dd = today.getDate();
//     var mm = today.getMonth()+1; //January is 0!
//     var yyyy = today.getFullYear();
    
//     if(dd<10) {
//         dd = '0'+dd
//     } 
    
//     if(mm<10) {
//         mm = '0'+mm
//     } 
    
//     today = yyyy + '-' + mm + '-' + dd;
//     return today
// }



function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
      if ((new Date().getTime() - start) > milliseconds){
        break;
      }
    }
  }








function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1, c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length, c.length);
        }
    }
    return null;
}


function errorHandler(statusCode){

    switch (statusCode){
        case 401:
        case 402:
        case 403:
        case 404:
        case 405:
            window.location.href = '/login';
        break;
    }
}