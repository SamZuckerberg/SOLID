<?php

namespace src\Service;

use src\Model\AluraMais;
use src\Model\Curso;
use src\Model\Pontuavel;

class CalculadorPontuacao
{
    public function recuperarPontuacao(Pontuavel $conteudo)
    {
        return $conteudo->recuperarPontuacao();
    }
}
