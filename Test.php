<?php

use Biblioteca\Libro;
use Biblioteca\LibroDigital;

require_once __DIR__ . '/Libro.php';
require_once __DIR__ . '/LibroDigital.php';
$libros = [
    new Libro("Cien años de soledad", "Gabriel García Márquez", 417, "https://imagessl8.casadellibro.com/a/l/t0/08/9788497592208.jpg"),
    new LibroDigital("Clean Code", "Robert C. Martin", 464, 3.2, "https://m.media-amazon.com/images/I/41-sN-mzwKL._SL500_.jpg"),
    new Libro("El nombre de la rosa", "Umberto Eco", 592, "https://imagessl8.casadellibro.com/a/l/t0/68/9788426403568.jpg"),
    new LibroDigital("The Pragmatic Programmer", "Andrew Hunt y David Thomas", 352, 2.8, "https://tse2.mm.bing.net/th/id/OIP.KI_tsGHe4sBa0xd3WjpMyQHaJs?rs=1&pid=ImgDetMain&o=7&rm=3"),
    new Libro("Rayuela", "Julio Cortázar", 736, "https://tse2.mm.bing.net/th/id/OIP.8R8ZZ7SHOoa0NvPaXf6yvwHaMG?rs=1&pid=ImgDetMain&o=7&rm=3"),
    new LibroDigital("You Don’t Know JS", "Kyle Simpson", 278, 1.5, "https://m.media-amazon.com/images/I/410f-bUBR3L.jpg"),
    new Libro("1984", "George Orwell", 328, "https://m.media-amazon.com/images/I/81Q+XX12+yL._SL1500_.jpg"),
    new LibroDigital("Refactoring", "Martin Fowler", 448, 4.1, "https://m.media-amazon.com/images/I/71yPDDIwcoL._SL1500_.jpg"),
];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="list-title">
            <i></i>
            <h1>Listado de libros</h1>
        </div>
        <div class="book-list">

            <?php foreach ($libros as $libro) : ?>
                <div class="book-item">
                    <div class="lomo"></div>
                    <div class="D3 D3-top"></div>
                    <div class="portrait" style="background-image: url('<?= $libro->getPortada(); ?>')" alt="Portada del libro">
                        <div class="book-info">

                            <p><?= $libro->resumen(); ?></p>
                        </div>
                        <div class="D3 D3-right"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

</body>

</html>