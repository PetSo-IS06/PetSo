function showSec2() {
    var x = document.getElementById("sec2");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideSec1();
    } else {
        x.style.display = "none";
    }
}

function hideSec1() {
    var x = document.getElementById("sec1");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function showSec1() {
    var x = document.getElementById("sec1");
    if (x.style.display === "none") {
        x.style.display = "block";
        hideSec2();
    } else {
        x.style.display = "none";
    }
}

function hideSec2() {
    var x = document.getElementById("sec2");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function disableContinue() {
    var btn = document.getElementById("donate-cont-btn");
    var val = document.getElementById("amount");
    if(val.value < 500) {
        btn.href = '#'
        btn.style.opacity = '0.5';
        btn.style.pointer-events;  'none';
    }
}
