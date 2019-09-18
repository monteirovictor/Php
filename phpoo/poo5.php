<?php

class Aluno{

    private $nome;
    private $curso;
    private $turma;
    private $ano;



    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome=$nome;
    }

    public function getCurso()
    {
       return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso=$curso;
    }

    public function getAno()
    {
       return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano=$ano;
    }

    public function getTurma()
    {
        return $this->turma;
    }

    public function setTurma($turma)
    {
         $this->turma=$turma;
    }
}

    $victor = new Aluno();
    $victor->setNome("Victor");
    $victor->setTurma("2014.1");
    $victor->setAno("2014");
    $victor->setCurso("Sistemas de Informaçao");
    
    echo $victor->getNome();
    echo $victor->getTurma();
    echo $victor->getAno();
    echo $victor->getCurso();
?>