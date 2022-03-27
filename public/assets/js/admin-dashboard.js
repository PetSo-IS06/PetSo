// Users Panel Sections
function showUsers() {
    var x = document.getElementById("all-users");
    var disable_btn = document.getElementById("view-user-btn");
    var show__btn1 = document.getElementById("view-org-btn");
    var show__btn2 = document.getElementById("view-admin-btn");

    if (x.style.display === "none") {
        x.style.display = "block";
        hideOrgs();
        hideAdmins();
    }
    disable_btn.style.display = "none";
    show__btn1.style.display = "block";
    show__btn2.style.display = "block";
}

function hideUsers() {
    var x = document.getElementById("all-users");
    if (x.style.display != "none") {
        x.style.display = "none";
    }
}

function showOrgs() {
    var x = document.getElementById("all-org");
    var disable_btn = document.getElementById("view-org-btn");
    var show__btn1 = document.getElementById("view-user-btn");
    var show__btn2 = document.getElementById("view-admin-btn");
    if (x.style.display != "block") {
        x.style.display = "block";
        hideUsers();
        hideAdmins();
    }
    disable_btn.style.display = "none";
    show__btn1.style.display = "block";
    show__btn2.style.display = "block";
}

function hideOrgs() {
    var x = document.getElementById("all-org");
    if (x.style.display != "none") {
        x.style.display = "none";
    }
}

function showAdmins() {
    var x = document.getElementById("all-admins");
    var disable_btn = document.getElementById("view-admin-btn");
    var show__btn1 = document.getElementById("view-user-btn");
    var show__btn2 = document.getElementById("view-org-btn");
    if (x.style.display != "block") {
        x.style.display = "block";
        hideUsers();
        hideOrgs();
    }
    disable_btn.style.display = "none";
    show__btn1.style.display = "block";
    show__btn2.style.display = "block";
}

function hideAdmins() {
    var x = document.getElementById("all-admins");
    if (x.style.display != "none") {
        x.style.display = "none";
    }
}

// Project Panel Sections
function showPendProjects() {
    var x = document.getElementById("all-pend-prj");
    var disable_btn = document.getElementById("view-pend-prj-btn");
    var show__btn = document.getElementById("view-all-prj-btn");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideAllProjects();
    }
    disable_btn.style.display = "none";
    show__btn.style.display = "block";
}

function hidePendProjects() {
    var x = document.getElementById("all-pend-prj");
    if (x.style.display != "none") {
        x.style.display = "none";
    }
}

function showAllProjects() {
    var x = document.getElementById("all-prj");
    var disable_btn = document.getElementById("view-all-prj-btn");
    var show__btn = document.getElementById("view-pend-prj-btn");
    if (x.style.display != "block") {
        x.style.display = "block";
        hidePendProjects();
    }
    disable_btn.style.display = "none";
    show__btn.style.display = "block";
}

function hideAllProjects() {
    var x = document.getElementById("all-prj");
    if (x.style.display != "none") {
        x.style.display = "none";
    }
    showPendProjects();
}

// Users Panel Popups
function showCreateAdminForm() {
    var x = document.getElementById('create-ad-popup');
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}

function hideCreateAdminForm() {
    var x = document.getElementById('create-ad-popup');
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

// Project Panel Popups
function showPendProjOverlay(id) {
    const str = 'pend-prj-det-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}

function hidePendProjOverlay(id) {
    const str = 'pend-prj-det-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showProjOverlay(id) {
    const str = 'prj-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}

function hideProjOverlay(id) {
    const str = 'prj-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function hideApproveOverlay(id) {
    const str = 'app-prj-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showApproveOverlay(id) {
    const str = 'app-prj-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "block") {
        x.style.display = "block";
    }
}

function hideRejectOverlay(id) {
    const str = 'rej-prj-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showRejectOverlay(id) {
    const str = 'rej-prj-popup' + id;
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
function showUsersPanel() {
    var x = document.getElementById("usr-sec");
    var tag = document.getElementById("usr-tag");
    if (x.style.display !== "block") {
        x.style.display = "block";
        tag.classList.add("active-tag");
        hideProjectsPanel();
        hideRequestsPanel();
    }
}

function hideUsersPanel() {
    var x = document.getElementById("usr-sec");
    var tag = document.getElementById("usr-tag");
    if (x.style.display !== "none") {
        x.style.display = "none";
        tag.classList.remove("active-tag");
    }
}

function showRequestsPanel() {
    var x = document.getElementById("req-sec");
    var tag = document.getElementById("req-tag");
    if (x.style.display !== "block") {
        x.style.display = "block";
        tag.classList.add("active-tag");
        hideProjectsPanel();
        hideUsersPanel();
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
        hideUsersPanel();
    }
}
