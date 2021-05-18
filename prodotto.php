<?php
class Prodotto {
  private $nomeprodotto;
  public $prezzo;
  private $valutazione;

  public function __construct($nomeprodotto,$prezzo, $valutazione)
  {
    $this->nomeprodotto = $nomeprodotto;
    $this->prezzo = $prezzo;
    $this->valutazione = $valutazione;
  }

  public function getNameprod()
  {
    return $this->nomeprodotto;
  }
  public function setNameprod($nomeprodotto)
  {
    $this->nomeprodotto = $nomeprodotto;
  }


  public function getPrezzo()
  {
    return $this->prezzo;
  }
  public function setPrezzo($prezzo)
  {
    $this->prezzo = $prezzo;
  }


  public function getVoto()
  {
    return $this->$valutazione;
  }
  public function setVoto($valutazione)
  {
    $this->valutazione = $valutazione;
  }
}
?>
