<?php

print "\nEingabe: (lustig: 19.99)\n> ";

$readln = fopen("php://stdin", "r");

$val = fgets($readln);

print "\n";

$val = (float)$val;
print "(float) > " . $val . "\n";

$val = round($val, 2);
print "(round) > " . $val . "\n";

$val *= 100;
print " (*100) > " . $val . "\n";

// Falsch: ! 24.99 -> 24.99 jedoch 19.99 -> 19.98
// Ebenso 16.99, 17.99, 18.99
// und 34.66
// PHP 5.3.26 (cli) (built: Jul  7 2013 19:05:08) 
// ---------------------------------------------- 
$val = (int)$val;
// ---------------------------------------------- 
print "  (int) > " . $val . "\n\n";

exit(1);
