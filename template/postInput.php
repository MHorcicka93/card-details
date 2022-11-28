
<?php  include "./modul/errorMessage.php";
                    include "./modul/formatedInput.php";
                    
                    if (isset($_SESSION["confirm"])) {
                        // print_r($_SESSION);
                        $cardNum=$_SESSION["card-number"];
                        // echo $CARDNUM;
                        $number = trim(str_replace(" ", "", $cardNum));
                        if (!empty($number) && (strlen($number) == 16 && preg_match($pregMatch, $number))) {
                            $cardArrNumber = explode(" ", setCardNumber($number));
                            echo "<div class='content__text'>
                            <p><span>" . $cardArrNumber[0] . "</span><span>" . $cardArrNumber[1] . "</span><span>" . $cardArrNumber[2] . "</span><span>" . $cardArrNumber[3] . "</span></p>
                            <p><span>" . $_SESSION["card-holder"] . "</span><span>" . $_SESSION["month"] . "/" . $_SESSION["year"] . "</span></p>
                            </div>";
                            
                            
                        } else {
                            echo "<div class='content__text'>
                                        <p><span>0000</span><span>0000</span><span>0000</span><span>0000</span></p>
                                         <p><span>Jane Foster</span><span>00/00</span></p>
                                </div>";
                        }
                    }else{
                        echo "<div class='content__text'>
                        <p><span>0000</span><span>0000</span><span>0000</span><span>0000</span></p>
                         <p><span>Jane Foster</span><span>00/00</span></p>
                </div>";
                    }
                    ?>

