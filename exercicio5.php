<?php

    print "Digite a primeira nota:\n";
    $n1 = (int)fgets(STDIN);

    print "Digite a segunda nota:\n";
    $n2 = (int)fgets(STDIN);

    $media= ($n1+$n2)/2;

    print "A média entre as duas notas é $media.\n\n";

    if ($media>7){
        print "Você foi aprovado.\n";
    
    }
    else
    if ($media<7){
        print "Você foi reprovado.\n";
    }
    else
    if ($media=10){
        print "Você foi aprovado com distinção.\n";
    }