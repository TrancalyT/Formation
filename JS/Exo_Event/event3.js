const td = document.getElementsByTagName('td');
const tdQuery = document.querySelectorAll('td');

// INSERT VIA PROMPT

// for (i = 0; i < td.length; i++){
//     let tdSelec = td[i];
//     tdSelec.addEventListener('click', function(e) {
//         tdSelec.innerHTML = prompt("Veuillez saisir vos données : ");
//         if (tdSelec.innerHTML == ""){
//             tdSelec.innerHTML = "EMPTY";
//             tdSelec.style.color = "red";
//             tdSelec.style.fontWeight = "bold";
//         }
//     })
// }


// INSERT AVEC INPUT

tdQuery.forEach((cells)=> { // forEach permet de parcourir les cells récupérer, équivalent à un for (écriture plus facile)
    cells.addEventListener('click', function(e) {
        if(e.target.firstChild != null && e.target.firstChild.nodeType === 3){ // Condition pour ne pas recréer d'input si il y'en a déjà un, on vérifie que le contenu soit du texte et non pas un input
            let actualText = e.target.innerHTML; // OU cells.innerHTML, ici e.target est plus approprié
            let input = document.createElement("input");
            input.type = "text";
            input.value = actualText;
            e.target.innerHTML = ""; // Suppression du texte sur la TD pour garder le texte existant sur l'input
            e.target.appendChild(input); // Insertion de l'input
            input.focus(); // Mise en place du focus souris sur l'input
            input.setSelectionRange(input.value.length, input.value.length); // Placement du focus à la fin de la string (il comment à la fin de la taille de la string, et termine au même endroit)

            input.addEventListener('focusout', function(e){ // Event -> Si on perd le focus sur l'input ...
                e.target.parentElement.innerHTML = e.target.value; // On écrit la valeur de l'input sur le innerHTML de la TD.
            })
        }
    })
})