// camel case
function myFunction() {
  return 42
}

// je stock le retour de ma fonction dans la constante 'returnOfMyFunction'
const returnOfMyFunction = myFunction()

// j'affiche mes resultat
console.log('return of my function in const = ', returnOfMyFunction)
console.log('return of my function = ', myFunction())

// la fonction forty two recupere le parametre, lui ajoute 42 et retourne le resultat
function addFortyTwo(num) {
  const numToReturn = num + 42
  
        return numToReturn
}

// on apelle la fonction add forty two en lui donnant en parametre 21
console.log('return of add forty two = ', addFortyTwo(21))
console.log('return of add forty two = ', addFortyTwo(50))
