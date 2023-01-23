// FUNÇÃO CONSTRUTORA

let Carro = function() {
  this.cor = 'Verde'
  this.modelo = 'Gol GTS'
  this.velocidadeAtual = 0
  this.velocidadeMaxima = 220

  this.acelerar = function() {
    // this.velocidadeAtual += 10

    let velocidade = this.getVelocidadeAtual() + 10
    this.setVelocidadeAtual(velocidade)
  }

  this.getVelocidadeAtual = function() {
    return this.getVelocidadeAtual
  }

  this.setVelocidadeAtual = function(velocidadeAtual) {
    this.velocidadeAtual = velocidadeAtual
  }
}

let carro = new Carro()

console.log(`A velocidade atual é: ${carro.velocidadeAtual}`);
carro.acelerar()
carro.acelerar()
carro.acelerar()
carro.acelerar()
console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()}`);

