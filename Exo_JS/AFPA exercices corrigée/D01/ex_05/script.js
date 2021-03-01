// string
// number
// bool -> true | false
// 10 % 2 === 0
// 9 % 2 === 1

function areEvenOrNot(num){
  if (num % 2 === 0) {
    return true
  } else {
    return false
  }
}

console.log(areEvenOrNot(10))
console.log(areEvenOrNot(101))
