let produto = {
  descricao: 'Notebook',
  preco: 1800,
  detalhes: {
    fabricante: 'Lenovo',
    modelo: 'ThinkPad'
  }
}

// let {descricao, preco} = produto

// console.log(descricao, preco);

// ALTERANDO O NOME DA VARIAVEL

// let {descricao: d, preco: p} = produto
// console.log(d, p);

// let {descricao, preco, desconto = 5} = produto
// console.log(descricao, preco, desconto);

// ACESSANDO UM OBJETO DENTRO DO ATRIBUTO DO OBJETO

let {detalhes: {fabricante, modelo}} = produto
console.log(fabricante, modelo);
