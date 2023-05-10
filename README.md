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

- /functions
  - create.php
  - createFotoCV.php
  - delete.php
  - deleteFotoCV.php
  - editarFotoCV.php
  - get.php
  - getFotoCV.php
  - selectPuestos.php
  - update.php
- /secciones
 - /empleados
    - crear.php
    - editar.php
    - index.php
 -/puestos
    - crear.php
    - editar.php
    - index.php
 -/usuarios
    - crear.php
    - editar.php
    - index.php
- /templates
  -footer.php
  -header.php
- cerrar.php
- db.php
- index.php
- login.php

## Licencia

Eliana Cristaldo
