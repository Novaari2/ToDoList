<?php

require_once "../controller/showToDoList.php";
require_once "../controller/addToDoList.php";
require_once "../views/viewAdd.php";

addToDoList("nova");
addToDoList("ari");
addToDoList("yanto");

viewAdd();

showToDoList();

viewAdd();

showToDoList();