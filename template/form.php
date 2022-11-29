<?php
if (isset($_POST["confirm"])) {
 
  $pregMatch = "([/S 0-9]{16})";
  $cardHold = $_REQUEST["card-holder"];
  $cardNum = $_REQUEST["card-number"];
  $month = $_REQUEST["month"];
  $year = $_REQUEST["year"];
  $cvc = $_REQUEST["cvc"];
  $notEmpty = !empty($cardHold) && !empty($cardNum) && !empty($month) && !empty($year) && !empty($cvc);
  $isNumber = preg_match($pregMatch, $cardNum);
  $isDateRightFormat=strlen($month)==2 && strlen($month)==2;
  $isRightFormat= strlen($cvc) ==3 && $isDateRightFormat;
  if ($notEmpty && $isNumber && $isRightFormat) {
    session_start();
    $_SESSION["card-holder"] = $cardHold;
    $_SESSION["card-number"] = $cardNum;
    $_SESSION["month"] = $month;
    $_SESSION["year"] = $year;
    $_SESSION["cvc"] = $cvc;
    $_SESSION["confirm"] = $_POST["confirm"];
  
    header("Location:./completeForm.php");
    exit();
}

}
?>
<div class="form__container">


  <form class="card__form" method="post">
    <label class="label__row--space" for="card-holder">CARDHOLDER NAME</label>
    <input class="input input--lg <?php echo isset($_POST["card-holder"]) ? warningClass($_REQUEST["card-holder"], "card-holder") : ""; ?>" type="text" name="card-holder" value="" placeholder="e.g. Jane Appleseed">
    <?php echo isset($_POST["card-holder"]) ? isError($_REQUEST["card-holder"], "card-holder") : "<span></span>" ?>
    <label class="label__row--space" for="card-number">CARD NUMBER</label>
    <input class="input input--lg <?php echo isset($_POST["card-number"]) ? warningClass($_REQUEST["card-number"], "card-number") : ""; ?>" type="text" name="card-number" value="" placeholder="e.g. 1234 5678 9123 0000">
    <?php isset($_POST["card-number"]) ? isError($_REQUEST["card-number"], "card-number") : "<span></span>" ?>
    <div>
      <div class="label__row--space">
        <label for="month">EXP. DATE (MM/YY)</label>
        <label for="cvc">CVC</label>
      </div>
      <div class="input__multiple">
        <div>
          <input class="card__date input 
          <?php echo isset($_POST["month"]) ? warningClass($_REQUEST["month"], "month") : ""; ?>"
           type="number" name="month" value="" placeholder="MM" maxlength="2">
          <?php

          isset($_POST["month"]) ? isError($_REQUEST["month"], "month") : "<span></span>" ?>

        </div>
        <div>
          <input class="card__date input <?php echo isset($_POST["year"]) ? warningClass($_REQUEST["year"], "year") : ""; ?>" 
          type="number" name="year" value="" placeholder="YY" maxlength="2">

          <?php isset($_POST["year"]) ? isError($_REQUEST["year"], "year") : "<span></span>" ?>

        </div>
        <div>
          <input class="input <?php echo isset($_REQUEST["cvc"]) ? warningClass($_REQUEST["cvc"], "cvc") : ""; ?>"
           type="number" name="cvc" value="" placeholder="e.g. 123">
          <?php isset($_POST["cvc"]) ? isError($_REQUEST["cvc"], "cvc") : "<span></span>" ?>
        </div>
      </div>


    </div>
    <input type="submit" class="button" name="confirm" placeholder="Confirm">
  </form>
  <?php
  ?>
</div>