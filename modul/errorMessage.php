<?php 

$pregMatch="([/S 0-9]{16})";
$cardNumber="card-number";

function isError($post,$nameInput)
{
    global $pregMatch,$cardNumber;
    // $post=trim($post);
    
    if (empty($post)) {
        echo "<span>Can't be blank</span>";
    }else if(!preg_match($pregMatch,$post) && $nameInput==$cardNumber){
        echo "<span>Wrong format,numbers only.</span>";
    }else{
        echo "<span></span>";
    }
}
function warningClass($post,$nameInput){
    global $pregMatch,$cardNumber;
    $post=trim($post);
  
    if (empty($post) || (strlen($post)!==16 && (!preg_match($pregMatch,$post)&& $nameInput==$cardNumber))) {
        echo "input__error";
    }
   
}
?>