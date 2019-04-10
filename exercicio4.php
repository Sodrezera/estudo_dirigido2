<?php
print  " Digite alguma letra: \n  ";
$letra = fgetc ( STDIN );
if ( $letra  == 'A' or  $letra == 'E'   or  $letra == 'I'  or  $letra == 'O'  or  $letra == 'U' ) {
print  " \n Essa letra é uma vogal \n ";
}
else {
    print  " \n Essa letra é uma consoante \n";
}