function hideApproveOverlay(id) {
    const str = 'popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showApproveOverlay(id) {
    const str = 'popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}

function hideRejectOverlay(id) {
    const str = 'rej-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showRejectOverlay(id) {
    const str = 'rej-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}