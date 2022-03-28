/************ Section display ************/

function Hide_Opportunities() {
    var x = document.getElementById("opportunities");
    if (x.style.display === "flex") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function Show_Applications() {
    var x = document.getElementById("article");
    if (x.style.display === "none") {
        x.style.display = "grid";
        Hide_Opportunities();
    } else {
        x.style.display = "none";
    }
}

function Hide_Applications() {
    var x = document.getElementById("article");
    if (x.style.display === "flex") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function Show_Opportunities() {
    var x = document.getElementById("opportunities");
    var tag = document.getElementById("vol-tag");
    if (x.style.display === "none") {
        x.style.display = "grid";
        tag.classList.add("active-tag");
        Hide_Applications();
    }
}

function showAllAnimals() {
    var x = document.getElementById("view-all-animals");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideAnimalsOverview();
    }
}

function showAnimalsOverview() {
    var x = document.getElementById("prof-overview");
    var btn = document.getElementById("all-animals-btn");
    var back_btn = document.getElementById("back-to-an-overview");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideAllAnimals();
    }
    btn.classList.remove("disable");
    back_btn.style.display === "none";
}

function hideAnimalsOverview() {
    var x = document.getElementById("prof-overview");
    var btn = document.getElementById("all-animals-btn");
    var back_btn = document.getElementById("back-to-an-overview");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
    btn.classList.add("disable");
    back_btn.style.display = "block";
}

function hideAllAnimals() {
    var x = document.getElementById("view-all-animals");
    var back_btn = document.getElementById("back-to-an-overview");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
    showAnimalsOverview();
    back_btn.style.display = "none";
}
/************ Pop Ups************/

// Animal Profiles Popups
function hideProfileOverlay(id) {
    const str = 'popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
    disableProfileEdit($id);
}

function showProfileOverlay(id) {
    const str = 'popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "flex") {
        x.style.display = "flex";
    }
}

// Animal Reports Popups
function hideAllReportOverlay(id) {
    const str = 'all-rep-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showAllReportOverlay(id) {
    const str = 'all-rep-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "flex") {
        x.style.display = "flex";
    }
}

function hidePendReportOverlay(id) {
    const str = 'pend-rep-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "none") {
        x.style.display = "none";
    }
}

function showPendReportOverlay(id) {
    const str = 'pend-rep-popup' + id;
    var x = document.getElementById(str);
    if (x.style.display !== "flex") {
        x.style.display = "flex";
    }
}

function enableProfileEdit($id) {
    var str = 'edit-animal-prof' + $id;
    var targetDiv = document.getElementById(str);
    var inputFields = targetDiv.getElementsByTagName("input");
    var textFields = targetDiv.getElementsByTagName("textarea");
    for (let i = 0; i < inputFields.length; i++) {
        inputFields[i].disabled = false;
    }
    for (let i = 0; i < textFields.length; i++) {
        textFields[i].disabled = false;
    }
    hideEditBtn($id);
    showSaveBtn($id);
    showTypeList();
    showGenderList();
    showAdoptStatList();
    showSponStatList();
    showImgUploadBtn();
}

function disableProfileEdit($id) {
    var str = 'edit-animal-prof' + $id;
    var targetDiv = document.getElementById(str);
    var inputFields = targetDiv.getElementsByTagName("input");
    var textFields = targetDiv.getElementsByTagName("textarea");
    for (let i = 0; i < inputFields.length; i++) {
        inputFields[i].disabled = true;
    }
    for (let i = 0; i < textFields.length; i++) {
        textFields[i].disabled = true;
    }
    showEditBtn($id);
    hideSaveBtn($id);
    hideTypeList();
    hideGenderList();
    hideAdoptStatList();
    hideSponStatList();
}

function showTypeList() {
    var x = document.getElementById('animal-type');
    x.style.display = 'block';
    var y = document.getElementById('type-in');
    y.style.display = 'none';
}

function hideTypeList() {
    var x = document.getElementById('animal-type');
    x.style.display = 'none';
    var y = document.getElementById('type-in');
    y.style.display = 'block';
}

function showGenderList() {
    var x = document.getElementById('animal-gender');
    x.style.display = 'block';
    var y = document.getElementById('gender-in');
    y.style.display = 'none';
}

function hideGenderList() {
    var x = document.getElementById('animal-gender');
    x.style.display = 'none';
    var y = document.getElementById('gender-in');
    y.style.display = 'block';
}

function showAdoptStatList() {
    var x = document.getElementById('adopt-status');
    x.style.display = 'block';
    var y = document.getElementById('adopt-in');
    y.style.display = 'none';
}

function hideAdoptStatList() {
    var x = document.getElementById('adopt-status');
    x.style.display = 'none';
    var y = document.getElementById('adopt-in');
    y.style.display = 'block';
}

function showImgUploadBtn() {
    var x = document.getElementById('change-img');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    }
}

function showSponStatList() {
    var x = document.getElementById('spon-status');
    x.style.display = 'block';
    var y = document.getElementById('spon-in');
    y.style.display = 'none';
}

function hideSponStatList() {
    var x = document.getElementById('spon-status');
    x.style.display = 'none';
    var y = document.getElementById('spon-in');
    y.style.display = 'block';
}

