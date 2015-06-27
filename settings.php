<?php

$debug = 0;  // to enable debug mode. debug mode will dump IPN data and transaction
             // results on the thank you page. It will also create a submit button
             // instead of auto-redirect for Paypal Buy Button.

$paypal_sandbox = 0;  // 1 for test more, 0 for production mode
$expire_in_hours = 72;  // how many hours before download expires, in hours
$paypal_email_address = 'vendor@vendor.com';  // your paypal email address
$support_email_address = 'vendor@vendor.com';   // your email address for support
$support_email_name = 'TEST';   // name to appear in the From when email is sent

$get_shipping_address = 0;   // whether to get or not shipping address
                             // 1 - Yes, MUST enter shipping address
                             // 0 - No, shipping address field removed
                             // 2 - Optional, shipping address is optional

//$product_name = 'Sample Product';   // Product name, will appear in Paypal
$product_code = ''; 
$product_price = '';   
$price_currency = 'EUR';    // currency, Paypal only supports
                            // AUD CAD EUR GBP JPY USD NZD CHF HKD
                            // SGD SEK DKK PLN NOK HUF CZK ILS MXN

$product_files = array(); // do not change

/////////////////////////////////////////
// MODIFICARE I PRODOTTI DA QUI IN POI //
/////////////////////////////////////////

$product_files[] = array( // DEFINE YOUR PRODUCT [0]
  'name'      => 'Sample Audio MP3', 
  'code'      => 'SPL101', 
  'price'     => '19.95', 
  'curr'      => 'EUR', 
  'filename'  => 'audio-lesson.mp3', 
  'source'    => 'sample.mp3'       
);

$product_files[] = array( // DEFINE ANOTHER PRODUCT [1]
  'name'      => 'Sample2 PDF eBook',
  'code'      => 'SPL222', 
  'price'     => '22.00',
  'curr'      => 'EUR', //
  'filename'  => 'workbook.pdf',
  'source'    => 'sample.pdf'
);

////////////////////////////
// FINE MODIFICA PRODOTTI //
////////////////////////////

$email_subject = 'Your Purchase: {PRODUCT NAME} ({PRODUCT CODE})'; // subject line for your email

// email body. you cannot have anything, even blank spaces after EOT

$email_body = <<<EOT
Dear {CUSTOMER NAME},

Thank you for purchasing {PRODUCT NAME}.

Below is the URL to your download page. You have
approximately {X} hours to download your purchase, in which
after that period the download page will be expired.

Download for {PRODUCT NAME} ({PRODUCT CODE})
{DOWNLOAD PAGE}

If the URL above is not clickable, just copy and paste the
URL into your browser.

Should you need any assistance, just reply to this email.


Your Name
Your Company

EOT;

// ALL DONE!!
?>