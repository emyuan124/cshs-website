function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function changeTheme(check) {
    console.log('Changing');
    document.body.dataset.theme = check.checked ? "winter" : "dark";
    if (getCookie("theme") != check.checked ? "winter": "dark") {
        setCookie("theme", check.checked ? "winter" : "dark", 360);
    }
}

window.onload = () => {
    theme = document.getElementById('theme_switch');
    current_theme = getCookie("theme");
    if (current_theme == "winter") {
        document.body.dataset.theme = "winter";
        theme.checked = true;
    }
    else {
        document.body.dataset.theme = "dark";
        theme.checked = false;
    }
}