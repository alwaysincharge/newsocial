<?php
 
$json = file_get_contents('http://juicer.herokuapp.com/api/article?url=' . $_POST['relay']);
 
$obj = json_decode($json);
$array = json_encode($obj);
//echo "<pre>";
print_r($array);
//echo "</pre>";
// In the case of this input, do key and array lookups to get the values
//var_dump($obj);
 //print_r($array['article']['url']);
?>