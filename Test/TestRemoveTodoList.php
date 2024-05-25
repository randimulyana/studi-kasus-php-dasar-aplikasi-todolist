<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Randi");
addTodoList("Ahmad");
addTodoList("Maulana");
addTodoList("Aja");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(3);

showTodoList();