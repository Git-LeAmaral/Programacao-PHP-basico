let Bicicleta1 = {
  cor: 'Branca',
  marcha: 'Única',
  aro: 12,
  pedalar() {
    console.log('Método pedalar executado');
  }
}

let Bicicleta2 = {
  cor: 'Azul',
  marcha: '18',
  aro: 17,
  pedalar() {
    console.log('Método pedalar executado');
  }
}

console.log(Bicicleta1);
console.log(Bicicleta2);

//==================================
// FUNCTION FACTORY

let BicicletaFactory = function(cor, marcha, aro) {
  return {
    cor,
    marcha,
    aro,
    pedalar() {
      console.log('Método pedalar executado');
    }
  }
}

let Bicicleta3 = BicicletaFactory('verde', 'unica', 12)
console.log(Bicicleta3);

let Bicicleta4 = BicicletaFactory('Vermelha', '21', 29)
console.log(Bicicleta4);

// console.log(`Cor: ${Bicicleta3.cor}`);
// Bicicleta3.pedalar()