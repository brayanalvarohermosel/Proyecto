<?php

function editTask($taskId)
{

    echo 'Que es lo que quieres editar? (nombre, descripcion o fecha): ';
    $input = trim(fgets(STDIN));
    $fieldToEdit = strtolower($input);

        switch ($fieldToEdit) {
            case 'nombre':
                echo 'Ingresa el nuevo nombre de la tarea: ';
                $newName = trim(fgets(STDIN));

                $data = file_get_contents('../Json/tasks.json');
                $tasks = json_decode($data, true);
                foreach ($tasks['tarea'] as &$task) {
                    if ($task['taskId'] === $taskId) {
                        $task['taskName'] = $newName;
                        break;
                    }
                }

                $data = json_encode($tasks, JSON_PRETTY_PRINT);
                file_put_contents('../Json/tasks.json', $data);

                echo 'Cambio efectuado';

                break;

            case 'descripcion':

                echo 'Ingresa la nueva descripcion de la tarea: ';
                $newDescription = trim(fgets(STDIN));

                $data = file_get_contents('../Json/tasks.json');
                $tasks = json_decode($data, true);
                foreach ($tasks['tarea'] as &$task) {
                    if ($task['taskId'] === $taskId) {
                        $task['description'] = $newDescription;
                        break;
                    }
                }

                $data = json_encode($tasks, JSON_PRETTY_PRINT);
                file_put_contents('../Json/tasks.json', $data);

                echo 'Cambio efectuado';

                break;

            case 'fecha':
                echo 'Ingresa la nueva fecha de la tarea (YYYY-MM-DD): ';
                $newDueDate = trim(fgets(STDIN));

                $data = file_get_contents('../Json/tasks.json');
                $tasks = json_decode($data, true);
                foreach ($tasks['tarea'] as &$task) {
                    if ($task['taskId'] === $taskId) {
                        $task['dueDate'] = $newDueDate;
                        break;
                    }
                }

                $data = json_encode($tasks, JSON_PRETTY_PRINT);
                file_put_contents('../Json/tasks.json', $data);

                echo 'Cambio efectuado';

                break;
            default:
                echo 'Opcion no valida.';
                break;
        }
    }
echo 'Ingresa el ID de la tarea que deseas editar: ';
$input = trim(fgets(STDIN));
editTask($input);
?>