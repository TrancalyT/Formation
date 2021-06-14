const printStr = (str) => {
  let i = 0;

  while(str[i]) {
    console.log(str[i])
    i++
  }
}

//   0    1    2    3    4    5    6    7    8    9    10  11
// ['H', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd']

const sample = "Hello World"
console.log('sample[0]', sample[0])
console.log('sample[1]', sample[1])
console.log('sample[10]', sample[10])
console.log('sample[12]', sample[12])
printStr(sample)

// const vowelCount = (str) => {
//   let i = 0
//   let result = 0

//   while(str[i]) {
//     if (str[i] === 'a') {
//       result++
//     }
//     if (str[i] === 'e') {
//       result++
//     }
//     if (str[i] === 'i') {
//       result++
//     }
//     if (str[i] === 'o') {
//       result++
//     }
//     if (str[i] === 'u') {
//       result++
//     }
//     if (str[i] === 'y') {
//       result++
//     }
//     i++
//   }
//   return result
// }

// ou logique ||
// et logique &&

const vowelCount = (str) => {
  let i = 0
  let result = 0

  while(str[i]) {
    if (str[i] === 'a' || str[i] === 'e' || str[i] === 'i' || str[i] === 'o' || str[i] === 'u' || str[i] === 'y') {
      result++
    }
    
    i++
  }
  return result
}

console.log(vowelCount(sample))
console.log(vowelCount("hello"))
console.log(vowelCount("thereactor"))


