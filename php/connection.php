<?php

$user = "";
$pass = "";
     
    try {
        $conn = new PDO('mysql:host=;dbname=', $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }