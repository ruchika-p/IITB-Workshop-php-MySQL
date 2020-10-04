<?php 
$x=readline('Enter an alphabet: ');
function check($x) 
{ 
    if ($x == 'a' || $x == 'e' || $x == 'i' ||  
        $x == 'o' || $x == 'u' || $x == 'A' ||  
        $x == 'E' || $x == 'I' || $x == 'O' ||  
        $x == 'U') 
        echo "Vowel" . "\n"; 
    else
        echo "Consonant" . "\n"; 
} 
  

check($x)
  

?> 