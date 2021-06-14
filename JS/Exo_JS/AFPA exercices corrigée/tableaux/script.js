const sampleArray1 = ['un', 'deux', 'trois', 'quatre', 'cinq']

const arrayLen = (arr) => {
  let i = 0

  while(arr[i]) {
    i++
  }

  return i
}

console.log(arrayLen(sampleArray1))

const printArray = (arr) => {
  let i = 0

  while(arr[i]) {
    console.log(arr[i])
    i++
  }
}

console.log('\n')
printArray(sampleArray1)

let test = []
test[0] = 'hello'
test[1] = 'world'
test[2] = 'salut tout le monde'
test[3] = 42

console.log('\nprint array of test --> ')
console.log(test)
printArray(test)

let sampleStr = 'Hello'
let sampleStr2 = 'World'

let test2 = []
test2[0] = sampleStr
test2[1] = sampleStr2

console.log('\nprint array of test 2 --> ')
printArray(test2)


// const printAbsc = (arr) => {
//   let i = 0

//   while(arr[i]) {
//     console.log(arr[i][2])
//     i++;
//   }
// }

// const sampleArray2 = [
//   ['0:0', '0:1', '0:2'],
//   ['1:0', '1:1', '1:2'],
//   ['2:0', '2:1', '2:2']
// ]

// console.log(sampleArray2)
// console.log(sampleArray2[0])
// console.log(sampleArray2[2])
// console.log(sampleArray2[1][2])
// console.log('print absc --> ', printAbsc(sampleArray2))
