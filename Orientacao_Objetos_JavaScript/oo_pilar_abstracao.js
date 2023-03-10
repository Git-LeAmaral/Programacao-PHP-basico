// Paradigma de Orientação a Objetos

// Abstração

// ** Entidade
// ** Identidade
// ** Caracteristicas
// ** Ações

// ENTIDADE = ContaBancaria
// IDENTIDADE = y = new ContaBancaria()
// CARACTERISTICA = agencia, numeroConta, saldo, limite
// AÇOES = depositar, sacar, consultarSaldo

// modelo do objeto
class ContaBancaria {
  constructor() {
    this.agencia = 1075
    this.numeroConta = 8351125
    this.saldo = 50
    this.limite = 400
  }

  depositar(valorDeposito) {
    this.saldo += valorDeposito
  }

  sacar(valorSaque) {
    this.saldo -= valorSaque
  }

  consultarSaldo() {
    return this.saldo
  }
}

let x = new ContaBancaria()
let y = new ContaBancaria()

console.log(x.consultarSaldo());
x.depositar(500)
console.log(x.consultarSaldo());
x.sacar(200)
console.log(x.consultarSaldo());

