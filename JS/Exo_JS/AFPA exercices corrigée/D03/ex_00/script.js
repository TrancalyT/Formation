// const findFirstWord = (str) => {
//   let i = 0;
//   while(str[i] === ' ') {
//     i++
//   }

//   while(str[i] !== ' ' && str[i]) {
//     console.log(str[i])
//     i++
//   }
// }

// =          --> assignation
// ==         --> comparaison
// ===        --> comparaison strict

// false      --> false
// undefined  --> false
// 0          --> false

// const findFirstWord = (str) => {
//   let i = 0
//   let result = ''
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
  let i = 0
  let result = ''
  while(str[i] === ' ') {
    i++
  }

  while(str[i] !== ' ' && str[i]) {
    result = result + str[i]
    i++
  }
  return result
}

const sample = "Hello World"
//   0    1    2    3    4    5    6    7    8    9    10  11
// ['H', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd']

//   0    1    2    3    4    5    6    7    8    9    10   11   12  13
// [' ', ' ', 'H', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd']

console.log('\n--------------\n')
console.log(findFirstWord(sample))

console.log('\n--------------\n')
console.log(findFirstWord("   He0llo World   "))

console.log('\n--------------\n')
const test = findFirstWord("salut")
console.log('test ==> ', test)

console.log('\n--------------\n')
findFirstWord('  ')
