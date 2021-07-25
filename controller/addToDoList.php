<?php

/**
 * Menambah to do list
 */

 function addToDoList(string $todo)
 {
     global $todolist;

    //  cek data yang ada pada to do list
    // jika datanya kosong maka tambahkan ke 1, jika ada 1 maka tambahkan data ke 2
    $number = sizeof($todolist) + 1;

    $todolist[$number] = $todo;
 }