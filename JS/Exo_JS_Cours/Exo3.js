function IsItPair(value)
{
    let isItPair = true;

    if (value % 2 != 0){
        isItPair = false;
    } 

    return isItPair
}

let value = prompt("Veuillez saisir un chiffre : ");

if (IsItPair(value)){
    console.log ("Ce chiffre est pair !");
} else {
    console.log ("Ce chiffre est impair !");
}
