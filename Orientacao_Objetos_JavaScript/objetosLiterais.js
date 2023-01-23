// NOTAÇÃO DE CLASSE (ES6)

class Produto {
  constructor(descricao, preco) {
    this.descricao = descricao
    this.preco = preco
  }
  verDescricao() {
    console.log(`${this.descricao} por apenas ${this.preco}`);
  }
}

let produto = new Produto ('Notebook', 2200);
produto.verDescricao();

// NOTAÇÃO DE OBJETO LITERAL / ESTATICO

console.log('**--- NOTAÇÃO DE OBJETO LITERAL / ESTATICO ---**');

let produtoLiteral = {
  descricao: 'Geladeira',
  preco: 3500,
  verDescricao: function() {
    console.log(`${this.descricao} por apenas ${this.preco}`);
  }
}

produtoLiteral.verDescricao();