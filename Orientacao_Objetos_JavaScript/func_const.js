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
    return this.VelocidadeAtual
  }

  this.setVelocidadeAtual = function(velocidadeAtual) {
    this.velocidadeAtual = velocidadeAtual
  }
}

let carro = new Carro()
console.log(carro.velocidadeAtual);
carro.acelerar()
console.log(carro.getVelocidadeAtual());
// console.log(`A velocidade atual é: ${carro.getvelocidadeAtual()}`);



// ** Protegido

// FUNÇÃO CONSTRUTORA

// let Carro2 = function() {

//   var velocidadeMaxima = 220
//   var quilometrosRodados = 0

//   this.cor = 'Verde'
//   this.modelo = 'Gol GTS'
//   this.velocidadeAtual = 0

//   this.acelerar = function() {

//     let velocidade = this.getVelocidadeAtual() + 50
//     if(velocidade > velocidadeMaxima){
//       velocidade = velocidadeMaxima
//     }
//     this.setVelocidadeAtual(velocidade)

//     quilometrosRodados += 0.05
//     console.log(quilometrosRodados);
//   }

//   this.getVelocidadeAtual = function() {
//     return this.getVelocidadeAtual
//   }

//   this.setVelocidadeAtual = function(velocidadeAtual) {
//     this.velocidadeAtual = velocidadeAtual
//   }
// }

// let carro2 = new Carro()
// console.log(carro2.velocidadeAtual);
// carro2.acelerar()
// console.log(carro2.velocidadeAtual);
// carro2.acelerar()
// console.log(carro2.velocidadeAtual);




