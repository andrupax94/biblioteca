# Biblioteca - Gestión de Libros en PHP

Este proyecto es una pequeña aplicación web para gestionar y visualizar una lista de libros, incluyendo libros digitales, utilizando PHP orientado a objetos y estilos CSS personalizados.

## Descripción

La aplicación permite mostrar un listado de libros físicos y digitales, mostrando información relevante como título, autor, número de páginas, portada y, en el caso de los libros digitales, el tamaño del archivo en MB. El diseño visual está pensado para simular una biblioteca moderna y atractiva.

## Clases

### [`Biblioteca\Libro`](Libro.php)

**Propiedades:**
- `string $titulo` — Título del libro.
- `string $autor` — Autor del libro.
- `int $paginas` — Número de páginas.
- `string $portada` — URL de la imagen de portada.

**Métodos:**
- `__construct(string $titulo, string $autor, int $paginas, string $portada = "...")`
- `getTitulo(): string`
- `setTitulo(string $titulo): void`
- `getAutor(): string`
- `setAutor(string $autor): void`
- `getPaginas(): int`
- `setPaginas(int $paginas): void`
- `getPortada(): string`
- `setPortada(string $portada): void`
- `resumen(): string` — Devuelve un resumen del libro.

### [`Biblioteca\LibroDigital`](LibroDigital.php)

Hereda de [`Biblioteca\Libro`](Libro.php).

**Propiedades adicionales:**
- `float $tamanoMB` — Tamaño del archivo digital en MB.

**Métodos adicionales:**
- `__construct(string $titulo, string $autor, int $paginas, float $tamanoMB, string $portada = "...")`
- `getTamanoMB(): float`
- `setTamanoMB(float $mb): void`
- `resumen(): string` — Devuelve un resumen del libro digital, incluyendo el tamaño del archivo.

## Archivos principales

- [`Test.php`](Test.php): Script principal que instancia los libros y muestra la interfaz web.
- [`Libro.php`](Libro.php): Define la clase base `Libro`.
- [`LibroDigital.php`](LibroDigital.php): Define la clase `LibroDigital` que extiende `Libro`.
- [`style.css`](style.css): Estilos CSS para la interfaz.

## Requerimientos de Software

- **PHP 8.0** o superior (por uso de tipado y constructores modernos).
- Servidor web compatible (por ejemplo, Apache con XAMPP, WAMP, MAMP, o el servidor embebido de PHP).
- Navegador web moderno para visualizar la interfaz.
- Extensión de PHP `mbstring` habilitada (recomendado).
- Opcional: Xdebug para depuración (configuración incluida en `.vscode/launch.json`).

## Requerimientos de Hardware

- Procesador: Cualquier CPU moderna (Intel/AMD, ARM).
- Memoria RAM: Mínimo 512 MB (recomendado 1 GB o más).
- Espacio en disco: Al menos 50 MB libres para el servidor y archivos del proyecto.
- Resolución de pantalla: 1024x768 o superior para una mejor visualización.

### Requerimientos recomendados (¡broma!)
-  Procesador: AMD RYZEN 9 9950XT 7ghz 32 Cores Platinum Edition
- Tarjeta gráfica: NVIDIA RTX 5090 TI Super Black Edition.
- 128 GB de RAM DDR7.
- Almacenamiento: 10 TB NVMe Gen6.
- Monitor 16K curvo de 49 pulgadas.
- Silla gamer con refrigeración líquida.
- Conexión a internet cuántica.

> *Nota: Si no tienes estos requisitos, igual funciona en tu PC normal 😉.*

## Ejecución

1. Clona o descarga este repositorio en tu servidor local.
2. Asegúrate de tener PHP y un servidor web funcionando(XAMP Recomendado).
3. Accede a `Test.php` desde tu navegador (por ejemplo, `http://localhost/biblioteca/Test.php`).
4. ¡Listo! Verás el listado de libros con sus portadas y resúmenes.

---
**GitHub:**  
https://github.com/andrupax94/biblioteca
**Autor:**  
Andres Eduardo Palencia Rojas
2025