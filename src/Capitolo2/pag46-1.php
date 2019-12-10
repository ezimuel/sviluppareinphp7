<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

function fibonacci(int $n): int
{
    $fib[0] = 0;
    $fib[1] = 1;
    for ($i=2; $i<=$n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    return $fib[$n];
}
