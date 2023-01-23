let pessoa = {
  nome: 'Maria',
  idade: 20
}

console.log(pessoa);

//====================

// Incluindo novo atributo

pessoa.sexo = 'Feminino'

console.table(pessoa);

// Incluindo uma função

pessoa.saudacao = () => console.log('Olá, tudo bem?');

pessoa.saudacao();