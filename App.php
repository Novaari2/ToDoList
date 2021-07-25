<?php

require_once __DIR__."/model/todolist.php";
require_once __DIR__."/controller/showToDoList.php";
require_once __DIR__."/controller/addToDoList.php";
require_once __DIR__."/controller/delete.php";
require_once __DIR__."/views/viewShow.php";
require_once __DIR__."/views/viewAdd.php";
require_once __DIR__."/views/viewDelete.php";
require_once __DIR__."/helper/input.php";

echo "Aplikasi To Do List" . PHP_EOL;

viewShow();