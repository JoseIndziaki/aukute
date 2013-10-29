    <center>
	<form action="ReviewOrder.php" method="POST">
	<input type=hidden name=paymentType value='{$paytype}' >



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
					<td class="field">Su compra es de:</td>
					<td>
						<input name="L_NAME1" type="text" value="Viaje" size="30" maxlength="32" readonly /></td>


				<td class="field"> Amount:  </td>
				<td>
					<input name="L_AMT1" type="text" value="{$costo}" size="5" maxlength="32" readonly /> </td>

					 <td class="field"></td>
				<td>
				  <input style="display:none" name="L_QTY1" type="text" value="1" size="3" maxlength="32" readonly /> </td>

		  </tr>
			 
			<tr>
			 <td class="field">Moneda: <br /> </td>
				<td>
			 <select name="currencyCodeType">
             		<option value="MXN">MXN</option>
				  </select>     </td>
	    </tr>
	    
		<td>
        	<input type="hidden" name="hab" value="{$hab}" />
            <input type="hidden" name="precio" id="precio" value="{$costo}" />
            <input type="hidden" name="dias" id="dias" value="{$dias}" />
            <input type="hidden" name="idhab" id="idhab" value="{$hab}" />
            <input type="hidden" name="desde" id="desde" value="{$desde}" />
            <input type="hidden" name="hasta" id="hasta" value="{$hasta}" />
            <input type="hidden" name="nombrecomp" id="nombcomp" value="{$nombcomp}" />
            <input type="hidden" name="correo" id="correo" value="{$email}" />
            <input type="hidden" name="tipo" id="tipo" value="{$tipo}" />
            <input type="hidden" name="tels" id="tels" value="{$telefonos}" />
			<input style="background:none !important; width:100px" type="image" name="submit" src="../images/vi-paypal-logo.png" />

		</td>
		<td colspan=6>
                <br />
                <br />
                Save time. Pay securely without sharing your financial information.
            </td>

	</tr>
    </table>
    </center>