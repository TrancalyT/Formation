const areTrue = (bool) => {
  if (bool === true) {
    console.log("Hello World")
  }
}

console.log('------ should to be true')
areTrue(true)
console.log('------')
areTrue(false)
console.log('------')
areTrue(false)
console.log('------ should to be true')
areTrue(true)
console.log('------')
areTrue(false)
console.log('------')

console.log('test --> ', true !== true)
console.log('test --> ', true === true)
console.log('tata === toto', 'tata' === 'toto')
console.log('toto === toto', 'toto' === 'toto')
console.log('toto !== toto', 'toto' !== 'toto')
