function showEmergency(){
    var x = document.getElementById("emergency");
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "flex";
    }
}

function showNoneEmergency(){
    var y = document.getElementById("noneEmergency");
    if (y.style.display === "none") {
        y.style.display = "flex";
    } else {
        x.style.display = "flex";
    }
}

function Emergency() {
    var x = document.getElementById("noneEmergency");
    if (x.style.display === "flex") {
        x.style.display = "none";
        showEmergency();
    } else {
        x.style.display = "none";
        showEmergency();
    }
}

function NoneEmergency() {
    var y = document.getElementById("emergency");
    if (y.style.display === "none") {
        y.style.display = "flex";
        showNoneEmergency();
    } else {
        y.style.display = "none";
        showNoneEmergency();
    }
}
