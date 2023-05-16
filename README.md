# Carga de empleados con PHP y SQL

Este es un proyecto que hice el cuál simula una carga de registro de empleados utilizando una base de datos local. El proyecto cuenta con un  inicio y un cierre de sesión. La capacidad de añadir puestos de empleados en la base de datos, borrarlos y editarlos; añadir nuevos empleados y sus datos, borrarlos y editarlos; y añadir nuevos usuarios autorizados para el uso de la página, borrarlos y actualizarlos.

## Requisitos

- PHP
- SQL
- -xampp
- Navegador web compatible (Chrome, Firefox, etc.)

## Instalación

1. Clona el repositorio: `git clone https://github.com/Eliana0/php`
2. Navega al directorio del proyecto: `cd php`
3. Instala: `npm install`

## Uso

1. Abrir el xampp y activar Apache y MySQL.
2. Abre tu navegador y ve a `http://localhost` para ver la aplicación en funcionamiento.
3. Abrir http://localhost/phpmyadmin/ para manipular la base de datos.

## Estructura de Archivos

- /functions : En este apartado están todas las funciones que se pueden reutilizar para hacer los respectivos CRUD de cada objeto.
- /secciones
 - /empleados : La sección CRUD de empleados, en ella podrás añadir, borrar, modificar y ver los perfiles de los empleados disponibles.
 -/puestos : La sección CRUD de puestos, en ella podrás añadir, borrar, modificar y ver los puestos de los empleados y está relacionada a la creación de perfiles de empleados para seleccionar de esta lista.
 -/usuarios : La sección CRUD de usuarios, en ella podrás añadir, borrar, modificar y ver los perfiles de las personas que tienen acceso a esta app.
- /templates : Estructura de footer y header.
  -footer.php
  -header.php
- cerrar.php : Deslogueo del sitio.
- db.php: Base de datos en MyAdmin.
- index.php : Bienvenida al sitio.
- login.php : Logueo de sitio, sólo podrá accceder el personal autorizado.

## Licencia

Eliana Cristaldo
