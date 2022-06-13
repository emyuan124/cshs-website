var dark = false;
var darkCookie = getCookie("darkModePref");


console.log("cookies are: " + darkCookie);
if (darkCookie == "light"){
    dark = false;
    switchToLightMode()
} else if(darkCookie == "dark"){
    dark = true;
    switchToDarkMode()
}else {
    document.cookie = "darkModePref=light; Secure";
}


function darkMode(){
		if(dark){
            dark = false;
            document.cookie = "darkModePref=light; Secure";
            switchToLightMode()
        }else {
            dark = true;
            switchToDarkMode()
            document.cookie = "darkModePref=dark; Secure";
        }
	}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
}

function switchToDarkMode(){
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "dark.css");
    document.getElementsByTagName("head")[0].appendChild(element);
}

function switchToLightMode(){
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "light.css");
    document.getElementsByTagName("head")[0].appendChild(element);
}
