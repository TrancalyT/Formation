const strSplitWhiteSpace = (str) => {
  let i = 0
  let indexOfResult = 0
  let word = ''
  let result = []
  
  while (str[i]) {
    
    while(str[i] !== ' ' && str[i]) {
      word = word + str[i]
      i++
    }
    
    if (word !== '') {
      result[indexOfResult] = word
      indexOfResult++
      word = ''
    }
    
    i++
  }
  
  return result
}

console.log('return of function --> ', strSplitWhiteSpace('   hello world     salut comment ca va    '))
