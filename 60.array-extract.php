<?php
$a ="orange" ;
$color = array('a'=>'red','b'=>'green','c'=>'blue');

// extract($color,EXTR_SKIP);
extract($color,EXTR_PREFIX_SAME,"test");
echo "value of a : $a <br>"; 
echo "value of a : $test_a <br>"; 
echo "value of a : $b <br>"; 
echo "value of a : $c <br>"; 



// for type of extract rules in php
// extract(array,extract_rules,prefix)





//**************** Compact Function ****************************
$firstname= 'manish';
$lastname= 'Baba';
$age = '20';
//we also use arry in compact function.
$new= compact("firstname","lastname","age");
echo "<pre>";

print_r($new);
echo "</pre>";



?>