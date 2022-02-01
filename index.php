<?php
	include(dirname(__FILE__).'/conf.php');

	$firma = "$ApiKey~$merchantId~$referenceCode~$amount~$currency";
	$firmaMd5 = md5($firma);
  echo 'Firma MD5: ' . $firmaMd5;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario demo</title>
</head>
<body>

	<form method="post" action="<?php echo $url; ?>">
	<label for="merchantId" style="font-weight: bold;">merchantId: </label>  
  <input id="merchantId" name="merchantId"    	value="<?php echo $merchantId; ?>" ><br>
	  <label for="accountId" style="font-weight: bold;">accountId: </label>
    <input id="accountId" name="accountId"     	value="<?php echo $accountId; ?>" ><br>
	  <label for="description" style="font-weight: bold;">description: </label>
    <input id="description" name="description"   	value="<?php echo $description; ?>" ><br>
	  <label for="referenceCode" style="font-weight: bold;">referenceCode: </label>
    <input id="referenceCode" name="referenceCode" 	value="<?php echo $referenceCode; ?>" ><br>
	  <label for="amount" style="font-weight: bold;">amount: </label>
    <input id="amount" name="amount"        	value="<?php echo $amount; ?>" ><br>
	  <label for="tax" style="font-weight: bold;">tax: </label>
    <input id="tax" name="tax"           	value="<?php echo $tax; ?>" ><br>
	  <label for="taxReturnBase" style="font-weight: bold;">taxReturnBase: </label>
    <input id="taxReturnBase" name="taxReturnBase" 	value="<?php echo $taxReturnBase; ?>" ><br>
	  <label for="currency" style="font-weight: bold;">currency: </label>
    <input id="currency" name="currency"      	value="<?php echo $currency; ?>" ><br>
	  <label for="signature" style="font-weight: bold;">signature: </label>
    <input id="signature" name="signature"     	value="<?php echo $firmaMd5; ?>" ><br>
	  <label for="test" style="font-weight: bold;">test: </label>
    <input id="test" name="test" value="<?php echo $test; ?>" ><br>
	  <label for="buyerEmail" style="font-weight: bold;">buyerEmail: </label>
    <input id="buyerEmail" name="buyerEmail"    	value="<?php echo $buyerEmail; ?>" ><br>
	  <label for="responseUrl" style="font-weight: bold;">responseUrl: </label>
    <input id="responseUrl" name="responseUrl"    	value="<?php echo $responseUrl; ?>" ><br>
	  <label for="confirmationUrl" style="font-weight: bold;">confirmationUrl: </label>
    <input id="confirmationUrl" name="confirmationUrl" value="<?php echo $confirmationUrl; ?>" ><br>

	  <input name="Submit" type="submit" value="Enviar" >
	</form>

</body>
</html>