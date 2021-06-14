

function comparerValues(valeur1, valeur2){
    if (valeur1 === valeur2){
        return console.log("Les valeurs sont identiques !")
    } else {
        return console.log("Les valeurs sont totalement différentes voyons !")
    }
}

let valeur1 = prompt("Veuillez saisir votre première valeur : ");
let valeur2 = prompt("Veuillez saisir votre deuxième valeur : ");

comparerValues(valeur1, valeur2);
