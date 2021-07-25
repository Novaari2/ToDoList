<?php

require_once __DIR__."/../model/todolist.php";
require_once __DIR__."/../controller/addToDoList.php";
require_once __DIR__."/../helper/input.php";

function viewAdd(){

    echo "Menambah TODO" . PHP_EOL;

    $todo = input("Todo (x) untuk batal: ");

        if($todo == "x"){
            echo "batal menambah todo";
        } else {

            addToDoList($todo);
        }
    
}