<?php
print "Eingabe: lustig: (19.99): ";
$handle = fopen("php://stdin", "r");
$price = fgets($handle);
$price = (float)$price;
print ">" . $price . "\n";
$price = round($price, 2);
print ">" . $price . "\n";
$price *= 100;
print ">" . $price . "\n";

// Falsch: ! 24.99 -> 24.99 jedoch 19.99 -> 19.98
// Ebenso 16.99, 17.99, 18.99
// PHP 5.3.26 (cli) (built: Jul  7 2013 19:05:08) 
// ---------------------------------------------- 
$price = (int)$price;
// ---------------------------------------------- 


print ">" . $price . "\n";
exit(1);
