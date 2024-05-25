<?php

require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../View/ViewAddTodoList.php";

addTodoList("php web");
addTodoList("php database");
addTodoList("php composer");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();