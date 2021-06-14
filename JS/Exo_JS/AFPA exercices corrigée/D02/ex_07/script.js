
// strLen with 'Hello World'
// While:
// iteration 1 -> i = 0
// i = 0 + 1 = 1

// iteration 2 -> i = 1
// i = 1 + 1 = 2

// iteration 3 -> i = 2
// ...

const strLen = (str) => {
  let index = 0
  while(str[index]) {
    index++
  }
  return index
}

const findLastWord = (str) => {
  let i = strLen(str) - 1
  let result = ''

  while(str[i] === ' ') {
    i--
  }

  while(str[i] !== ' ' && str[i]) {
    result = str[i] + result
    i--
  }

  return result
}

console.log('sample 1')
console.log(findLastWord('Hello World'))
console.log('sample 2')
console.log(findLastWord('    Hello World          '))
console.log('sample 3')
console.log(findLastWord('   Hello World     '))
