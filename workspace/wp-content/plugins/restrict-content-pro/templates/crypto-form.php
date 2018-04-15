<?php
/**
 * Coin Form
 *
 * This template is for displaying coinpayement form details. It's shown on the registration
 * form when selecting a gateway that supports taking credit/debit card details directly.
 *
 *
 * @package     Restrict Content Pro
 */
//  would like to run with [coin-form]
?>

<?php
    
require '../gateways/coinPayments/class-rcp-payment-gateway-coinpayements.php';
// test httpauth and hmac then publish to github bb
// You need to set a callback URL if you want the IPN to work
$callbackUrl = 'https://www.coinpayments.net/index.php?ref=cff068f6fa1565458ad27d7a1e4a80b6';
// Create an instance of the class
$CP = new \MineSQL\coinPayments();
// Set the merchant ID and secret key (can be found in account settings on CoinPayments.net)
$CP->setMerchantId('cff068f6fa1565458ad27d7a1e4a80b6');
$CP->setSecretKey('fc5A91c83C4aFD4d5b69dc179ff9cA244cA6Eb47BC1771bF3D209C4d2a40a648');
// Create a payment button with item name, currency, cost, custom variable, and the callback URL
$form = $CP->createPayment('Test Product', 'btc', 0.00005, '123', $callbackUrl);

?>

<fieldset class="rcp_crypto_fieldset">
    
    
    
    
    <form action="https://www.coinpayments.net/index.php" method="post">
    	<input type="hidden" name="cmd" value="_pay_simple">
    	<input type="hidden" name="reset" value="1">
    	<input type="hidden" name="merchant" value="cff068f6fa1565458ad27d7a1e4a80b6">
    	<input type="hidden" name="item_name" value="jsw button">
    	<input type="hidden" name="item_desc" value="jsw button">
    	<input type="hidden" name="currency" value="USD">
    	<input type="hidden" name="amountf" value="99.00000000">
    	<input type="hidden" name="want_shipping" value="0">
    	<input type="image" src="https://www.coinpayments.net/images/pub/buynow-med-grey.png" alt="Buy Now with CoinPayments.net">
    </form>
    
    


	
</fieldset>