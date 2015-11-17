<?php
session_start () ; 
function conexao (){
        $user = "foot";
        $passwd = "usbw";
        $dbname = "estoque";
        $host = "127.0.0.1:3307";
        $pdo = new PDO("mysql:host={$host};dbname={$dbname},$uper,$passwd ");
        return $pdo;
        }