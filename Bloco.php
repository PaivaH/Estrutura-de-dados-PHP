<?php

class Bloco
{
    protected string $nome;
    protected $disciplinas = array();

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

    public function setDisciplina(Disciplina $disciplinaNova){
        return array_push($this->disciplinas,$disciplinaNova);
    }

    public function getDisciplina(): void{
        forEach($this->disciplinas as $disciplina){
            echo $disciplina->getNome() . PHP_EOL;
        }
    }

}
