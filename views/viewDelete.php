<?php

require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../controller/delete.php";

function viewDelete(){
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal): ");

    if($pilihan == "x"){
        echo "Batal menghapus todo";
    } else {
        $success = delete($pilihan);
        if($success){

            echo "Sukses Menghapus Todo Pilihan";
        
        } else {
        
            echo "Gagal menghapus";
        }
    }

}