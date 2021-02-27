<?php

final class Disciplina
{
    protected string $nome;

    public function __construct(string $nome) 
    {
        $this->nome = $nome;
    }

    public function alterNome(string $nomeAtual, string $nomeNovo):string{
        if($nomeAtual===$this->nome or $this->nome===''){
            return $this->nome = $nomeNovo;
        }
        else{
            echo 'Nome não encotrando';
        }
    }

    public function getNome(): string{
        return $this->nome;
    }
}
