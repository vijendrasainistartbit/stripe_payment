<?php 
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemNumber = "PN12345"; 
$itemPrice = 25; 
$currency = "USD"; 
 
// Stripe API configuration  
define('STRIPE_API_KEY', 'sk_test_SGq10lBaOavGHzc7cbTIR5z9'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_c2z9zQhHw3cCdnRBP8vJDxkx'); 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'payments');
?>