function verifChamps() {
    var nbLettres = this.value.length;
    if (nbLettres == 0) {
        $(this).removeClass('border');
    }
    else if (nbLettres >= 1 && nbLettres < 2) {
        $(this).removeClass('border-green-500').addClass('border-red-500');
    }
    else if (nbLettres >= 2) {
        $(this).removeClass('border-red-500').addClass('border-green-500');
    }
}
function verifChamps2() {
    var nbChiffres = this.value.length;
    if (nbChiffres == 0) {
        $(this).removeClass('border');
    }
    else if (nbChiffres >= 1 && nbChiffres < 5) {
        $(this).removeClass('border-green-500').addClass('border-red-500');
    }
    else if (nbChiffres = 5) {
        $(this).removeClass('border-red-500').addClass('border-green-500');
    }
}
