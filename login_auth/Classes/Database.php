<?php
    
    class Database 
    {
        public static function getdb(){
            $conn = mysqli_connect('localhost', 'root', '', 'dbms');
            return $conn;
        }
    }

?>