<?php
//get tasklist array from GET
$task_list = filter_input(INPUT_GET, 'tasklist', FILTER_DEFAULT,                  
                          FILTER_REQUIRE_ARRAY);
if ($task_list === NULL) {
    $task_list = array();
}

//get action variable from GET
$toDo = filter_input(INPUT_GET, 'toDo');

//initialize error messages array
$errors = array();

//process
switch( $toDo ) {
    case 'add':
        $new_task = filter_input(INPUT_GET, 'task');
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            $task_list[] = $new_task;
        }
        break;
    case 'delete':
        $task_index = filter_input(INPUT_GET, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be deleted.';
        } else {
            unset($task_list[$task_index]);
            $task_list = array_values($task_list);
        }
        break;
}
include('task_list.php');
?>