<?php

require_once "../model/todolist.php";
require_once "../controller/delete.php";
require_once "../controller/addToDoList.php";
require_once "../controller/showToDoList.php";

addToDoList("eko");
addToDoList("kurniawan");
addToDoList("khannedy");
addToDoList("budy");
addToDoList("joko");

showToDoList();

delete(3);

showToDoList();

delete(1);

showToDoList();