function validate() {
    const form = document.inscription;
    let password = form.motdepasse ? form.motdepasse.value : null; 

//ANCHOR TRAITEMENT GENERIQUE
for (let i = 0; i < form.elements.length; i++) {
    const field = form.elements[i];
    if (field.name) {
        const validationMessageElement = document.getElementById(`${field.name}-validation`);
        if (field.checkValidity()) {
            field.classList.remove('is-invalid');
            field.classList.add('is-valid');
            if (validationMessageElement) {
                validationMessageElement.innerText = "";
            }
        } else {
            field.classList.remove('is-valid');
            field.classList.add('is-invalid');
            if (validationMessageElement) {
                validationMessageElement.innerText = `${field.validationMessage}`;
            }
        }
    }
}


// ANCHOR TRATEMENT CONFIRMATION MOT DE PASSE
    let confpasse = form.confpasse;
    if (confpasse) {
        if (confpasse.checkValidity() && confpasse.value === password) {
            confpasse.classList.remove('is-invalid');
            confpasse.classList.add('is-valid');
            document.getElementById(`confpasse-validation`).innerText = "";
        } else {
            confpasse.classList.remove('is-valid');
            confpasse.classList.add('is-invalid');
            if (confpasse.value !== password) {
                document.getElementById(`confpasse-validation`).innerText = "Les mots de passe ne correspondent pas.";
            } else {
                document.getElementById(`confpasse-validation`).innerText = `${confpasse.validationMessage}`;
            }
        }
    }
}

document.inscription.addEventListener('submit', function (e) {
    e.preventDefault();
    validate();

    let data = new FormData(this);
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.response);
            let res = this.response;
            if (res.success) {
                console.log("utilisateur inscrit");
            } else {
                alert(res.msg)
            }
        } else if (this.readyState == 4) {  
            alert("Une erreur est survenue...");
        }
    };
    xhr.open("POST", "/prix/js/async/script.php", true);
    xhr.responseType = "json";
    xhr.send(data);
    return false;
});
