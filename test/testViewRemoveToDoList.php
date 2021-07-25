<?php

require_once "../model/todolist.php";
require_once "../views/viewDelete.php";
require_once "../controller/addToDoList.php";
require_once "../controller/showToDoList.php";
require_once "../controller/delete.php";

addToDoList("Nova");
addToDoList("Ari");
addToDoList("Yanto");

showToDoList();

viewDelete();

showToDoList();