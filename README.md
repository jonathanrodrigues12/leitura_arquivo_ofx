# leitura_arquivo_ofx
Ofx
Transforma em objetos dados de um arquivo de extrato bancario OFX.

$ofx = new Ofx("Arquivo.ofx");

Data inicio e fim: $ofx->dtStar $ofx->dtEnd

Codigo do Banco: $ofx->bankId

Conta do banco: $ofx->acctId

Nome do banco: $ofx->org

Extrato: foreach($ofx->bankTranList as $extrato)


