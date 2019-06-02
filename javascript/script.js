function valider() {

    if (document.subscribe.nom.value.length < 2) {
        alert('le nom doit comprte 2 caractaire au minimum');
        return false;
    }


    return true;

}