
// Appends a selected value to the URL with 'lang' parameter.
function changeLanguage(langSelectElement, url) {
    var selectedIndex = langSelectElement.selectedIndex;
    var selectedLang = langSelectElement.options[selectedIndex].value;

    window.location = url + "?lang=" + selectedLang;
}

function submitEnter(field,e) {
    var keycode;
    if (window.event) keycode = window.event.keyCode;
    else if (e) keycode = e.which;
    else return true;

    if (keycode == 13) {
        field.form.submit();
        return false;
    } else
        return true;
}

// replace dots with commas
function dotToComma(str) {
    if(str != null) {
        return str.replace(/\./g, ",");
    }
}

// Updates viewport rendering config for mobile devices, depending on portrait or landscape mode
// Tolerable behavior in Chrome and Safari.
// Firefox - works only on page load, not on screen rotation.
function updateViewportOrientation() {
    var viewport = document.querySelector("meta[name=viewport]");

    if (window.innerHeight > window.innerWidth) { // vertical
        viewport.setAttribute('content', 'width=400');
    } else { //horizontal
        viewport.setAttribute('content', '');
    }
}
