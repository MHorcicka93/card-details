
    <header class="header__background">
            <!-- <div></div> -->
            <figure class="card__container">
                <div class="card__front">
                    <span class="card__cvc">
                        <?php 
                    if (isset($_POST["confirm"]) && !is_null($_POST["cvc"])) {
                        echo $_POST["cvc"];
                    }else{
                        echo "123";
                    }
                    ?>
                    </span>
                    <img class="card__back" src="images/bg-card-back.png" alt="Back Card">
                    <div class="card__front--content">
                        <div class="content">
                            <img src="images/card-logo.svg" alt="Card logo">
                          <?php include "./function/postInput.php";
                          setContentCard();
                          ?>
                        </div>

                    </div>
                </div>
            </div>
        </figure>
        <!-- <div></div>  -->
        </header>
        
