<?php
  class Creditcard
  {
    private $numero;
    private $intestatario;
    private $data_scadenza;
    private $cvv;

    public function __construct($numero, $intestatario, $data_scadenza, $cvv)
    {
      $this->numero = $numero;
      $this->intestatario = $intestatario;
      $this->data_scadenza = $data_scadenza;
      $this->cvv = $cvv;
    }

    public function getNumero()
    {
      return $this->numero;
    }
    public function setNumero($numero)
    {
      $this->numero = $numero;
    }


    public function getIntestatario()
    {
      return $this->intestatario;
    }
    public function setIntestatario($intestatario)
    {
      $this->intestatario = $intestatario;
    }


    public function getDatascadenza()
    {
      return $this->data_scadenza;
    }
    public function setDatascadenza($data_scadenza)
    {
      $this->data_scadenza = $data_scadenza;
    }

    public function getCvv()
    {
      return $this->cvv;
    }
    public function setCvv($cvv)
    {
      $this->cvv = $cvv;
    }
  }

?>
