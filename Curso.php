<?php

class Curso
{
    protected string $nome;
    protected $turmas = array();

    public function __construct($nome) 
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

    public function setTurma(Turma $turmaNova){
        return array_push($this->turmas,$turmaNova);
    }

    public function getTurmas(): void{
        forEach($this->turmas as $turma){
            echo $turma->getNome() . PHP_EOL;
        }
    }

}
