<?php

namespace src\Service;

use src\Model\Assistivel;

class Assistidor
{
    public function assistir(Assistivel $conteudo)
    {
        $conteudo->assistir();
    }
}
