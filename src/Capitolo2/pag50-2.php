<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

declare(strict_types=1);

function Avg(int ...$values): ?float
{
    if (0 === count($values)) {
        return null;
    }
    $tot = 0;
    foreach ($values as $val) {
        $tot += $val;
    }
    return $tot / count($values);
}

var_dump(Avg(...[1,2,3]));
var_dump(Avg(...[1]));
var_dump(Avg(...[]));
var_dump(Avg(1,2,3));
