function Hide_Content_info() {
    var x = document.getElementById("info");
    if (x.style.display === "flex") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function Content_edit() {
    var x = document.getElementById("edit");
    if (x.style.display === "none") {
        x.style.display = "flex";
        Hide_Content_info();
    } else {
        x.style.display = "none";
    }
}
