/* Programmer une fonction qui prend deux paramètre un tableau et une string et qui va vous retourner 
l'index de la premiere occurence trouver dans un tableau de chaine de caractère,
ou retourne false si il ne la trouve pas.

Exemple:
const arr1 = ['salut tout le monde', 'hello world', 'toto', 'tata']

findWordInArray(arr1, 'hello world') --> 1
findWordInArray(arr1, 'tata') --> 3
findWordInArray(arr1, 'i love chocolate') --> false */

//EX_14

/*

*/

const findWordInArray = (arr, str) => {
  let itsFalse;
  let pos1;
  let trueOrFalse;
  let pos = arr.indexOf(str)
  let i = 0

  // while (i < arr.length){
  //   if (arr[i] == str) {
  //     console.log("L'index de l'élément " + str + " est " + [i])
  //   } else {
  //     return false
  //   }
  //   i++;
  //   }
  // }
    // console.log("L'index de l'élément " + str + " est " + pos1)
    // console.log(itsFalse)
  
  if (pos === -1){
      trueOrFalse = console.log(false)
    } else {
      trueOrFalse = console.log("L'index de l'élément " + str + " est " + pos)
    }
  }

findWordInArray(["Ola", "True true", "Anthony est beau"], "Anthony est beau")
console.log("----------------")
findWordInArray(["Ola", "True true", "Voyons narvalito"], "Massimo est beau ?")

// PAS REUSSI (sans méthode) :(

/* 
BOUCLER SUR UN TABLEAU
fruits.forEach(function(item, index, array) {
  console.log(item, index);
});
// Apple 0
// Banana 1

TROUVER INDEX DANS UN TABLEAU
fruits.push('Mango');
// ["Strawberry", "Banana", "Mango"]

var pos = fruits.indexOf('Banana');
// 1 
*/