<?php
/*echo "Bem-vindo(a) ao screen match!
"; */  // se quiser quebrar linha pode ser assim.

echo "Bem-vindo(a) ao screen match!\n"; // ou pode quebrar a linha assim

$nomeFilme = "Top gun - Maverick"; //sempre que for criar uma variavel como o $ antes do nome
$nomeFilme = "Thor: Ragnarok"; 
$nomeFilme = "Se beber não case"; 
$anoLancamento =  2022;

$quantidadeDeNotas = $argc -1;
$somaDeNotas = 0;

for ($contador=1; $contador < $argc; $contador +=1){
    $somaDeNotas +=$argv[$contador];
    
}


$notaFilme = $somaDeNotas / $quantidadeDeNotas;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento <2020;


echo /* se for aspas simples ele não interpreta, so aspas duplas */"nome do filme:" .$nomeFilme ."\n"; //posso mostrar o nome do filme assim ou
echo "nota do filme: $notaFilme\n"; // desse jeito tudo dentro da mesma linha
echo "ano de lançamento: $anoLancamento\n";

if ($anoLancamento > 2022){
    echo "Esse filme é um lançamento!";
}elseif($anoLancamento > 2020 && $anoLancamento <=2022){
    echo "Esse filme ainda é novo";    
}else{
    echo "Esse filme é antigo";
}

$genero = match ($nomeFilme) {
     "Top Gun - Maverick" =>"ação",
     "Thor : Ragnarok" => "super-feroi",
     "Se beber não case" => "comedia",
     default => "Genero desonhecido", //quando não tiver nenhum filme ira aparecer
};

echo "O genero do filme é: $genero\n";

echo $argc;



