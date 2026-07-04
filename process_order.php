<?php
require "./order_functions.php";
$orderSummary = order();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Bistro Receipt</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="page-header">
   <h1>Your Order Receipt</h1>
   <p>Here is a summary of what was saved to your session.</p>
</header>

<main class="page-main">

   <section class="receipt-card">
      <?= $orderSummary; ?>
   </section>

   <section class="insight-card">
      <h3>Order feedback</h3>
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

   <div class="button-row">
      <a href="index.php" class="btn btn-primary">Order Again</a>
      <a href="forget_order.php" class="btn btn-secondary">Forget Order</a>
   </div>

</main>

<footer class="page-footer">
   <p>Homework 03 &mdash; Session-Based Bistro Order</p>
</footer>

</body>
</html>
