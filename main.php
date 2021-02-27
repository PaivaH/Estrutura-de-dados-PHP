<?php

require_once('Curso.php');
require_once('Turma.php');
require_once('Bloco.php');
require_once('Disciplina.php');

echo 'Curso Java ' . PHP_EOL;
$cursojava1 = new Curso('Java 1');

$turmaJava1 = new Turma('Turma java Manhã');
$turmaJava2 = new Turma('Turma java Noite');

$cursojava1->setTurma($turmaJava1);
$cursojava1->setTurma($turmaJava2);
$cursojava1->getTurmas();

$blocojava1 = new Bloco('Bloco java Manhã 1');
$blocojava2 = new Bloco('Bloco java Manhã 2');
$blocojava3 = new Bloco('Bloco java Noite 1');
$blocojava4 = new Bloco('Bloco java Noite 2');

$turmaJava1->setBloco($blocojava1);
$turmaJava1->setBloco($blocojava2);
$turmaJava2->setBloco($blocojava3);
$turmaJava2->setBloco($blocojava4);
$turmaJava1->getBlocos();
$turmaJava2->getBlocos();

$disciplina1 = new Disciplina('Disciplina 1');
$disciplina2 = new Disciplina('Disciplina 2');
$disciplina3 = new Disciplina('Disciplina 3');
$disciplina4 = new Disciplina('Disciplina 4');

$blocojava1->setDisciplina($disciplina1);
$blocojava2->setDisciplina($disciplina2);
$blocojava3->setDisciplina($disciplina3);
$blocojava4->setDisciplina($disciplina4);

$blocojava1->getDisciplina();
$blocojava2->getDisciplina();
$blocojava3->getDisciplina();
$blocojava4->getDisciplina();