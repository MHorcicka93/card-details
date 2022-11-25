
<!-- 
// if ($_POST["card-holder"] && $_POST["card-number"]&& $_POST["month"]&& $_POST["year"]&& $_POST["cvc"] ) {
//   echo warningClass($_POST["card-holder"]);
// }
$errorClassBorder="";
if (isset($_POST["confirm"])) {
if () {
  # code...
}
  $errorClassBorder.="input__error";

} -->

<div class="form__container">
  <!-- <div></div> -->
  <form   class="card__form" method="post">
      <label class="label__row--space" for="card-holder">CARDHOLDER NAME</label>
      <input class="input input--lg <?php echo isset($_POST["card-holder"]) ? warningClass($_POST["card-holder"]):""; ?>" type="" name="card-holder" value="" placeholder="e.g. Jane Appleseed">
      <?php echo isset($_POST["card-holder"]) ? isError($_POST["card-holder"]): "<span></span>"?>
      <label class="label__row--space" for="card-number">CARD NUMBER</label>
      <input class="input input--lg <?php echo isset($_POST["card-number"]) ? warningClass($_POST["card-number"]):""; ?>" type="" name="card-number" value="" placeholder="e.g. 1234 5678 9123 0000">
      <span><?php echo $cardNumberError;?></span>
      <?php isset($_POST["card-number"]) ? isError($_POST["card-number"]): "<span></span>"?>
      <!-- <label for="date">EXP.DATE(MM/YY)</label> -->
      <div>
          <div class="label__row--space">
          <label for="month">EXP. DATE (MM/YY)</label>
          <label for="cvc">CVC</label>
          </div>
          <div class="input__multiple"> 
          <div>
            <input class="card__date input <?php echo isset($_POST["month"]) ? warningClass($_POST["month"]):""; ?>" type="number" name="month" value="" placeholder="MM" maxlength="2">
            <?php 
            // echo "<input class='card__date input ' type='number' name='month'value='' placeholder='MM' maxlength='2'>";
            isset($_POST["month"]) ? isError($_POST["month"]): "<span></span>"?>
            <!-- <span><?php echo $cardNumberError;?></span> -->
          </div>
          <div>
          <input class="card__date input <?php echo isset($_POST["year"]) ? warningClass($_POST["year"]):""; ?>" type="number" name="year" value="" placeholder="YY" maxlength="2">
            <?php isset($_POST["year"]) ? isError($_POST["year"]): "<span></span>"?>
            <!-- <span><?php echo $cardNumberError;?></span> -->
          </div>
          <div>
            <input class="input <?php echo isset($_POST["cvc"]) ? warningClass($_POST["cvc"]):""; ?>" type="number" name="cvc" value="" placeholder="e.g. 123" max="999" >
            <?php isset($_POST["cvc"]) ?isError($_POST["cvc"]):"<span></span>"?>
            <!-- <span><?php echo $cardNumberError;?></span> -->
            
          </div>
          </div>
       
  
      </div>
      <input type="submit" name="confirm" placeholder="Confirm">
    </form>
    <?php
// if (isset($_POST["confirm"]) && isset($_POST["cvc"]) && isset($_POST["card-holder"]) && isset($_POST["card-number"])&& isset($_POST["month"])&& isset($_POST["year"])) {
  // if (isset($_POST["confirm"]) && !empty($_POST["card-holder"])) {
//   if (isset($_POST["confirm"]) ) {
//   $cardHolder=$_POST["card-holder"];
//   $cardNumber=$_POST["card-number"];
//   $month=$_POST["month"];
//   $year=$_POST["year"];
//   $cvc=$_POST["cvc"];
//   echo $cardHolder."-".$cardNumber."-".$month."-".$year."-".$cvc.".";
// }


?>
    <!-- <div></div> -->
</div>
