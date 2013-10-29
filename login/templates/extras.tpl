<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/style.css" />
</head>

<body>
	<div class="extras">
   	  <h2>SPA</h2>
      <form action="prueba_servicios.php" method="post" name="form1" id="form1">
          <p>
            <label>
              <input type="checkbox" name="spa0" value="1000" id="spa_0" />
              Jacuzzi - $1000</label>
            <br />
            <label>
              <input type="checkbox" name="spa1" value="800" id="spa_1" />
              Facial</label>
            - $800<br />
            <label>
              <input type="checkbox" name="spa2" value="500" id="spa_2" />
              Masaje - $500</label>
              <img src="../images/spa.jpg" width="200" />
            <br />
          </p>
        <h2>Farmacia</h2>
        <p>
            <label>
              <input type="checkbox" name="farmacia0" value="100" id="farmacia_0" />
              Medicina a Cuarto - $100</label>
            <br />
            <label>
              <input type="checkbox" name="farmacia1" value="500" id="farmacia_1" />
              Doctor - $500</label>
              <img src="../images/doctor.jpg" width="200" />
          <br />
        </p>
        <h2>Restaurant</h2>
        <p>
          <label>
            <input type="checkbox" name="restaurant0" value="100" id="restaurant_0" />
            Servicio a Cuarto - $100</label>
          <br />
          <label>
            <input type="checkbox" name="restaurant1" value="2000" id="restaurant_1" />
            Cena Romantica - $2000</label>
              <img src="../images/rest.jpg" width="200" />
        </p>
        <h2>Tintoreria</h2>
        <p>
          <label>
            <input type="checkbox" name="tintoreria0" value="150" id="tintoreria_0" />
            Lavado - $150</label>
          <br />
          <label>
            <input type="checkbox" name="tintoreria1" value="150" id="tintoreria_1" />
            Planchado - $150</label>
          <br />
          <label>
            <input type="checkbox" name="tintoreria2" value="300" id="tintoreria_2" />
            Compostura - $300</label>
              <img src="../images/laundry.jpg" width="200" />
          <br />
        </p>
        
        <p>
          <input type="submit" name="button" id="button" value="Confirmar" />
          <br />
        </p>
      </form>
    </div>
</body>
</html>