<?php

class Turma
{
    protected string $nome;
    protected $blocos = array();

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

    public function setBloco(Bloco $blocoNovo){
        return array_push($this->blocos,$blocoNovo);
    }

    public function getBlocos(): void{
        forEach($this->blocos as $bloco){
            echo $bloco->getNome() . PHP_EOL;
        }
    }

}
