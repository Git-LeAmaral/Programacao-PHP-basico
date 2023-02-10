// CONTEXTO REST FAZ A JUNÇÃO DOS DADOS

function soma(...param) {
  let resultado = 0

  console.log(param);
  param.forEach(v => resultado += v)

  return resultado
}

// console.log(soma(3, 8, 5, 7));

function multiplicacao(m, ...param2) {
  console.log(m);
  let resultado = 0
  console.log(param2);

  param2.forEach(v => resultado += m * v)
  return resultado
}

console.log(multiplicacao(5, 7, 12, 3, 49)); 