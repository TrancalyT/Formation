// EX_02

function add(a, b) {
  const numToReturn = a + b;

  return numToReturn;
}
console.log(add(1, 2));

// EX_03

function time(a, b) {
  return a * b;
}
console.log(time(5, 5));

// EX_04

function ex4(a, b) {
  const multiplie = a * b;
  console.log(multiplie);
}
ex4(5, 5);

// EX_ 05

function pairOuPas(a) {
  let trueOuFalse;
  if (a % 2 == 0) {
    trueOuFalse = true;
  } else {
    trueOuFalse = false;
  }
  return trueOuFalse;
}
console.log(pairOuPas(6));

// EX_06

function afficherNum() {
  let chiffre = 0;
  while (chiffre < 101) {
    console.log(chiffre);
    chiffre = chiffre + 1;
  }
}
afficherNum();

// EX_03 du 03/02

const checkNums = (num3, num4) => {
  let checkNumsResult;
  if (num3 > num4) {
    checkNumsResult = console.log(num3 + " est plus grand que " + num4);
  } else if (num3 < num4) {
    checkNumsResult = console.log(num3 + " est plus petit que " + num4);
  } else checkNumsResult = console.log(num3 + " est égal à " + num4);

  return checkNumsResult;
};
checkNums(9, 10);

// EX_04 du 03/02

const simpleAdding = (num5) => {
  let i = 0;
  let exo4 = 0;
  while (i <= num5) {
    exo4 = exo4 + i;
    i++;
  }
  return exo4;
};
console.log(simpleAdding(4));

// EX_05 du 03/02

// const strLen = (str) => {
//   let i = 0;
//   while (str[i]) {
//     i++;
//   }
//   return i;
// };

// const sample = "Hello World";
// console.log("strlen => ", strLen(sample));
//   0    1    2    3    4    5    6    7    8    9    10  11
// ['H', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd']

// let toto;
// console.log("sample[1] => ", sample[1]);
// console.log("test condition", 0 === 0 && 1 === 1);
// console.log("test condition", 0 === 0 && 1 !== 1);
// console.log("test condition", 0 === 0 || 1 !== 1);

//   0    1    2    3    4    5    6    7    8    9    10   11   12  13
// [' ', ' ', 'H', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd']

const vowelCount = (str) => {
  let vowel = 0;
  for (let index = 0; index < str.length; index++) {
    if (
      str[index] == "a" ||
      str[index] == "e" ||
      str[index] == "i" ||
      str[index] == "o" ||
      str[index] == "u" ||
      str[index] == "y"
    ) {
      vowel = vowel + 1;
    }
  }
  console.log("Il y a " + vowel + " voyelle(s) dans " + str);
};
vowelCount("Pilopipole");
