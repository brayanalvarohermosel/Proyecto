<?php

function completedTask($taskId)
{
    $data = file_get_contents('../Json/tasks.json');
    $tasks = json_decode($data, true);

    foreach ($tasks['tarea'] as &$task) {
        if ($task['taskId'] === $taskId) {
            $task['completed'] == true;
            $task['completed'] = "si";
            break;
        }
    }

    $data = json_encode($tasks, JSON_PRETTY_PRINT);
    file_put_contents('../Json/tasks.json', $data);

    echo 'Cambio efectuado';
}

echo 'Ingresa el ID de la tarea que deseas marcar como completada: ';
$input = trim(fgets(STDIN));
completedTask($input);
?>