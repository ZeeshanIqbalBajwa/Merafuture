<?php 

 
/* 
--------------------------------------------------------------------------------
| JAZZCASH Configuration 
--------------------------------------------------------------------------------
 */
 
define('JAZZCASH_MERCHANT_ID', 'MC17646');
define('JAZZCASH_PASSWORD', 'u2a404a5bv');
define('JAZZCASH_INTEGERITY_SALT', '0wuf0084dt');
define('JAZZCASH_CURRENCY_CODE', 'PKR');
define('JAZZCASH_LANGUAGE', 'EN');
define('JAZZCASH_API_VERSION_1', '1.1');
define('JAZZCASH_API_VERSION_2', '2.0');

define('JAZZCASH_RETURN_URL', 'localhost\merafuture\jazzcash-rest-api-main\checkout.php');
define('JAZZCASH_HTTP_POST_URL', 'https://sandbox.jazzcash.com.pk/ApplicationAPI/API/2.0/Purchase/DoMWalletTransaction');


/* 
--------------------------------------------------------------------------------
| Database Configuration 
--------------------------------------------------------------------------------
 */ 
 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'jazzcash_db');

/* 
--------------------------------------------------------------------------------
| Website Configuration 
--------------------------------------------------------------------------------
 */
 
//define('BASE_URL', 'http://localhost/jazzcash-rest-api/');
define('BASE_URL', 'http://localhost/jazzcash-rest-api/');

define('TITLE', 'Jazzcssh REST API');