<?php
    $link = mysqli_connect('127.0.0.1', 'root','','kickstar');
     
    $query = "DELETE FROM projects WHERE id = '{$_GET['AIDI']}'";
 
    $result = mysqli_query($link, $query);
    header('Location: acc.php');
?>