<?php 
function setCardNumber($number){
    $cardNumber = "";
        for ($i = 1; $i < strlen($number) + 1; $i++) {
            if ($i % 4 == 0 && $i !== 16) {
                $cardNumber .= $number[$i - 1] . " ";
            } else {
                $cardNumber .= $number[$i - 1];
            }
        }
        return $cardNumber;
}

?>