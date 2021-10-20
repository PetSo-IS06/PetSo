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
    if (x.style.display === "none") {
        x.style.display = "grid";
        Hide_Applications();
    } else {
        x.style.display = "none";
    }
}
