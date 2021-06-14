const simpleAdding = (num) => {
  let i = 0
  let result = 0
  while(i <= num) {
    result = result + i
    i++
  }
  console.log(result)
}

// i       0 1 2 3 4
// result  0 1 3 6 10

// 0 + 1 + 2 + 3 + 4

console.log('simple adding with 4')
simpleAdding(4)

console.log('simple adding with 12')
simpleAdding(12)

console.log('simple adding with 140')
simpleAdding(140)
