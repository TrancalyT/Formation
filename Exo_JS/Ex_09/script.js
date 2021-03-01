/* Programmer une fonction qui prendras un paramètre str transmis et renvoie true si le paramètre 
est un palindrome (la chaîne est la même vers l'avant que vers l'arrière) sinon retourne false.
Par exemple : "racecar" est aussi "racecar" à l'envers.
La ponctuation et les nombres ne feront pas partie de la chaîne.

Pour gerer la sensibilité a la casse vous êtes autoriser d'utiliser une methode JS.

Input: "Aromate et Amora"
Output: true

Input: "Un bon snob nu"
Output: true */

//EX_09

/*/ 
on doit UNIFORMISER notre string en METTANT EN MINUSCULE la STR et en supprimant LES ESPACES
on doit INVERSER la chaine de caractere puis la REINVERSER
pour COMPARER avec la chaine de caractère initiale
/*/

const sansEspaceEtMin = (str) => {
  let i = 0
  let sansEspace = ""
  while (str[i])
  {
    while(str[i] === ' ' && str[i]) {
      i++
    }
    while(str[i] !== ' ' && str[i]) {
      sansEspace = sansEspace + str[i]
      i++
    }
  } 
  sansEspace = sansEspace.toLowerCase()
  console.log(sansEspace)
  return sansEspace
}

const sansEspaceEtMinEtReverse = (str) => {
  let i = str.length - 1
  let sansEspaceEtReverse = ""
  while (str[i])
  {
    while(str[i] === ' ' && str[i]) {
      i--
    }
    while(str[i] !== ' ' && str[i]) {
      sansEspaceEtReverse = sansEspaceEtReverse + str[i]
      i--
    }
  }
  sansEspaceEtReverse = sansEspaceEtReverse.toLowerCase()
  console.log(sansEspaceEtReverse)
  return sansEspaceEtReverse
}

const arePalindrome = (str) => {
  let a = sansEspaceEtMin(str)
  let b = sansEspaceEtMinEtReverse(str)
  if (a === b){
    console.log (str + " est un palindrome")
  } else {
    console.log (str + " n'est pas un palindrome")
  }
}
arePalindrome("Jacques Chirac il est ou")
console.log("-------------------")
arePalindrome("Un bon snob nu")



// 11 14 15 16