/* Programmer une fonction qui prendras 3 paramètre le premier etant un tableau et les deux suivants 
des chaine de caractère le deuxième est une chaine de caractère a trouver dans le tableau afin de la 
remplacer par le troisieme argument. Le retour de votre fonction seras un nouveau tableau avec 
la string a rechercher remplacer par la string donner en troisieme paramètre.

exemple: 
const input = ['hello', 'world', '42', 'truc']

const output = findAnReplace(input, 'world', 'toto')
const output2 = findAnReplace(input, 'truc', 'machin')

console.log(output) --> ['hello', 'toto', '42', 'truc']
console.log(output2) --> ['hello', 'world', '42', 'machin']*/

//EX_16

/*

*/

const findAndReplace = (arr, toFind, str) => {

  let i = 0

  // while (arr[i]){
  //   i++;
  //   if(arr[i] === toFind) {
  //     arr.indexOf(toFind) 
  //   } else {
  //     break
  //   }
  //   // console.log(arr.indexOf(toFind))
  //   // console.log(str)
  // }
  arr.splice(arr.indexOf(toFind), 1, str);
  return arr
}

console.log(findAndReplace(['hello', 'word', '42', 'truc'], "42", "toto"))

