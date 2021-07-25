<?php

require_once "../model/todolist.php";
require_once "../controller/addToDoList.php";

addToDoList("Nova");
addToDoList("Ari");
addToDoList("Yanto");

var_dump($todolist);