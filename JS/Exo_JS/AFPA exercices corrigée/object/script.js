

const user1 = {
  nom: 'toto',
  prenom: 'rina',
  age: 42,
  sex: 'm',
  favoritesMovies: ['snatch', 'star wars', 'star trek'],
  test: {
    key: 'toto',
    key2: 'gogo',
  }
}

const user2 = {
  nom: 'tata',
  prenom: 'reina',
  age: 21,
  sex: 'f',
  favoritesMovies: ['tenet', 'inception', 'interstellar'],
  test: {
    key: 'totwwww',
    key2: 'gogosdvdsvo',
  }
}

const users = [user1, user2]
console.log('users --> ', users)
console.log('users[1] -->', users[1])

console.log('user1 -> ', user1)
console.log('user1 nom ->', user1.nom)
console.log('user1 age -> ', user1.age)
console.log('user1 favoritesMovies -> ', user1.favoritesMovies)
