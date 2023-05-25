

function checkCookie() {
  var cookieAccepted = getCookie("cookieAccepted");
  var cookieBanner = document.getElementById("cookie-banner");

  if (cookieAccepted === "") {
    
    cookieBanner.style.display = "block";
  } else {

    cookieBanner.style.display = "none";
  }
}


function getCookie(cookieName) {
  var name = cookieName + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var cookieArray = decodedCookie.split(";");

  for (var i = 0; i < cookieArray.length; i++) {
    var cookie = cookieArray[i];
    while (cookie.charAt(0) === " ") {
      cookie = cookie.substring(1);
    }
    if (cookie.indexOf(name) === 0) {
      return cookie.substring(name.length, cookie.length);
    }
  }
  return "";
}

function setCookie(cookieName, cookieValue, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = cookieName + "=" + cookieValue + expires + "; path=/";
}

function acceptCookie() {
  var cookieBanner = document.getElementById("cookie-banner");
  cookieBanner.style.display = "none";
  setCookie("cookieAccepted", "true", 30); 
}


var acceptButton = document.getElementById("cookie-accept");
acceptButton.addEventListener("click", acceptCookie);


checkCookie();
