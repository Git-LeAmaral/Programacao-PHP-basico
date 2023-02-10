// VAMOS CRIAR OBJETOS BASEADOS EM MODELO DE AVIÃO
// ATRIBUTOS COR E MODELO; MÉTODO LEVANTARVOO

//OBJETO LITERAL

let a1 = {
  cor: 'Branco',
  modelo: 'Airbus a380',
  levantarVoo: function() {
    console.log('Levantar Voo');
  }
}

//FUNÇÃO CONSTRUTORA
let AviaoF = function() {
  this.cor = 'Verde'
  this.modelo = 'Boeing 787'
  this.levantarVoo = function() {
    console.log('Levantar Voo');
  }
}

let a2 = new AviaoF()

//CLASSE
class AviaoC {
  constructor() {
    this.cor = 'Azul',
    this.modelo = 'Embraer E-Jets'
  }
  levantarVoo() {
    console.log('Levantar Voo');
  }
}

let a3 = new AviaoC()

console.log(a1);
console.log(a2);
console.log(a3);