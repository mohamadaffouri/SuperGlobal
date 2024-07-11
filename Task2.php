<?php
if(isset($_POST["search"]) && $_POST["search"]!=''){
$url=$_POST["search"];
header("Location: $url");
} else {
    $x= "https://www.google.com/index.html";
    header("Location: $x");
} 


?>
