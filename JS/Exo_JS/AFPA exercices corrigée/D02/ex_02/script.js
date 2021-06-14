const isItGreaterThanHundred = (num) => {
  if (num > 100) {
    return true
  }
  
  return false
}

console.log('100 -> ', isItGreaterThanHundred(100))
console.log('-1 -> ', isItGreaterThanHundred(-1))
console.log('101 -> ', isItGreaterThanHundred(101))
console.log('0 -> ', isItGreaterThanHundred(0))
