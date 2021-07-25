<?php
// file untuk tes aplikasi

require_once "../model/todolist.php";
require_once "../controller/showToDoList.php";

$todolist[1] = "Belajar To Do List";
$todolist[2] = "Belajar OOP";
$todolist[3] = "Belajar Database";

showToDoList();