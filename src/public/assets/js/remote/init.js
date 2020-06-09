
var place = document.getElementById('login');
console.log('authServer', urlTest);

    const authServer = (urlTest) ? urlTest :'http://auth.redirectme.net' ;


function render() {
    if (place!= null){
        place.innerHTML = `<a onclick="openLogin();" style="color:white; border: 1px solid #336699; line-height: 18px; " class="btn btn-green btn-lg">
                            <i class="fa fa-sign-in fa-5"></i> Log In
                            </a>
						`;
        // place.innerHTML = `<a style="color: white;">loading ... &nbsp;&nbsp;</a>`;
        // checkStatus();
    }

}


render();

function checkStatus() {
    params = {
        'appId': 10,
        'id': readCookie('uid'),
        'ses': readCookie('PHPSESSID'),
    }
    console.log('status', params);
    console.log('authServer', params);

    sendPetition(params, authServer, checkStatusHandler);

}



function checkStatusHandler(result) {
    

    if (result.data.status){
        place.innerHTML = `	<a href="#" class='dropdown-toggle' data-toggle="dropdown">
       
            <img src="/img/demo/user-avatar.jpg" alt="">
            <img src="/img/verified2.png" height="20" alt="">
        </a>
        <ul class="dropdown-menu pull-right">
            <li>
                <a href1="#">Account settings</a>
            </li>
            <li>
                <a href="http://simplicity.local">goto simplicity.com</a>
            </li>
            <li>
                <a href= "` + authServer + `/logout">Sign out1</a>
            </li>
        </ul>`;
    } else {
        console.log('here');
        place.innerHTML = `<a onclick="openLogin();" style="color:white; border: 1px solid #336699; line-height: 18px; " class="btn btn-green btn-lg">
                            <i class="fa fa-sign-in fa-5"></i> Log In
                            </a>
                            <ul class="dropdown-menu pull-right">
							<li>
								<a href="http://simplicity.local">goto simplicity.com</a>
							</li>
							<li>
								<a href="/login">Log In</a>
							</li>
						`;
    }
}



    var mywindow;
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventer = window[eventMethod];
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";

	// Listen to message from child window
	eventer(messageEvent,function(e) {

		if (e.data.trying  == true){
			console.log('parent received message!:  ',e.data);
			document.getElementById('login').innerHTML = `<a onclick="openLogin();" style="color:white;">
                            Validando ...
                            </a>`;
		}else{
			console.log('parent received message(case:false!:  ',e.data);
			document.getElementById('login').innerHTML = `<a onclick="openLogin();" style="color:white; border: 1px solid #336699; line-height: 18px; " class="btn btn-green btn-lg">
                            <i class="fa fa-sign-in fa-5"></i> Log In
                            </a>`;
		}

		if(e.data.success == true){
			console.log('success', e);
			window.location = '/api/callback/' + e.data.token;
		}
    },false);
    

    function openLogin(){    
        myWindow = window.open("http://" + authServer + "/login", "myWindow", "location=no, toolbar=no, titlebar=no, width=400, height=330");
    }
		// Open a new window
	// function openLogin(){    
	// 	var myWindow = window.open("//{{ authServer }}/login", "myWindow", "location=no, titlebar=no, width=450, height=460");
	// }



