const checkNums = (num1, num2) => {
  if (num1 > num2) {
    console.log('num1 est superieur a num2')
  } else if (num1 < num2) {
    console.log('num1 est inferieur a num2')
  } else if (num1 === num2) {
    console.log('num1 est equivalent a num2')
  }
}

console.log(42, 21)
checkNums(42, 21)

console.log(21, 42)
checkNums(21, 42)

console.log(42, 42)
checkNums(42, 42)