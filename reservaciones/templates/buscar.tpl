<head>
<link type="text/css" rel="stylesheet" href="../css/style.css" />
<script>
function fechas(){
var desde = document.getElementById('to').value;
var hasta = document.getElementById('from').value;
	if(desde > hasta){
		alert("La salida tiene que ser mínimo el mismo día que el de llegada");
		return false;
	}
}
</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker("option", "dateFormat", "yy/mm/dd" );
        $( "#to" ).datepicker( "option", "minDate", "+0d"  );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker("option", "dateFormat", "yy/mm/dd" );
        $( "#from" ).datepicker( "option", "minDate", "+1d" );
      }
    });
  });
  </script>
</head>
<body>
<h3>Busca una habitación</h3>
<form name="form1" method="post" onSubmit="return fechas()" action="buscador.php" target="_parent">
<table>
	<tr>
  	<td>Desde:</td>
    <td><input type="text" name="desde" min="{$fecha}" id="to"></td>
  
  	</tr>
    <tr>
  <td>Hasta:</td>
  <td><input type="text" name="hasta" min="{$fecha}" id="from"></td>
  </tr>
  <tr>
  <td>Recámaras:</td>
    <td><select name="habitaciones" id="habitaciones">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select></td>
    </tr>
   <tr>
  <td>Adultos:</td>
    <td><select name="adultos" id="adultos">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select></td>
    </tr><tr>
  <td>Niños:</td>
    <td><select name="ninos" id="ninos">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="buscar" id="buscar" value="Buscar"></td>
  	</tr>
</table>
</form>
</body>
