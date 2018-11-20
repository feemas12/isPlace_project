<?php

require_once dirname(__FILE__).'/omise-php/lib/Omise.php';
define('OMISE_API_VERSION', '2015-11-17');
// define('OMISE_PUBLIC_KEY', 'PUBLIC_KEY');
// define('OMISE_SECRET_KEY', 'SECRET_KEY');
define('OMISE_PUBLIC_KEY', 'pkey_test_5d2yde5osn62ajunagz');
define('OMISE_SECRET_KEY', 'skey_test_5du9q2hl6elp6ekcpi3');

$charge = OmiseCharge::create(array(
  'amount' => 10025,
  'currency' => 'thb',
  'card' => $_POST["omiseToken"]
));

if ($charge['status'] == 'successful') {
  echo 'Success';
  header('Location: paypass.html');
} else {
  echo 'Fail';
  header('Location: payerror.html');
}

// print('<pre>');
// print_r($charge);
// print('</pre>');
?>