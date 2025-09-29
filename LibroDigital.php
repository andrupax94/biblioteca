<?php

namespace Biblioteca;

require_once __DIR__ . '/Libro.php';

class LibroDigital extends Libro
{
    private float $tamanoMB;

    public function __construct(string $titulo, string $autor, int $paginas, float $tamanoMB, string $portada = "https://via.placeholder.com/150")
    {
        parent::__construct($titulo, $autor, $paginas, $portada);
        $this->setTamanoMB($tamanoMB);
    }

    public function getTamanoMB(): float
    {
        return $this->tamanoMB;
    }

    public function setTamanoMB(float $mb): void
    {
        if ($mb <= 0) {
            throw new \InvalidArgumentException("El tamaño del archivo debe ser mayor que cero.");
        }
        $this->tamanoMB = $mb;
    }

    public function resumen(): string
    {
        return parent::resumen() . " - PDF ({$this->tamanoMB} MB)";
    }
}
