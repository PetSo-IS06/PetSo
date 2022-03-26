// Project Panel Popups
function showPendProjOverlay(id) {
    const str = 'prj-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}

function hidePendProjOverlay(id) {
    const str = 'prj-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

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

// Account Requests Panel Popups
function hideApproveReqOverlay(id) {
    const str = 'req-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showApproveReqOverlay(id) {
    const str = 'req-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}

function hideRejectReqOverlay(id) {
    const str = 'req-rej-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showRejectReqOverlay(id) {
    const str = 'req-rej-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}

function hideOrgDetailsOverlay(id) {
    const str = 'org-details' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showOrgDetailsOverlay(id) {
    const str = 'org-details' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}

// Side navigation
function showRequestsPanel() {
    var x = document.getElementById("req-sec");
    var tag = document.getElementById("req-tag");
    if (x.style.display !== "block") {
        x.style.display = "block";
        tag.classList.add("active-tag");
        hideProjectsPanel();
    }
}

function hideRequestsPanel() {
    var x = document.getElementById("req-sec");
    var tag = document.getElementById("req-tag");
    if (x.style.display !== "none") {
        x.style.display = "none";
        tag.classList.remove("active-tag");
    }
}

function hideProjectsPanel() {
    var x = document.getElementById("proj-sec");
    var tag = document.getElementById("proj-tag");
    if (x.style.display !== "none") {
        x.style.display = "none";
        tag.classList.remove("active-tag");
    }
}

function showProjectsPanel() {
    var x = document.getElementById("proj-sec");
    var tag = document.getElementById("proj-tag");
    if (x.style.display !== "block") {
        x.style.display = "block";
        tag.classList.add("active-tag");
        hideRequestsPanel();
    }
}
