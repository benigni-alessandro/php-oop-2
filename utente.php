<?php
class Utente {
  private $nome;
  private $cognome;
  private $codiceFiscale;
  private $ordini = [];
  private $carta_credito;

  public function __construct($nome, $cognome, $codiceFiscale)
  {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->codiceFiscale = $codiceFiscale;
  }

  public function setCreditcard($carta_credito)
  {
    $this->carta_credito = $carta_credito;
  }

  public function getNome()
  {
    return $this->nome;

  }
  public function setNome($nome)
  {
    $this->nome = $nome;
  }


  public function getSurname()
  {
    return $this->cognome;
  }
  public function setSurname($cognome)
  {
    $this->cognome = $cognome;
  }


  public function getCodicefisc()
  {
    return $this->$codiceFiscale;

  }
  public function setCodicefisc($codiceFiscale)
  {
    $this->codiceFiscale = $codiceFiscale;
  }

  public function getOrdini()
  {
    return $this->$ordini;
  }
  public function insertOrdini($ordine)
  {
    $this->ordini[] = $ordine;
  }
}


?>
