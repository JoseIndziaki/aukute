<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 22:46:59
         compiled from "templates\tarjeta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154605253373a5aab42-40345417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4eaa09eb2fd762ae5ac157d205a418273007c7a' => 
    array (
      0 => 'templates\\tarjeta.tpl',
      1 => 1381186016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154605253373a5aab42-40345417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5253373a5cff28_94164480',
  'variables' => 
  array (
    'paytype' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253373a5cff28_94164480')) {function content_5253373a5cff28_94164480($_smarty_tpl) {?><script language="JavaScript">
	function generateCC(){
		var cc_number = new Array(16);
		var cc_len = 16;
		var start = 0;
		var rand_number = Math.random();

		switch(document.DoDirectPaymentForm.creditCardType.value)
        {
			case "Visa":
				cc_number[start++] = 4;
				break;
			case "Discover":
				cc_number[start++] = 6;
				cc_number[start++] = 0;
				cc_number[start++] = 1;
				cc_number[start++] = 1;
				break;
			case "MasterCard":
				cc_number[start++] = 5;
				cc_number[start++] = Math.floor(Math.random() * 5) + 1;
				break;
			case "Amex":
				cc_number[start++] = 3;
				cc_number[start++] = Math.round(Math.random()) ? 7 : 4 ;
				cc_len = 15;
				break;
        }

        for (var i = start; i < (cc_len - 1); i++) {
			cc_number[i] = Math.floor(Math.random() * 10);
        }

		var sum = 0;
		for (var j = 0; j < (cc_len - 1); j++) {
			var digit = cc_number[j];
			if ((j & 1) == (cc_len & 1)) digit *= 2;
			if (digit > 9) digit -= 9;
			sum += digit;
		}

		var check_digit = new Array(0, 9, 8, 7, 6, 5, 4, 3, 2, 1);
		cc_number[cc_len - 1] = check_digit[sum % 10];

		document.DoDirectPaymentForm.creditCardNumber.value = "";
		for (var k = 0; k < cc_len; k++) {
			document.DoDirectPaymentForm.creditCardNumber.value += cc_number[k];
		}
	}
</script>

<center>
  <b><font color="black" size="2" face="Verdana">Pago Con tajeta de Credito</font></b>
  <br>
<form method="POST" action="DoDirectPaymentReceipt.php" name="DoDirectPaymentForm">
<!--Payment type is <<?php ?>?=$paymentType?<?php ?>><br> -->
<input type=hidden name=paymentType value="<?php echo $_smarty_tpl->tpl_vars['paytype']->value;?>
" />
<table width=600>
	<tr>
		<td align=right>Nombre:</td>
		<td align=left><input type=text size=30 maxlength=32 name=firstName></td>
	</tr>
	<tr>
		<td align=right>Apellido:</td>
		<td align=left><input type=text size=30 maxlength=32 name=lastName></td>
	</tr>
	<tr>
		<td align=right>Tipo de Tarjeta:</td>
		<td align=left>
			<select name=creditCardType onChange="javascript:generateCC(); return false;">
				<option value=Visa selected>Visa</option>
				<option value=MasterCard>MasterCard</option>
				<option value=Discover>Discover</option>
				<option value=Amex>American Express</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right>Numero:</td>
		<td align=left><input type=text size=19 maxlength=19 name=creditCardNumber></td>
	</tr>
	<tr>
		<td align=right>Fecha de Vencimiento:</td>
		<td align=left><p>
			<select name=expDateMonth>
				<option value=1>01</option>
				<option value=2>02</option>
				<option value=3>03</option>
				<option value=4>04</option>
				<option value=5>05</option>
				<option value=6>06</option>
				<option value=7>07</option>
				<option value=8>08</option>
				<option value=9>09</option>
				<option value=10 selected="selected">10</option>
				<option value=11>11</option>
				<option value=12>12</option>
			</select>
			<select name=expDateYear>
				<option value=2013 selected="selected">2013</option>
				<option value=2014>2014</option>
				<option value=2015>2015</option>
				<option value=2016>2016</option>
				<option value=2017>2017</option>
				<option value=2018 >2018</option>
				<option value=2019 >2019</option>
				<option value=2020>2020</option>
				<option value=2021>2022</option>
				<option value=2024>2023</option>
				<option value=2025>2025</option>
			</select>
		</p></td>
	</tr>
	<tr>
		<td align=right>CVN:</td>
		<td align=left><input type=text size=3 maxlength=4 name=cvv2Number></td>
	</tr>
	<tr>
		<td align=right><br>
		<b>Direccion de Factura:</b></td>
	</tr>
	<tr>
		<td align=right>Direccion 1:</td>
		<td align=left><input type=text size=25 maxlength=100 name=address1></td>
	</tr>
	<tr>
		<td align=right>Direccion 2:</td>
		<td align=left><input type=text  size=25 maxlength=100 name=address2>
		(opcional)</td>
	</tr>
	<tr>
		<td align=right>Ciudad:</td>
		<td align=left><input type=text size=25 maxlength=40 name=city></td>
	</tr>
	<tr>
		<td align=right>Estado:</td>
		<td align=left>
			<select id=state name=state>
				<option value=></option>
				<option value=AK>AK</option>
				<option value=AL>AL</option>
				<option value=AR>AR</option>
				<option value=AZ>AZ</option>
				<option value=CA selected>CA</option>
				<option value=CO>CO</option>
				<option value=CT>CT</option>
				<option value=DC>DC</option>
				<option value=DE>DE</option>
				<option value=FL>FL</option>
				<option value=GA>GA</option>
				<option value=HI>HI</option>
				<option value=IA>IA</option>
				<option value=ID>ID</option>
				<option value=IL>IL</option>
				<option value=IN>IN</option>
				<option value=KS>KS</option>
				<option value=KY>KY</option>
				<option value=LA>LA</option>
				<option value=MA>MA</option>
				<option value=MD>MD</option>
				<option value=ME>ME</option>
				<option value=MI>MI</option>
				<option value=MN>MN</option>
				<option value=MO>MO</option>
				<option value=MS>MS</option>
				<option value=MT>MT</option>
				<option value=NC>NC</option>
				<option value=ND>ND</option>
				<option value=NE>NE</option>
				<option value=NH>NH</option>
				<option value=NJ>NJ</option>
				<option value=NM>NM</option>
				<option value=NV>NV</option>
				<option value=NY>NY</option>
				<option value=OH>OH</option>
				<option value=OK>OK</option>
				<option value=OR>OR</option>
				<option value=PA>PA</option>
				<option value=RI>RI</option>
				<option value=SC>SC</option>
				<option value=SD>SD</option>
				<option value=TN>TN</option>
				<option value=TX>TX</option>
				<option value=UT>UT</option>
				<option value=VA>VA</option>
				<option value=VT>VT</option>
				<option value=WA>WA</option>
				<option value=WI>WI</option>
				<option value=WV>WV</option>
				<option value=WY>WY</option>
				<option value=AA>AA</option>
				<option value=AE>AE</option>
				<option value=AP>AP</option>
				<option value=AS>AS</option>
				<option value=FM>FM</option>
				<option value=GU>GU</option>
				<option value=MH>MH</option>
				<option value=MP>MP</option>
				<option value=PR>PR</option>
				<option value=PW>PW</option>
				<option value=VI>VI</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right>Codigo Postal :</td>
		<td align=left><input type=text size=10 maxlength=10 name=zip></td>
	</tr>
	<tr>
		<td align=right></td>
		<td align=left> Moneda: 
		  <select name="currencyCodeType">
		    <option value="MXN">MXN</option>
		  </select></td>
        <td></td>
	</tr>
	<tr>
		<td align=right><br>
		Total:</td>
		<td align=left><br><input name="amount" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" type="text" size="7" maxlength="7" readonly>MXN</td>
	</tr>
	<tr>
		<td/>
		<td align=left>&nbsp;</td>
	</tr>
	<tr>
		<td/>
		<td><input type=Submit value=Enviar></td>
	</tr>
</table>
</form>
</center>
<script language="javascript">
	generateCC();
</script><?php }} ?>