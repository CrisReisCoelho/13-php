<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        
    <title>Document</title>
</head>                   
		
				
				
        Olá Mamp!

    
    <?php
    
    $nome = "Edmar Austin";
    $idade = 30;
    $nacionalidade = "angolana";
    $altura = 1.8;
    $peso = 90;
    echo ("<p>Meu nome é $nome. Tenho $idade anos. <br><hr><p> ");
    echo ("Minha nacionalidade é $nacionalidade. <br>");
    echo ("Minha altura é $altura m e meu peso é $peso quilos. ");

    $meuArray = [1,2,3,5,7,11,13]; 

    echo("Meu 1º primo é: " . $meuArray[0] . "<br>");
    echo("Meu 2º primo é: $meuArray[78] <br>");

    $pessoa1 = ['nome' => 'João Vale', 'altura'=> '1.77', 'idade'=> '32', 'nacionalidade' => 'brasileira', 'peso' => '83'];

    $pessoa2 = ['nome'=> 'Silvana Sales', 'altura' => '1.66', 'idade'=> '18', 'nacionalidade'=> 'brasileira', 'peso'=> '45'];

    echo ("Meu nome é $pessoa2[nome]. Tenho $pessoa2[idade] anos. <br><hr> ");
    echo ("Minha nacionalidade é $nacionalidade. <br>");
    echo ("Minha altura é $altura m e meu peso é $peso quilos. ");
    echo ('<hr>');
    echo ('Meu nome é' . $pessoa2['nome'] . '. Tenho' . $pessoa2['idade'] .'anos. <br>');
    echo ('Minha nacionalidade é '. $pessoa2['nacionalidade'] .  '. <br>');
    echo ("Minha altura é $altura m e meu peso é $peso quilos. ");


    

    ?>
				
	


