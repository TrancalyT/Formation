// const array1 = [1, 4, 9, 16];

// pass a function to map
// const multiplyByTwo = (elem, i, tab) => {
//   // console.log(elem)
//   return elem * 2
// }

// const map1 = array1.map(treatment);



// console.log(map1);
// expected output: Array [2, 8, 18, 32]

const user1 = {
  name: 'toto',
  lastName: 'rina',
  age: 21,
  sex: 'm',
  favoritesMovies: ['snatch', 'star wars', 'star trek'],
}

const user2 = {
  name: 'tata',
  lastName: 'reina',
  age: 42,
  sex: 'm',
  favoritesMovies: ['tenet', 'inception', 'interstellar'],
}

const users = [user1, user2]

const getAges = (elem) => elem.name

const ages = users.map(getAges)

console.log(ages)


// const toto = () => ({ toto: 42, hello: 'world' })
// console.log(toto())

