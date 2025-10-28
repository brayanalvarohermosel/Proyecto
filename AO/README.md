# README — Proyecto AO

Resumen corto

- Programa que añade tareas a un .json y tambien te permite marcarlas como echas, borrarlas, editarlas y mostrar las tareas que esten completas o no dependiendo de tu elección.

Ejecución

- Abrir la aplicacion en VS Code y situarte en PROYECTO/AO/Main
- Abrir la terminal de VS Code y poner "php opcion.php"(Ej: php addTask.php)

Descripción de los archivos en Main:

- Main/addTask.php
  - Qué hace: Añade una tarea a lista de tareas.
  - Uso: Poner en la terminal "php addTask.php".
- Main/completedTask.php
  - Qué hace: Pide el id de la tarea y marca la tarea como completada o finalizada.
  - Uso: Poner en la terminal "php completedTask.php".
- Main/deleteTask.php
  - Qué hace: Pide el id de la tarea que quieres eliminar y la elimina.
  - Uso: Poner en la terminal "php deleteTask.php".
- Main/editTask.php
  - Qué hacen: Pide el id de la tarea que quieres editar y te pide si quieres editar el nombre, descripción o fecha de caducidad de la tarea.
  - Uso: Poner en la terminal "php editTask.php".
- Main/showTasks.php
  - Qué hacen: Pregunta que tipo de tareas quieres ver si las que estan completas (poniendo "si") o las que no estan completas (poniendo "no") .
  - Uso: Poner en la terminal "php showTasks.php".
