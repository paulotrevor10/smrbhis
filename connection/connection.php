<?php
    
    function connect() {
        $host = "localhost";
        $username = "root";
        $password = "admin";
        $database= "student_system";
        
        $con = new mysqli($host, $username, $password, $database);
        
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        else{
            return $con;    
        }



    }