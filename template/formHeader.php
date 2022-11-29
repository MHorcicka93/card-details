<header class="header__background">
    <!-- <div></div> -->
    <figure class="card__container">
        <div class="card__front">
            <span class="card__cvc">
                <?php
                session_start();
                if (isset($_SESSION["confirm"]) && !empty($_SESSION["cvc"])) {
                    echo $_SESSION["cvc"];
                   
                } else {
                    echo "000";
                }
               
                ?>
            </span>
            <img class="card__back" src="images/bg-card-back.png" alt="Back Card">
            <div class="card__front--content">
                <div class="content">
                    <img src="images/card-logo.svg" alt="Card logo">
                    <?php  include "template/postInput.php";
                    session_destroy();
                    ?>
                </div>

            </div>
        </div>
        </div>
    </figure>
    <!-- <div></div>  -->
</header>