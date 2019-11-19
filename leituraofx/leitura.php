<?php
require_once 'Ofx.php';
$ofx = new Ofx("extrato.ofx");

echo "Data inicio e fim $ofx->dtStar $ofx->dtEnd<br/>";
echo " Codigo do Banco $ofx->bankId <br/>";
echo " Conta do banco $ofx->acctId <br/>";
echo " Nome do banco $ofx->org <br/>";
foreach($ofx->bankTranList as $extrato){
  echo '<pre>';
  print_r($extrato);
  echo '</pre>';
}
?>
