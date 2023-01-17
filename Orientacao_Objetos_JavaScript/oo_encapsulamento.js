class Tv {
  constructor() {
    this._relacaoCanais = Array(2, 4, 5, 7, 10)
    this._canalAtivo = 5
    this._volume = 5
  }

  // getters setters
  get canalAtivo() {
    return this._canalAtivo
  }

  set canalAtivo(canal) {
    let x = this._relacaoCanais.indexOf(canal)
    console.log(x);
    this.canalAtivo = canal
  }
}

let tv = new Tv()

tv.canalAtivo = 10
console.log(tv.canalAtivo);