// CONTEXTO SPREAD separa os dados

// String
let tituloArtigo = 'Como utilizar o operador rest/spread'

console.log(tituloArtigo);
console.log(...tituloArtigo);
console.log([...tituloArtigo]);

// Arrays
let listaCursos1 = ['NodeJS e MongoDB', 'ES6, TypeScript e Angular 4']
let listaCursos2 = ['Multiplataforma Android/IOS', 'Introdução ao GNU/Linux']
let listaCursosCompletos = ['Web Completo', ...listaCursos1, ...listaCursos2]

console.log(listaCursosCompletos);

// Objeto Literal
let pessoa = {nome: 'Leandro', idade: 36}
let clone = {endereco: 'Rua Dr. Manoel', ...pessoa}

console.log(clone);