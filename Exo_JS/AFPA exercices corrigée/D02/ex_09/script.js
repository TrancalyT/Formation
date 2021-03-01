const strTrimWhiteSpace = (str) => {
  let i = 0
  let result = ''
  while (str[i]) {
    while(str[i] !== ' ' && str[i]) {
      result = result + str[i]
      i++
    }
    i++;
  }
  
  return result
}

const arePalindrome = (str) => {
  let strWithoutSpace = strTrimWhiteSpace(str)
  let i = strWithoutSpace.length - 1
  let result = ''
  
  while(i >= 0) {
    result = result + strWithoutSpace[i]
    i--
  }
  
  if (strWithoutSpace === result) {
    return true
  }

  return false
}

console.log(arePalindrome('racecar'))
console.log(arePalindrome('bonjour'))
console.log(arePalindrome('aromate et amora'))
