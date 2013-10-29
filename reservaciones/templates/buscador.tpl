<h1>Habitaciones Disponibles</h1>
{section name=cuartos loop=$cuarto}
  <h3 class="habid">Habitación número {$cuarto[cuartos].id}</h3>
  <div class="habitacion">
    <div class="hab-datos">
      <div class="img-hab"><img src="../images/recamara.jpeg" width="200" /></div>
      <h4>Número de recámaras: {$cuarto[cuartos].camas}</h4><br />
      <p>Servicios: {$cuarto[cuartos].servicios}</p>
      <p>Máximo Adultos: {$cuarto[cuartos].adultos}</p>
      <p>Máximo Niños: {$cuarto[cuartos].ninos}</p>
    </div>
    <div class="hab-precios">
      <h2>${$cuarto[cuartos].precio}.00</h2>
      <a href="reservar.php?id={$cuarto[cuartos].id}&dias={$dias}">Reservar</a></div>
  </div>
{/section} 
  <p>&nbsp;</p>
