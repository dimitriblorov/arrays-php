<?php
$lista = [
    'nome' => 'Dimitri',
    'idade' => 28,
    'atributos' => [
        'força' => 65,
        'agilidade' => 72,
        'destreza' => 60
    ],
    'vida' => 1000,
    'mana' => 925,
];

echo "Nome: ".$lista['nome']."<br/>";
echo "Força: ".$lista['atributos']['força']."<br/>";
echo "Agilidade: ".$lista['atributos']['agilidade']."<br/>";
echo "Destreza: ".$lista['atributos']['destreza']."<br/>";
echo "Vida: ".$lista['vida']."<br/>";
echo "Mana: ".$lista['mana'];