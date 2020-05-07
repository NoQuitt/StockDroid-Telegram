<?php

include "framework.php";
$token = ''; //inserire il token del bot
$bot = new Bot($token,file_get_contents("php://input"));
include("config.php");
include("database.php");
include "comandi.php";

