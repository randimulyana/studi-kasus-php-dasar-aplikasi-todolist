<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Randi");
addTodoList("Ahmad");
addTodoList("Maulana");

var_dump($todoList);