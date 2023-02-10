// DESTRUCTURING

let frutas = ['Abacaxi', 'Uva', 'Pera', 'Mamão']

// let [a, b, , c] = frutas // pula um indice
let [a, b, c, d, e = 'Banana'] = frutas

// console.log(a, b, c, d, e);

// DESESTRUTURANDO UM ARRAY MULTIDIMENSIONAL

let coisas = [['Abacaxi', 'Uva', 'Pera', 'Mamão'], ['Leticia', 'Helena']]

// let [,[,n2]] = coisas
// console.log(n2);

console.log(coisas);

let [[,f1], [n1, n2]] = coisas
console.log(f1, n1, n2);

