<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemCrescente()
    {
        //ESQUELETO DE UM TESTE AUTOMATIZADO:

        //Arrumo a casa para o teste (Arrange ou Given)
        $leilao = new Leilao('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();

        //Executo o código a ser testado (Act ou When)
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();

        //Verifico se a saída é a esperada (Assert ou Then)
        //O PHP unit faz a verificação para mim
        self::assertEquals(2500, $maiorValor); //valida se 2 valores são iguais, espera o valor esperado e quem armazena o outro valor. é uma função estática

    }

    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemDecrescente()
    {
        //ESQUELETO DE UM TESTE AUTOMATIZADO:

        //Arrumo a casa para o teste (Arrange ou Given)
        $leilao = new Leilao('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        $leiloeiro = new Avaliador();

        //Executo o código a ser testado (Act ou When)
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();

        //Verifico se a saída é a esperada (Assert ou Then)
        //O PHP unit faz a verificação para mim
        self::assertEquals(2500, $maiorValor); //valida se 2 valores são iguais, espera o valor esperado e quem armazena o outro valor. é uma função estática

    }

    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemDecrescente()
    {
        //ESQUELETO DE UM TESTE AUTOMATIZADO:

        //Arrumo a casa para o teste (Arrange ou Given)
        $leilao = new Leilao('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        $leiloeiro = new Avaliador();

        //Executo o código a ser testado (Act ou When)
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        //Verifico se a saída é a esperada (Assert ou Then)
        //O PHP unit faz a verificação para mim
        self::assertEquals(2000, $menorValor); //valida se 2 valores são iguais, espera o valor esperado e quem armazena o outro valor. é uma função estática
    }

    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemCrescente()
    {
        //ESQUELETO DE UM TESTE AUTOMATIZADO:

        //Arrumo a casa para o teste (Arrange ou Given)
        $leilao = new Leilao('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('João');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();

        //Executo o código a ser testado (Act ou When)
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        //Verifico se a saída é a esperada (Assert ou Then)
        //O PHP unit faz a verificação para mim
        self::assertEquals(2000, $menorValor); //valida se 2 valores são iguais, espera o valor esperado e quem armazena o outro valor. é uma função estática
    }

}