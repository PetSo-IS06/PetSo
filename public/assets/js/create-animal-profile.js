function toggleAdoption() {
    const targetDiv = document.getElementById('adoption-req');
    const textFields = targetDiv.getElementsByTagName("textarea");
    if(document.getElementById('adoption').checked) {
        targetDiv.style.opacity = "1";
        for(let i=0; i<textFields.length; i++) {
            textFields[i].disabled = false;
        }
    } 
    if(!document.getElementById('adoption').checked) {
        targetDiv.style.opacity = "0.5";
        for(let i=0; i<textFields.length; i++) {
            textFields[i].disabled = true;
        }
    }
}

function toggleSponsorship() {
    const targetDiv = document.getElementById('sponsor-info');
    const textFields = targetDiv.getElementsByTagName("input");
    if(document.getElementById('sponsorship').checked) {
        targetDiv.style.opacity = "1";
        for(let i=0; i<textFields.length; i++) {
            textFields[i].disabled = false;
        }
    } 
    if(!document.getElementById('sponsorship').checked) {
        targetDiv.style.opacity = "0.5";
        for(let i=0; i<textFields.length; i++) {
            textFields[i].disabled = true;
        }
    }
}
