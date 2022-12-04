<?php
$number=$_POST["number"];

    
    if ($number == "") {
        echo "Değer boş olamaz.";
    } else {
        if ($number % 3 == 0) {
            echo "Girilen değer 3 ile bölünebiliyor.";
        } else {
            $number++;
            if($number % 3 != 0) {
                $number++;
            }
           
        }
    }
