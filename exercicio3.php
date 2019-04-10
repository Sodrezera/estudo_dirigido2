<?php

    print "Digite F ou M para informar seu sexo:\n";
    $sexo = fgetc(STDIN);

    if($sexo=="M"){
        print "O seu sexo é Masculino.\n";       

    }
    else
    if($sexo== "F"){ 
    print "O seu sexo é Feminino.\n";    
    }
    else
    if($sexo!= "F" or "M"){
    print "O seu sexo é inválido.\n";
    }