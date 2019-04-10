<?php

    print "Digite um número:\n";
    $n1 = (int)fgets(STDIN);

    print "Digite outro número:\n";
    $n2 = (int)fgets(STDIN);

    if($n1>$n2){
        print "O primeiro número é maior que o segundo.";       

    }

    else { 
    print "O segundo número é maior que o primeiro.";    
    }