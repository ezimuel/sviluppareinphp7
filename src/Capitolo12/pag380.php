<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class Example {
    // Sono supportati tutti i tipi ad eccezione di "void" e "callable"
    public int $scalarType;
    protected ClassName $classType;
    private ?ClassName $nullableClassType;

    // Si possono anche utilizzare proprietà statiche
    public static iterable $staticProp;

    // Si possono specificare dei valori di default
    public string $str = "foo";
    public ?string $nullableStr = null;

    // I tipi possono anche essere specificati per più variabili
    public float $x, $y;
    // è equivalente a:
    public float $x;
    public float $y;
}
