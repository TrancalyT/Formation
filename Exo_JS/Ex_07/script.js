/*
On veut COMMENCER PAR LA FIN
On veut supprimer LES ESPACES
On veut mettre en évidence LE DERNIER MOT
On veut mettre LE DERNIER MOT à l'ENDROIT
*/

// EX_07

const findLastWord = (str) => {
  let i = str.length - 1;
  let result = "";

  while (str[i] === " "){
    console.log(str[i])
    i--;
  }

  while (str[i] !== " " && str[i]){
    console.log(str[i])
    result = str[i] + result
    i--;
  }

  return result
};
console.log(findLastWord("    Hello World  "));
