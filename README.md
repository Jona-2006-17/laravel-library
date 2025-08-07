Este es un sistema básico de gestión de libros creado con Laravel. Permite registrar, listar, editar y eliminar libros en una base de datos MySQL.

---

Funcionalidades

- Registrar libros con título, autor y año.
- Listar todos los libros.
- Editar la información de un libro existente.
- Eliminar libros del sistema.
- Validación de datos en formularios.

---

Tecnologías usadas

- Laravel 10
- PHP 8.x
- MySQL
- Blade (motor de plantillas)
- HTML y CSS

---

Instalación

1. Clona el repositorio:
```bash
git clone https://github.com/tu-usuario/laravel-library.git
cd laravel-library
````

2. Instala dependencias
```bash
composer install
````

3. Copia el archivo .env.example y crea un archivo .env
```bash
cp .env.example .env
````

4. Genera la clave de la aplicación:
```bash
php artisan key:generate
````

5. Configura tu base de datos en .env

6. Ejecuta migraciones:
```bash
php artisan migrate
````
7. llama el servidor
```bash
php artisan serve
````
8. Clic en el enlace que se genera y en la direccion URL del sitio al final colocar: /biblioteca


