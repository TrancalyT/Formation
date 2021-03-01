/* Programmer une fonction qui prend deux paramètre le premier un tableau et le deuxieme un nombre, 
elle devras retourner le nombre d'element specifier dans le deuxieme paramètre a partir de l'index 0.

exemple: 
const input = ['hello', 'world', '42', 'truc']

const output = slice(input, 2)
const output2 = slice(input, 3)

console.log(output) --> ['hello', 'world']
console.log(output2) --> ['hello', 'world', '42'] */

//EX_15

/*
Je veux que tu COPIE chaque valeur de l'INDEX dans mon NOUVEAU tableau
Si ta TAILLE dépasse MON PARAMETRE, alors STOP COPIER
*/

const slice = (arr, num) => {
  let i = 0
  let newArr = []

  while (arr){
    newArr[i] = arr[i]
    i++;
    if (i > num - 1) {
      break
    }
  }
  return newArr
  // arr.length = num
  // return arr
}
// const newArr = slice(['hello', 'world', '42', 'truc', 45], 3)
// console.log(newArr)
console.log(slice(['hello', 'world', '42', 'truc', 45], 3))