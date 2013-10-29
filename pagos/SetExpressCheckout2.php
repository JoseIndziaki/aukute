<?php
/***********************************************************
SetExpressCheckout.php

This is the main web page for the Express Checkout sample.
The page allows the user to enter amount and currency type.
It also accept input variable paymentType which becomes the
value of the PAYMENTACTION parameter.

When the user clicks the Submit button, ReviewOrder.php is
called.

Called by index.html.

Calls ReviewOrder.php.

***********************************************************/
// clearing the session before starting new API Call
session_unset();

	$paymentType = 'sale'
?>


<html>
<head>
    <title>PayPal NVP SDK - Simplified Shopping Cart Page for a Spiritual Store</title>
    <link href="sdk.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <center>
	<form action="ReviewOrder.php" method="POST">
	<input type=hidden name=paymentType value='<?php echo $paymentType?>' >



    <table class="api">
        <tr>
			   <td colspan="2" class="header">
				   
			   </td>
        </tr>

        <tr>
           <td colspan="2">
                
            </td>
        </tr>
        </table>
		<table>
        <th>Compra</th>
        <tr>
					<td class="field">
						CDs:</td>
					<td>
						<input type="text" size="30" maxlength="32" name="L_NAME1" value="Path To Nirvana" /></td>


				<td class="field"> Amount:  </td>
				<td>
					<input type="text" name="L_AMT1" size="5" maxlength="32" value="39.00" /> </td>

					 <td class="field">
					Quantity:   </td>
				<td>
					 <input type="hiden" size="3" maxlength="32" name="L_QTY1" value="2" /> </td>

			</tr>
			 
			<tr>
			 <td class="field">
					Currency: <br /> </td>
				<td>
			 <select name="currencyCodeType">
					<option value="USD">USD</option>
					<option value="GBP">GBP</option>
					<option value="EUR">EUR</option>
					<option value="JPY">JPY</option>
					<option value="CAD">CAD</option>
					<option value="AUD">AUD</option>
					</select>     </td>
	    </tr>
	    
		<td>
			<input type="image" name="submit" src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" />

		</td>
		<td colspan=6>
                <br />
                <br />
                Save time. Pay securely without sharing your financial information.
            </td>

	</tr>
    </table>
    </center>
    <a class="home" id="CallsLink" href="index.html">Home</a>
</body>
</html>
