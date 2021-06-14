/* Créer une fonction qui prend deux paramètre et qui va renvoyer true si il trouve 
la premiere chaine dans caractère a l'interieur de la deuxieme chaine de caractère 
et false dans le cas contraire.

input: toFind: 'xx';    str = 'salut comment ça va'
output: false

input: toFind: 'xx';    str = 'salut commxxent ça va'
output: true */

//EX_11

/*
On veut ISOLER LA DEUXIEME CHAINE DE CARACTERE
Ensuite on veut COMPARER si PARAMETRE 1 est présent dans PARAMETRE 2 (peu importe ou dans la string)
On veut une CONDITION TRUE si présent, ou FALSE si pas présent

!!!!!! PAS OBLIGER LA DEUXIEME !!!!!!! Donc split inutile.
Logique = Parcourir index de str en comparant avec index de toFind. Quand index de toFind incrémente, retourner TRUE, sinon False.
*/

const findStr = (toFind, str) => {
  
  let i = 0
  let trueOrFalse;
  const deuxiemeSplit = str.split(" ");
  const deuxiemeStr = deuxiemeSplit[1]

  console.log(deuxiemeStr)
  while (deuxiemeStr[i]){
    console.log(deuxiemeStr[i])
    i++;
  }
  if (deuxiemeStr[i] == toFind){
    trueOrFalse = true
  } else {
    trueOrFalse = false
  }
  console.log("Pour '" + toFind + "'  et '" + str + "' la réponse est " + trueOrFalse)
}
findStr("XX","salut commXXent ça va ?")

// PAS REUSSI :( 