const split = document.getElementsByClassName('split');
const br = document.getElementsByTagName('br');

for (i = 0; i < split.length; i++){
    let splitSelec = split[i];
    splitSelec.addEventListener('click', function(e) {
        for(j = br.length - 1; j >= 0; j--){
            br[j].remove() 
        }
    })
}

// DEUXIEME SOLUCE AVEC BOUCLE WHILE

    // split[0].addEventListener('click', function(e) {
    //     while(br.length != 0){
    //         j = br.length - 1;
    //         console.log(j)
    //         br[j].remove(j);
    //         j--;
    //     }
    // })