function hideEditBtn($id) {
    var str = 'edit-btn' + $id;
    var x = document.getElementById(str);
    x.style.display = 'none'
}

function showEditBtn($id) {
    var str = 'edit-btn' + $id;
    var x = document.getElementById(str);
    x.style.display = 'block'
}

function hideSaveBtn() {
    var str = 'save-btn' + $id;
    var x = document.getElementById(str);
    x.style.display = 'none'
}

function showSaveBtn($id) {
    var str = 'save-btn' + $id;
    var x = document.getElementById(str);
    x.style.display = 'block'
}

/************ Side panel Navigation************/

function showVolunteerPanel() {
    var x = document.getElementById("vol-sec");
    var tag = document.getElementById("vol-tag");
    if (x.style.display !== "block") {
        x.style.display = "block";
        tag.classList.add("active-tag");
        hideProjectPanel();
        hideFaundraisingPanel();
        hideAnimalProfilesPanel();
        hideReportPanel();
    }
}

function hideProjectPanel() {
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
        hideVolunteerPanel();
        hideFaundraisingPanel();
        hideVolApplications();
        hideAnimalProfilesPanel();
        hideReportPanel();
    }
}

function hideVolunteerPanel() {
    var x = document.getElementById("vol-sec");
    var tag = document.getElementById("vol-tag");
    if (x.style.display !== "none") {
        x.style.display = "none";
        tag.classList.remove("active-tag");
    }
}

function showFaundraisingPanel() {
    var x = document.getElementById("fund-sec");
    var tag = document.getElementById("fund-tag");
    if (x.style.display !== "block") {
        x.style.display = "block";
        tag.classList.add("active-tag");
        hideVolunteerPanel();
        hideProjectPanel();
        hideVolApplications();
        hideAnimalProfilesPanel();
        hideReportPanel();
    }
}

function hideFaundraisingPanel() {
    var x = document.getElementById("fund-sec");
    var tag = document.getElementById("fund-tag");
    if (x.style.display !== "none") {
        x.style.display = "none";
        tag.classList.remove("active-tag");
    }
}

function showReportPanel() {
    var x = document.getElementById("rep-sec");
    var tag = document.getElementById("rep-tag");
    if (x.style.display !== "block") {
        x.style.display = "block";
        tag.classList.add("active-tag");
        hideVolunteerPanel();
        hideProjectPanel();
        hideVolApplications();
        hideAnimalProfilesPanel();
    }
}

function hideReportPanel() {
    var x = document.getElementById("rep-sec");
    var tag = document.getElementById("rep-tag");
    if (x.style.display !== "none") {
        x.style.display = "none";
        tag.classList.remove("active-tag");
    }
}

// Showing all pending reports
function showPendingReports() {
    var x = document.getElementById("init-display-pend-rep");
    var btn = document.getElementById("all-reports-btn");
    var back_btn = document.getElementById("back-to-report-panel");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideAllAnimalReports();
    }
    btn.classList.remove("disable");
    btn.disabled = false;
    back_btn.style.display === "none";
}

function hidePendingReports() {
    var x = document.getElementById("init-display-pend-rep");
    var btn = document.getElementById("all-reports-btn");
    var back_btn = document.getElementById("back-to-report-panel");
    if (x.style.display != "none") {
        x.style.display = "none";
    }
    btn.classList.add("disable");
    btn.disabled = true;
    back_btn.style.display = "block";
}

function showAllAnimalReports() {
    var x = document.getElementById("dis-all-rep");
    if (x.style.display != "block") {
        x.style.display = "block";
        hidePendingReports();
    }
}

function hideAllAnimalReports() {
    var x = document.getElementById("dis-all-rep");
    var back_btn = document.getElementById("back-to-report-panel");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
    showPendingReports();
    back_btn.style.display = "none";
}

function showAnimalProfilesPanel() {
    var x = document.getElementById("animal-sec");
    var tag = document.getElementById("animal-tag");
    if (x.style.display !== "block") {
        x.style.display = "block";
        tag.classList.add("active-tag");
        hideVolunteerPanel();
        hideProjectPanel();
        hideVolApplications();
        hideFaundraisingPanel();
        hideAllAnimals();
        showAnimalsOverview();
        hideReportPanel();
    }
}

function hideAnimalProfilesPanel() {
    var x = document.getElementById("animal-sec");
    var tag = document.getElementById("animal-tag");
    if (x.style.display !== "none") {
        x.style.display = "none";
        tag.classList.remove("active-tag");
    }
}

function showVolApplications() {
    var x = document.getElementById("volApp-sec");
    var tag = document.getElementById("vol-tag");
    if (x.style.display !== "block") {
        x.style.display = "block";
        tag.classList.add("active-tag");
        hideVolunteerPanel();
        hideProjectPanel();
        hideFaundraisingPanel();
        hideAnimalProfilesPanel();
        hideReportPanel();
    }
}

function hideVolApplications() {
    var x = document.getElementById("volApp-sec");
    var tag = document.getElementById("vol-tag");
    if (x.style.display !== "none") {
        x.style.display = "none";
        tag.classList.remove("active-tag");
    }
}