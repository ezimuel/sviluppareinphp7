<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

function inverse(int $x): float {
    if (0 === $x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    printf("%f\n", inverse(0));
} catch (Exception $e) {
    printf("Caught exception: %s\n", $e->getMessage());
} finally {
    printf("Always executed (1/0)!\n");
}

try {
    printf("%f\n", inverse(2));
} catch (Exception $e) {
    printf("Caught exception: %s\n", $e->getMessage());
} finally {
    printf("Always executed (1/2)!\n");
}
