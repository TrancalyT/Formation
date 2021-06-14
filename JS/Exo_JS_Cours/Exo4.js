function facto(value)
{
    let facto = 1;

    for (i = 1; i <= value; i++){
        facto =  facto * i;
    }

    return facto;

}

let value = prompt("Veuillez saisir un nombre : ");

console.log("La factorielle de " + value + " est " + facto(value));