const targetDiv = document.getElementById("vol-form");
const btn = document.getElementById("noVolunteering");
btn.onclick = function () {
  if (targetDiv.style.display !== "none") {
    targetDiv.style.display = "none";
  } else {
    targetDiv.style.display = "block";
  }
}

function hideProjectCause() {
    var x = document.getElementById("prj-cause");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function hideProjectDetails() {
    var x = document.getElementById("prj-details");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function hideVolunteering() {
    var x = document.getElementById("prj-vol");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function hideFunding() {
    var x = document.getElementById("prj-funds");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function hideBank() {
    var x = document.getElementById("prj-bank");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function showProjectDetailsNext() {
    var x = document.getElementById("prj-details");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideProjectCause();
    } else {
        x.style.display = "none";
    }
}

function showVolunteeringNext() {
    var x = document.getElementById("prj-vol");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideProjectDetails();
    } else {
        x.style.display = "none";
    }
}

function showFundingNext() {
    var x = document.getElementById("prj-funds");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideVolunteering();
    } else {
        x.style.display = "none";
    }
}

function showBankNext() {
    var x = document.getElementById("prj-bank");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideFunding();
    } else {
        x.style.display = "none";
    }
}

// Pagination

function showProjectCause() {
    var x = document.getElementById("prj-cause");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideProjectDetails();
        hideVolunteering();
        hideFunding();
        hideBank();
    } else {
        x.style.display = "none";
    }
}

function showProjectDetails() {
    var x = document.getElementById("prj-details");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideProjectCause();
        hideVolunteering();
        hideFunding();
        hideBank();
    } else {
        x.style.display = "none";
    }
}

function showVolunteering() {
    var x = document.getElementById("prj-vol");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideProjectCause();
        hideProjectDetails();
        hideFunding();
        hideBank();
    } else {
        x.style.display = "none";
    }
}

function showFunding() {
    var x = document.getElementById("prj-funds");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideProjectCause();
        hideProjectDetails();
        hideVolunteering();
        hideBank();
    } else {
        x.style.display = "none";
    }
}

function showBankInfo() {
    var x = document.getElementById("prj-bank");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideProjectCause();
        hideProjectDetails();
        hideVolunteering();
        hideFunding();
    } else {
        x.style.display = "none";
    }
}
