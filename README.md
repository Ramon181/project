![Logo](https://tredasolutions.com/wp-content/uploads/2022/10/logo_Mesa-de-trabajo-1-copia-300x134.png)


# Aplicación de Prueba Técnica - Gestión de Tiendas y Productos

Esta aplicación de prueba técnica es una solución desarrollada en PHP utilizando el framework Laravel. El objetivo principal de la aplicación es gestionar la información de tiendas y productos asociados a cada tienda.


## Funcionalidades

1 - Gestión de Tiendas:

- Crear una nueva tienda con su respectivo nombre y fecha de apertura.
- Ver la lista de todas las tiendas existentes.
- Editar los datos de una tienda existente.

2 - Gestión de Productos:

- Asociar productos a una tienda específica.
- Crear un nuevo producto con su respectivo nombre, SKU, descripción, valor y ruta de la imagen en el sistema de archivos.
- Ver la lista de productos asociados a una tienda.


## Requisitos

La aplicación de prueba técnica tiene los siguientes requisitos:

- PHP 7 o superior.
- Laravel 8 o superior.
- MySQL o cualquier otro motor de base de datos compatible con Laravel.


## Instrucciones de Instalación

Para instalar y ejecutar la aplicación de prueba técnica, sigue los siguientes pasos:

- Clona el repositorio desde GitHub: $ git clone <https://github.com/Ramon181/project.git> a la carpeta htdocs de XAMPP

- Inicia XAMPP en el panel de control

- Accede a la carpeta del proyecto: $ cd project

- Instala las dependencias de Composer: $ composer install

- Crea una base de datos vacía en tu motor de base de datos.

- Copia el archivo .env.example y renómbralo a .env. Luego, actualiza las variables de entorno en el archivo .env con la configuración de tu base de datos.

- Genera una nueva clave de aplicación: $ php artisan key:generate

- Ejecuta las migraciones para crear las tablas de la base de datos: $ php artisan migrate

- Inicia el servidor de desarrollo: $ npm run dev

- Accede a la aplicación en tu navegador web: http://localhost/project/public/
