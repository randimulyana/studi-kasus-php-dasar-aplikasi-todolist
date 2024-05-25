<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("php web");
addTodoList("php composer");
addTodoList("php database");

viewShowTodoList();