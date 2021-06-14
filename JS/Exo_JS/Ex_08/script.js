/* Programmer une fonction qui prendras une chaine de caractère et la 
retournera en ayant supprimer tout les espaces. */

//EX_08

const strTrimWhiteSpace = (str) => {
  let i = 0;
  let result = ""

  {
    while (str[i])
    {
      while(str[i] === ' ' && str[i]) {
        console.log(str[i])
        i++
      }
      while(str[i] !== ' ' && str[i]) {
        console.log(str[i])
        result = result + str[i]
        i++
      }
    }
  return result
  }
}
console.log(strTrimWhiteSpace(" Hellow my dear and beautiful World"))