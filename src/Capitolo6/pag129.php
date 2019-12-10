<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$handle = fopen('example.csv', 'w+');
// Create a CSV file using random numbers
for ($row = 0; $row < 100; $row++) {
    $data = [];
    for($i = 0; $i < 10; $i++) {
        $data[$i] = random_int(1,100);
    }
    $bytes = fputcsv($handle, $data);
    if (false === $bytes) {
        throw new Exception(
            sprintf("Error writing row %d in %s", $row, $filename)
        );
    }
    printf("Written %d bytes in row %d\n", $bytes, $row);
}
// Rewind the file pointer
fseek($handle, 0);
// Read the file line by line
while ($data = fgetcsv($handle)) {
    printf("%s\n", implode(",", $data));
}
fclose($handle);
