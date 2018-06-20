<?php
$nome = "wagner";
//nome maiúsculo
echo strtoupper($nome)."<hr>";
//nome minusculo
$nome2 = "WAGNER";
echo strtolower($nome2)."<hr>";

$rest = substr("wagner", 1);
echo $rest. "\n";
echo "<hr>";
//add carecteres
$text = "wagner";
print str_pad($text, 20) . "\n <br>";
print str_pad($text, 20, "*", STR_PAD_LEFT) . "\n <br>";
print str_pad($text, 20, "*", STR_PAD_BOTH) . "\n <br>";
print str_pad($text, 20, "*"). "\n <br>";
echo "<hr>";
$txt = ".piscina.";
print str_repeat($txt, 5) . "\n";
echo "<hr>";
//mostra o comprimento
$rato = "O rato roeu a roupa do rei de roma";
print 'O comprimento é: ' . strlen($rato) . "\n";
echo "<hr>";
//substituir palavra
$leao = "O rato roeu a roupa do rei de roma";
print str_replace("rato", "leão", $leao) . "\n";