<?php

require_once __DIR__."/../model/todolist.php";
require_once __DIR__."/../controller/showToDoList.php";
require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../views/viewAdd.php";
require_once __DIR__."/../views/viewDelete.php";

function viewShow()
{
    while(true){

        showToDoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if($pilihan == "1"){
            viewAdd();
        } else if($pilihan == "2"){
            viewDelete();
        }else if($pilihan == "x"){
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

        echo "Sampai Jumpa Lagi" . PHP_EOL;
}