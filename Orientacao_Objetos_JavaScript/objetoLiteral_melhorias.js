let nome = 'Leandro'
let idade = 36
let sexo = 'Masculino'
let profissao = 'Programador'

let objeto = {
  nome: nome,
  idade: idade,
  sexo: sexo,
  profissao: profissao,
  exibirResumo: function() {
    console.log(`${this.nome}, tem ${this.idade} anos, é do sexo ${this.sexo} e sua profissão é ${this.profissao}`);
  }
}

console.log(objeto);
objeto.exibirResumo();

// MELHORIAS DO ES6

console.log('**-- MELHORIAS DO ES6 --**');

let objeto2 = {
  nome,
  idade,
  sexo,
  profissao,
  exibirResumo() {
    console.log(`${this.nome}, tem ${this.idade} anos, é do sexo ${this.sexo} e sua profissão é ${this.profissao}`);
  }
}

console.log(objeto2);
objeto2.exibirResumo();