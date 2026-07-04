<?php
require "./order_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bistro Order Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="page-header">
   <h1>Bistro Order Form</h1>
   <p>Build your dessert and drink order below. Your choices are saved automatically.</p>
</header>

<main class="page-main">

   <form action="process_order.php" method="post" class="order-form">

      <div class="form-group">
         <label for="dessert">Dessert</label>
         <select name="dessert" id="dessert">
            <option value="none">-- Choose a dessert --</option>
            <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
            <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
            <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
            <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
         </select>
      </div>

      <div class="form-group">
         <label for="drink">Drink</label>
         <select name="drink" id="drink">
            <option value="none">-- Choose a drink --</option>
            <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
            <option value="Hot Chocolate" <?= drinkSelected("Hot Chocolate"); ?>>Hot Chocolate</option>
            <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
            <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
            <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
         </select>
      </div>

      <fieldset class="form-group">
         <legend>Drink Size</legend>

         <label class="radio-label">
            <input type="radio" name="drinkSize" value="Small" <?= drinkSizeSelected("Small"); ?>>
            Small
         </label>

         <label class="radio-label">
            <input type="radio" name="drinkSize" value="Medium" <?= drinkSizeSelected("Medium"); ?>>
            Medium
         </label>

         <label class="radio-label">
            <input type="radio" name="drinkSize" value="Large" <?= drinkSizeSelected("Large"); ?>>
            Large
         </label>
      </fieldset>

      <div class="button-row">
         <button type="submit" class="btn btn-primary">Place Order</button>
         <a href="forget_order.php" class="btn btn-secondary">Forget Order</a>
      </div>

   </form>

   <section class="insight-card">
      <h3>Live guidance</h3>
      <p><?= htmlspecialchars(completionMessage()); ?></p>
      <p class="insight-note"><?= htmlspecialchars(pairingSuggestion()); ?></p>
   </section>

   <section class="insight-card pricing-grid">
      <div>
         <h3>Estimated total</h3>
         <p class="price-figure"><?= htmlspecialchars(formattedTotal()); ?></p>
      </div>
      <div>
         <h3>Order profile</h3>
         <p><?= htmlspecialchars(orderProfile()); ?></p>
      </div>
      <p class="insight-note full-width-note"><?= htmlspecialchars(pricingNote()); ?></p>
   </section>

   <p class="page-link"><a href="about.php">How This Works</a></p>

</main>

<footer class="page-footer">
   <p>Homework 03 &mdash; Session-Based Bistro Order</p>
</footer>

</body>
</html>
