<?php

require_once "../views/viewShow.php";
require_once "../controller/addToDoList.php";

addToDoList("nova");
addToDoList("ari");
addToDoList("yanto");

viewShow();