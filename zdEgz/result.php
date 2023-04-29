<?php
$result = 0;

    if(empty($_POST['pln'])){
            echo ("Wpisz kwote do spraedania!!!");
        }
    else{

    if ($_POST['select_value'] == 'Euro') {
        $result = $_POST['pln'] * 4.32;
    }
    elseif ($_POST['select_value'] == 'Dolar'){
        $result = $_POST['pln'] * 3.21;
    }
    elseif ($_POST['select_value'] == 'Frank'){
        $result = $_POST['pln'] * 3.98;
    }
    
    echo $result;

    }




?>