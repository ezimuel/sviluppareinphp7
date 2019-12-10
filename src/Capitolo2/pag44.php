<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

function fibonacci(int $n): int
{
    if ($i == 0 || $i == 1) {
        return $n;
    }
    return fibonacci($n-1) + fibonacci($n-2);
}
