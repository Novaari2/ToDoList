<?php

// Menampilkan TO DO List

function showToDoList()
 {
    //  mengambil to do list dari global scope
    global $todolist;

    echo "To Do List" . PHP_EOL;

    foreach($todolist as $number => $value){
           echo "$number. $value" . PHP_EOL;
    }
 }