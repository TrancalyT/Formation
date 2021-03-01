/* Programmer une fonction qui prendras l'objet user1 en paramètre, changera la valeur de la 
clé 'nom' a tata et renverra l'objet passé en paramètre.

Exemple:

console.log(changeName(user1)) -> {
  name: 'tata',
  lastName: 'rina',
  age: 42,
  sex: 'm',
  favoritesMovies: ['snatch', 'star wars', 'star trek'],*/

//EX_17

/*

*/

const user1 = {
  name: 'toto',
  lastName: 'rina',
  age: 42,
  sex: 'm',
  favoritesMovies: ['snatch', 'star wars', 'star trek'],
}

const changeName = (obj) => {
 
  user1.name = "tata"
  return user1
}

console.log(changeName(user1))