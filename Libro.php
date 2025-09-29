<?php

namespace Biblioteca;

class Libro
{
    private string $titulo;
    private string $autor;
    private int $paginas;
    private string $portada;
    public function __construct(string $titulo, string $autor, int $paginas, string $portada = "https://via.placeholder.com/150")
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setPaginas($paginas);
        $this->setPortada($portada);
    }
    public function getPortada(): string
    {
        return $this->portada;
    }
    public function setPortada(string $portada): void
    {
        if (filter_var($portada, FILTER_VALIDATE_URL) === false) {
            throw new \InvalidArgumentException("La portada debe ser una URL válida.");
        }
        $this->portada = $portada;
    }
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        if (trim($titulo) === '') {
            throw new \InvalidArgumentException("El título no puede estar vacío.");
        }
        $this->titulo = $titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): void
    {
        if (trim($autor) === '') {
            throw new \InvalidArgumentException("El autor no puede estar vacío.");
        }
        $this->autor = $autor;
    }

    public function getPaginas(): int
    {
        return $this->paginas;
    }

    public function setPaginas(int $paginas): void
    {
        if ($paginas <= 0) {
            throw new \InvalidArgumentException("El número de páginas debe ser mayor que cero.");
        }
        $this->paginas = $paginas;
    }

    public function resumen(): string
    {
        return "«{$this->titulo}» de {$this->autor} ({$this->paginas} págs.)";
    }
}
