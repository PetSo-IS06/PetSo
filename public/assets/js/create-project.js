const targetDiv = document.getElementById("vol-form");
const btn = document.getElementById("noVolunteering");
btn.onclick = function () {
  if (targetDiv.style.display !== "none") {
    targetDiv.style.display = "none";
  } else {
    targetDiv.style.display = "block";
  }
}