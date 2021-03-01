/*

*/

// EX_06

// const findFirstWord = (str) => {
//   let i = 0;
//   let copy = "";
//   while (str[i]) {
//     copy = copy + str[i];
//     i++;
//   }
//   let space = " ";
//   while (str[i]) {
//     space = space - str[i];
//     i++;
//     if (str[i] == " ") {
//       break;
//   }

//   }
//   return copy;
// };

// console.log(findFirstWord("    Hello World"));

// const findFirstWord = (str) => {
//   let i = 0
//   let result = ""
//   while(str[i] === ' ') {
//     i++
//   }

//   while(str[i] !== ' ') {
//     if (!str[i]) {
//       break
//     }
//     result = result + str[i]
//     i++
//   }
//   return result
// }

const findFirstWord = (str) => {
  let i = 0;
  let result = ""
  while(str[i] === ' ') {
    console.log(str[i])
    i++
  }

  while(str[i] !== ' ' && str[i]) {
    console.log(str[i])
    // if (!str[i]) { break}
    result = result + str[i]
    i++
  }
  return result
}
console.log(findFirstWord("    Hello World"));