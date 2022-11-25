<?php
$cardNumberError = $errorClass ="";
// $errorBox="";
function isError($post)
{
    // $errorClass ="";
    if (empty($post)) {
        echo "<span>Can't be blank</span>";
    }
    
}
function warningClass($post){
    if (empty($post) || (strlen($post)!==16 && !preg_match("^([0-9])$",$post))) {
        echo "input__error";
    }
   
}
// if (empty($_POST["month"]) || 
// (empty($_POST["month"]) &&  empty($_POST["cvc"])) ||
// (empty($_POST["month"]) &&  empty($_POST["year"])) ||
// (empty($_POST["month"]) &&  empty($_POST["card-number"]))||
// (empty($_POST["month"]) &&  empty($_POST["card-holder"]))) {
//     $blankInput.="Can't be blank";
// }else if(empty($_POST["month"]) &&  empty($_POST["cvc"]))

if (!empty($_POST["card-number"]) && is_string($_POST["card-number"]) == 1) {
    $cardNumberError .= "Wrong format,numbers only.";
}
function setContentCard()
{

    if (isset($_POST["confirm"])) {
        $number = $_POST["card-number"];
        $cardNumber = "";
      
        // || is_string($number)!==1
        if (!empty($number) && (strlen($number)==16 && preg_match("^([0-9])$",$number))) {
            for ($i = 1; $i < strlen($number) + 1; $i++) {
                if ($i % 4 == 0 && $i !== 16) {
                    $cardNumber .= $number[$i - 1] . " ";
                } else {
                    $cardNumber .= $number[$i - 1];
                }
            }
            $cardArrNumber = explode(" ", $cardNumber);
            echo "<div class='content__text'>
            <p><span>" . $cardArrNumber[0] . "</span><span>" . $cardArrNumber[1] . "</span><span>" . $cardArrNumber[2] . "</span><span>" . $cardArrNumber[3] . "</span></p>
            <p><span>" . $_POST["card-holder"] . "</span><span>" . $_POST["month"] . "/" . $_POST["year"] . "</span></p>
            </div>";
        }else{
            echo "<div class='content__text'>
                    <p><span>0000</span><span>0000</span><span>0000</span><span>0000</span></p>
                     <p><span>Jane Foster</span><span>00/00</span></p>
            </div>";
        }

    } else {
        echo "<div class='content__text'>
                    <p><span>0000</span><span>0000</span><span>0000</span><span>0000</span></p>
                     <p><span>Jane Foster</span><span>00/00</span></p>
            </div>";
    }
}
// }
