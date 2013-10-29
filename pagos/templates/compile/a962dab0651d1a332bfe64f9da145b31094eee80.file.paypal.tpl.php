<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 21:46:58
         compiled from "templates\paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1298652530068394f64-38560716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a962dab0651d1a332bfe64f9da145b31094eee80' => 
    array (
      0 => 'templates\\paypal.tpl',
      1 => 1381182005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1298652530068394f64-38560716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525300683aa0f5_97318837',
  'variables' => 
  array (
    'paytype' => 0,
    'costo' => 0,
    'hab' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525300683aa0f5_97318837')) {function content_525300683aa0f5_97318837($_smarty_tpl) {?>    <center>
	<form action="ReviewOrder.php" method="POST">
	<input type=hidden name=paymentType value='<?php echo $_smarty_tpl->tpl_vars['paytype']->value;?>
' >



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
					<input name="L_AMT1" type="text" value="<?php echo $_smarty_tpl->tpl_vars['costo']->value;?>
" size="5" maxlength="32" readonly /> </td>

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
        	<input type="hidden" name="hab" value="<?php echo $_smarty_tpl->tpl_vars['hab']->value;?>
" />
			<input style="background:none !important; width:100px" type="image" name="submit" src="../images/vi-paypal-logo.png" />

		</td>
		<td colspan=6>
                <br />
                <br />
                Save time. Pay securely without sharing your financial information.
            </td>

	</tr>
    </table>
    </center><?php }} ?>