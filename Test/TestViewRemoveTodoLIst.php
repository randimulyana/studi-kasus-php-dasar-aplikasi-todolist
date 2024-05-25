<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("php");
addTodoList("composer");
addTodoList("web");
addTodoList("oop");
addTodoList("laravel");

showTodoList();

viewRemoveTodoList();

showTodoList();

viewRemoveTodoList();

showTodoList();