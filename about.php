<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>How It Works - Bistro Order</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="page-header">
   <h1>How This Project Works</h1>
   <p>An overview of the request flow and PHP session logic used in this assignment.</p>
</header>

<main class="page-main">

   <section class="insight-card">
      <h3>1. Order Form (index.php)</h3>
      <p>
         The form displays a dessert dropdown, a drink dropdown, and drink size
         radio buttons. Each control calls a helper function
         (<code>dessertSelected()</code>, <code>drinkSelected()</code>,
         <code>drinkSizeSelected()</code>) that checks the current session value
         and marks the matching option as <code>selected</code> or
         <code>checked</code>. This is what makes the form "remember" a previous
         order when the page reloads.
      </p>
   </section>

   <section class="insight-card">
      <h3>2. Processing the Order (process_order.php)</h3>
      <p>
         When the form is submitted, this page calls the <code>order()</code>
         function. That function reads the submitted POST values, applies the
         <code>(not selected)</code> fallback to any missing field, stores the
         final values in <code>$_SESSION</code>, and returns a formatted receipt
         string that is printed on the page.
      </p>
   </section>

   <section class="insight-card">
      <h3>3. Session Storage (order_functions.php)</h3>
      <p>
         This file starts the session and holds all of the shared logic:
         saving values, reading them back with <code>sessionValue()</code>,
         and generating the extra guidance, pairing suggestion, and price
         estimate features. Keeping this logic in one file avoids repeating
         code on both the form page and the receipt page.
      </p>
   </section>

   <section class="insight-card">
      <h3>4. Resetting the Order (forget_order.php)</h3>
      <p>
         Clicking "Forget Order" clears the session array, calls
         <code>session_unset()</code> and <code>session_destroy()</code>, and
         redirects back to the form. Because the session data is gone, every
         helper function falls back to <code>(not selected)</code>, and the
         form displays its default state again.
      </p>
   </section>

   <p class="page-link"><a href="index.php">Back to Order Form</a></p>

</main>

<footer class="page-footer">
   <p>Homework 03 &mdash; Session-Based Bistro Order</p>
</footer>

</body>
</html>
