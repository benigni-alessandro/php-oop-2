<?php
  require_once './utente.php';
  require_once './ordine.php';
  require_once './prodotto.php';
  require_once './creditcard.php';

  $utente1 = new Utente('alessandro', 'benigni', '01010101');
  $prodotto1 = new Prodotto('cuffie', 10, '4 stelle');
  $prodotto2 = new Prodotto('penna', 5, '5 stelle');
  $carta_credito = new Creditcard('1010101010', 'Benigni Alessandro', '12/03/04', 122);
  $ordine1 = new Ordine();

  $ordine1->insertProdotti($prodotto1);
  $ordine1->insertProdotti($prodotto2);
  $utente1->insertOrdini($ordine1);
  $utente1->setCreditcard($carta_credito);
  var_dump($utente1);
  var_dump($ordine1);

?>
