<?php

function showTasks()
{
    $jsonString = file_get_contents('../Json/tasks.json');
    $data = json_decode($jsonString, true);
     $show = [];

    echo 'Introduce si para mostrar las tareas completdas o no para mostrar las tareas no completadas:';
    $input = trim(fgets(STDIN));
    $fieldToEdit = strtolower($input);

    foreach ($data['tarea'] as $task) {
        switch ($fieldToEdit) {
            case 'si':
                if ($task['completed'] == $fieldToEdit) {
                     $show[]['tarea'] = 
                    "\n" . 'Id: '.$task['taskId'] . 
                    "\n" . 'Nombre: '.$task['taskName'] . 
                    "\n" . 'Descripcion: '.$task['description'] . 
                    "\n" . 'Fecha: '.$task['dueDate'] . 
                    "\n" . 'Completed: '.$task['completed'];
                }
                break;

            case 'no';
                if ($task['completed'] == $fieldToEdit) {
                    $show[]['tarea'] = 
                    "\n" . 'Id: '.$task['taskId'] . 
                    "\n" . 'Nombre: '.$task['taskName'] . 
                    "\n" . 'Descripción: '.$task['description'] . 
                    "\n" . 'Fecha: '.$task['dueDate'] . 
                    "\n" . 'Completed: '.$task['completed'];
                }

            default:
                echo 'error';
                break;
        }
    }

    print_r($show);
}

showTasks();
