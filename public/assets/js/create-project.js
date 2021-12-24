const targetDiv = document.getElementById("new-account");
const btn = document.getElementById("saved-account");
btn.onclick = function () {
  if (targetDiv.style.display !== "none") {
    targetDiv.style.display = "none";
  } else {
    targetDiv.style.display = "block";
  }
}

// Form visibility toggle
function hideNewAccountForm() {
    const targetDiv = document.getElementById("new-account");
    const inputFields = targetDiv.getElementsByTagName("input");
    if (targetDiv.style.opacity !== "0.5") {
        targetDiv.style.opacity = "0.5";
        for(let i=0; i<inputFields.length; i++) {
            inputFields[i].disabled = true;
        }
        showBankAccounts();
    }
}

function showNewAccountForm() {
    const targetDiv = document.getElementById("new-account");
    const inputFields = targetDiv.getElementsByTagName("input");
    if (targetDiv.style.opacity !== "1") {
        targetDiv.style.opacity = "1";
        for(let i=0; i<inputFields.length; i++) {
            inputFields[i].disabled = false;
        }
    }
}

function hideBankAccounts() {
    const targetDiv = document.getElementById("saved-account");
    const cards = targetDiv.getElementsByClassName("acnt-card");
    if (targetDiv.style.opacity !== "0.5") {
        targetDiv.style.opacity = "0.5";
        for(let i=0; i<cards.length; i++) {
            cards[i].style.cursor = "not-allowed";
        }
        showNewAccountForm();
    }
}

function showBankAccounts() {
    const targetDiv = document.getElementById("saved-account");
    const cards = targetDiv.getElementsByClassName("acnt-card");
    if (targetDiv.style.opacity !== "1") {
        targetDiv.style.opacity = "1";
        for(let i=0; i<cards.length; i++) {
            cards[i].style.cursor = "pointer";
        }
    }
}

function hideFundsForm() {
    const targetDiv = document.getElementById("fund-inputs");
    const inputFields = targetDiv.getElementsByTagName("input");
    const textFields = targetDiv.getElementsByTagName("textarea");
    if (targetDiv.style.opacity !== "0.5") {
        targetDiv.style.opacity = "0.5";
        for(let i=0; i<inputFields.length; i++) {
            inputFields[i].disabled = true;
        }
        for(let i=0; i<textFields.length; i++) {
            textFields[i].disabled = true;
        }
    }
}

function showFundsForm() {
    const targetDiv = document.getElementById("fund-inputs");
    const inputFields = targetDiv.getElementsByTagName("input");
    const textFields = targetDiv.getElementsByTagName("textarea");
    if (targetDiv.style.opacity !== "1") {
        targetDiv.style.opacity = "1";
        for(let i=0; i<inputFields.length; i++) {
            inputFields[i].disabled = false;
        }
        for(let i=0; i<textFields.length; i++) {
            textFields[i].disabled = false;
        }
    }
}

function hideVolForm() {
    const targetDiv = document.getElementById("vol-form");
    const inputFields = targetDiv.getElementsByTagName("input");
    const textFields = targetDiv.getElementsByTagName("textarea");
    if (targetDiv.style.opacity !== "0.5") {
        targetDiv.style.opacity = "0.5";
        for(let i=0; i<inputFields.length; i++) {
            inputFields[i].disabled = true;
        }
        for(let i=0; i<textFields.length; i++) {
            textFields[i].disabled = true;
        }
    }
}

function showVolForm() {
    const targetDiv = document.getElementById("vol-form");
    const inputFields = targetDiv.getElementsByTagName("input");
    const textFields = targetDiv.getElementsByTagName("textarea");
    if (targetDiv.style.opacity !== "1") {
        targetDiv.style.opacity = "1";
        for(let i=0; i<inputFields.length; i++) {
            inputFields[i].disabled = false;
        }
        for(let i=0; i<textFields.length; i++) {
            textFields[i].disabled = false;
        }
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
