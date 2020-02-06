<?php
    function countDown($num) {
        if($num < 0 || $num > 10){
            throw new Exception("Getal ligt niet tussen de 0 en 10");
        }else{
            return true;
        }
    }
    try {
        echo(countDown(11));
    } catch (Exception $e) {
        echo('<h1>Er is iets fout gegaan!</h1>');
    }
?>