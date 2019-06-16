function valider() {
    if (document.subscribe.nom.value.length < 2) {
        alert('le nom doit comprter au minimum 2 caractères');
        return false;
    }
    if (document.subscribe.matricule.value.length < 8) {
        alert('le matricule doit comprter au minimum 8 caractères');
        return false;
    }
    if (document.subscribe.prenom.value.length < 2) {
        alert('le prenom doit comprter au minimum 2 caractères');
        return false;
    }


    return true;
   
}

function valider1() {


    if (document.sub.matricule.value.length < 8) {
            alert('le matricule doit comprter au minimum 8 caractères');
        return false;
    }

    return true;
   
}