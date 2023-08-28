<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor = -INF; //constante -INF recebe o menor valore possível
    private $menorValor = INF; //constante INF recebe o maior valor possível
    private $maioresLances;
    public function avalia(Leilao $leilao): void
    {
        foreach ($leilao->getLances() as $lance) {
            if ($lance->getValor() > $this->maiorValor) { //se este lance for maior que o maiorValor...
                $this->maiorValor = $lance->getValor(); //pega o maior lance e armazena ele na variável maioValor
            }

            if ($lance->getValor() < $this->menorValor) {
                $this->menorValor = $lance->getValor();
            }
        }

        $lances = $leilao->getLances(); //pego os lances do leilão
        usort($lances, function (Lance $lance1, Lance $lance2) {
            return $lance1->getValor() - $lance2->getValor(); //se o lance 1 precisar vir primeiro na lista, eu coloco um número negativo, se o lance 2 precisa vir primeiro na lista, eu retorno positivo e se empatar, eu retorno 0
    }); //função usort que recebe como parametro o array que quero ordenar  e uma função de ordenação. Iss ordenada para mim
        $this->maioresLances = array_slice($lances, 0 ,3); //pego os maiores lances e uso a função array_slice para fatir o array no primeiro parametro, o segundo parametro indica de onde eu quero começar a pegar e o terceiro parametro, quantos valores do array quero pegar
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }

    public function getMenorValor(): float
    {
        return $this->menorValor;
    }

    /**
     * @return Lance []
     */
    public function getMaioresLances(): array
    {
        return $this->maioresLances;
    }
}