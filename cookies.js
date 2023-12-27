let popup = document.querySelector('#cookies-popup');
document.querySelector('#accept-cookies-button').addEventListener('click', acceptCookies);
document.querySelector('#decline-cookies-button').addEventListener('click', declineCookies);
document.querySelector('#clear-cookies-button').addEventListener('click', clearCookies);

if (!getCookie('cookies-accepted')) {
    showPopup();
}


function acceptCookies() {
    hidePopup();
    let date = new Date(Date.now() + 86400e3);
    date = date.toUTCString();
    document.cookie = "cookies-accepted=true; expires=" + date;
}

function declineCookies() {
    hidePopup();

} function clearCookies() {
    deleteCookie('cookies-accepted')
}

function showPopup() {
    popup.classList.remove('hidden');
}

function hidePopup() {
    popup.classList.add('hidden');

}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function deleteCookie(name) {
    document.cookie = "cookies-accepted=; max-age=-1";
}