<?php

function add()
{
    $jsonString = file_get_contents('../Json/tasks.json');
    $newTask = json_decode($jsonString, true);

    do {

        echo "Ingrese Id: ";
        $id = trim(fgets(STDIN));

        echo "Ingrese nombre de la tarea: ";
        $taskName = trim(fgets(STDIN));

        echo "Ingrese descipción: ";
        $description = trim(fgets(STDIN));

        echo "Ingrese fecha de entrega: ";
        $dueDate = trim(fgets(STDIN));

        $completed = false;

        $newTask['tarea'][] = [
            'taskId' => $id,
            'taskName' => $taskName,
            'description' => $description,
            'dueDate' => date($dueDate),
            'completed' => 'no' . $completed
        ];


        echo "Ingrese 'salir' para terminar o pulse enter para ingresar otro dato: ";
        $input = trim(fgets(STDIN));
    } while ($input !== 'salir');

    $jsonOutput = json_encode($newTask, JSON_PRETTY_PRINT);
    file_put_contents('../Json/tasks.json', $jsonOutput);
    echo $jsonOutput;

    echo "\nTarea/s agregada/s con éxito.";
}

add();
?>