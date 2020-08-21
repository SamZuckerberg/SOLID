<?php

namespace src\Model;

class AluraMais extends Video implements Pontuavel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return new Slug('http://videos.alura.com.br/' . str_replace(' ', '-', strtolower($this->categoria)));
    }

    /**
     * @return integer
     */
    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
