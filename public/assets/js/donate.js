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

function setAmount() {
    var ele = document.getElementsByName("amount");
    for(var i=0;i<ele.length;i++)
        ele[i].checked = false;

    const customInput = document.getElementsByName("otherAmount");
    
    for(var i=0;i<ele.length;i++)
        ele[i].value = customInput.value;
    
}
