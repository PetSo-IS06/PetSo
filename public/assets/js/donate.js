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
}

function emptyOtherCol() {
    var oth = document.getElementById("otherAmount");
    oth.value = '';
}

function makePayment(){
    var amnt = document.getElementsByName("amount");
    var othAmnt = document.getElementById("otherAmount");
    var finalAmnt;
    if(amnt[0].value != '' || amnt[0] != 0){
        finalAmnt = amnt[0].value;
    } else {
        finalAmnt = otherAmount.value;
    }
    var ele = document.getElementsByName("amount");
    for(var i=0;i<ele.length;i++)
        ele[i].value = finalAmnt;

    document.getElementById('donate-form').submit();
}
