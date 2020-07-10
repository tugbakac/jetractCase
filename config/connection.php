<?php
    try{
        session_start();
        $link=mysqli_connect("localhost","root","12345678");
        mysqli_select_db($link,"jetract");
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
?>