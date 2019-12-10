<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class Image
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class ImageCollection implements Iterator
{
    protected $key = 0;
    protected $images = [];

    public function current()
    {
        return $this->images[$this->key];
    }
    public function key(): int
    {
        return $this->key;
    }
    public function next(): void
    {
        $this->key++;
    }
    public function rewind(): void
    {
        $this->key = 0;
    }
    public function valid(): bool
    {
        return isset($this->images[$this->key]);
    }
    public function addImage(Image $image): void
    {
        $this->images[] = $image;
    }
}

$images = new ImageCollection();
$images->addImage(new Image('test1'));
$images->addImage(new Image('test2'));

foreach ($images as $img) {
    printf("Image %s\n", $img->name);
}
