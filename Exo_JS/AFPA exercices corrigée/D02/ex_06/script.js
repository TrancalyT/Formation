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

// With sample 'Hello World'
//   0    1    2    3    4    5    6    7    8    9    10  11
// ['H', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd']

// iteration 1 -> i = 0 -> result = ''
// result = '' + 'H' = 'H'

// iteration 2 -> i = 1 -> result = 'H'
// result = 'H' + 'e' = 'He'

// iteration 3 -> i = 2 -> result = 'He'
// result = 'He' + 'l' = 'Hel'
// ...........

// With sample '  Hello World'
//   0    1    2    3    4    5    6    7    8    9    10   11   12  13
// [' ', ' ', 'H', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd']

// First While:
// iteration 1 -> i = 0
// i = 0 + 1 = 1

// iteration 2 -> i = 1
// i = 1 + 1 = 2

// iteration 3 -> i = 2
// nothing happen

// Second While:
// iteration 1 -> i = 2 -> result = ''
// result = '' + 'H' = 'H'
// i = 2 + 1 = 3

// iteration 2 -> i = 3 -> result = 'H'
// result = 'H' + 'e' = 'He'
// i = 3 + 1 = 4

// iteration 3 -> i = 4 -> result = 'He'
// result = 'He' + 'l' = 'Hel'
// i = 4 + 1 = 5
// ...........

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


const strLen = (str) => {
  let  i = 0;
  while(str[i]) {
    i++
  }

  return i;
}

const strTestLength = 'hello'

console.log('test .length', strTestLength.length)
console.log('test .length', 'hello'.length)

console.log('strLen(hello) ==> ', strLen('hello'))
