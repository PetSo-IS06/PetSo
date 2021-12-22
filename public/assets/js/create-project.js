const targetDiv = document.getElementById("vol-form");
const btn = document.getElementById("noVolunteering");
btn.onclick = function () {
  if (targetDiv.style.display !== "none") {
    targetDiv.style.display = "none";
  } else {
    targetDiv.style.display = "block";
  }
}

function Hide_Opportunities() {
    var x = document.getElementById("opportunities");
    if (x.style.display === "flex") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function showProjectDetailsForm() {
    var x = document.getElementById("prj-details");
    if (x.style.display === "none") {
        x.style.display = "block";
        Hide_Opportunities();
    } else {
        x.style.display = "none";
    }
}