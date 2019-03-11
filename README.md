test
==========

Test para 360.

Requisitos del sistema
----------------------

- PHP 7.0 o superior
- MySql 5 o superior

#Para despliegue inicial:

Crear la base de datos
----------------------

Editar el fichero .env si el login es distinto de root y el password es distinto de '' y poner los que correspondan a su servidor mysql

Luego ejecutar:

php bin/console doctrine:database:create
