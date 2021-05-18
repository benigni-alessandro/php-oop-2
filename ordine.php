<?php


class Ordine{
  private $sconto = 0;
  public $importo;
  public $prodotti = [];


  public function insertProdotti($prodotto)
  {
    $this->prodotti[] = $prodotto;
    $this->importo = $this->calctot($this->prodotti);
  }
  public function calctot($prodotti)
  {
    $importo = 0;
    foreach ($prodotti as $prodotto) {
      $importo += $prodotto->prezzo;
    }
    return $importo;


  }
}
?>
