<?php

function deleteTask($taskId) {
    $jsonString = file_get_contents('../Json/tasks.json');
    $data = json_decode($jsonString, true);
    
    foreach ($data['tarea'] as $key => $task) {
        if ($task['taskId'] === $taskId) {
            $taskId = $key;
            break;
        }
    }

    if ($data['tarea'][$taskId]) {
        
        unset($data['tarea'][$taskId]);
        
        $deltask = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('../Json/tasks.json', $deltask);
        
        $data['tarea'] = array_values($data['tarea']);
        
        echo "La tarea se elimino correctamente";

        return true;
    } else {
        echo "Fallo al eliminar la tarea con id: $taskId";
        return false;
    }   

};

echo "Ingrese el ID de la tarea que quiere eliminar: ";
    $input = trim(fgets(STDIN));

deleteTask($input);

?>