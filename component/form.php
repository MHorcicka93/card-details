<?php
if (isset($_POST["confirm"])) {
  echo "Is clicked";
}


?>
<div class="form__container">
  <!-- <div></div> -->
  <form class="card__form" method="POST">
      <label for="cardholder">CARDHOLDER NAME</label>
      <input class="input input--lg" type="" name="cardholder" value="" placeholder="e.g. Jane Appleseed">
      <label for="card-number">CARD NUMBER</label>
      <input class="input input--lg" type="" name="card-number" value="" placeholder="e.g. 1234 5678 9123 0000">
  
      <!-- <label for="date">EXP.DATE(MM/YY)</label> -->
      <div>
          <div>
          <label for="month">EXP.DATE(MM/YY)</label>
          <label for="cvc">CVC</label>
          </div>
          <div class="input__multiple"> 
          <input class="card__date input" type="text" name="month" value="" placeholder="MM"><input class="card__date input" type="text" name="year" value="" placeholder="YY">
          <input class="input " type="text" name="cvc" value="" placeholder="e.g. 123">
          </div>
  
      </div>
      <input type="submit" name="confirm">
    </form>
    <!-- <div></div> -->
</div>
