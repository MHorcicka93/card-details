<?php include "./template/header.php"; ?>
<?php include "./template/formHeader.php";
?>

<?php
if (isset($_POST["continue"])) {
    session_destroy();
}


echo "<div class='complete__container'>
<div class='complete__content'>
    <figure>
        <img src='./images/icon-complete.svg' alt=''>
        <figcaption>
            <h1>Thank you!</h1>
            <p>We've added your card details</p>
        </figcaption>
        </figure>
        <form class='complete__redirect--home' action='./' method='post'>
        <button class='button' type='submit' name='continue'>Continue</button>
        </form>
        </div>
</div>";?>


<?php include "./template/footer.php" ;?>