<!DOCTYPE html>
<html lang="en">
<head>
  <?php  require_once('compositor/head.php'); ?>
</head>
<body class="body">
  <?php  require_once('compositor/navbar.php'); ?>
  <div class="div0">
    <p>
      WonderWeb
    </p>
  </div>
  <div class="div1">
    <hr class="hr1"><br>
    La búsqueda del hotel para familias ideal en Freshwater no tiene por qué ser complicada. Bienvenido a Albion Hotel, una fantástica opción para viajeros como tú.<br>
    Las habitaciones de los huéspedes ofrecen servicios como televisor de pantalla plana, y los huéspedes pueden permanecer conectados con internet gratuito que ofrece el hotel.
    <br><br>
    <img src="images/albion.jpg">

    <br><br>
  </div>
  <div class="div3">
    <hr class="hr1"><br>
    <form>
      <input type="text" id="name" name="name" placeholder="Nombre"><br><br>
      <input type="text" id="age" name="age" placeholder="Edad"><br><br>
      <input type="text" id="direccion" name="direccion" placeholder="Dirección"><br><br>
      <input type="text" id="dni" name="dni" placeholder="DNI"><br><br>
      <input type="text" id="email" name="email" placeholder="E-mail"><br><br>
      <input type="text" id="tlf" name="tlf" placeholder="Teléfono"><br><br>
      <input type="radio" id="visa" name="visa" value="visa">
      <label for="male">Visa</label>
      <img src="images/visa.png" class="visa">
      <input type="radio" id="cash" name="cash" value="cash">
      <label for="female">Metálico</label>
      <img src="images/cash.png" class="visa"><br>
      <label for="room">Elija una habitación:</label>
        <select id="cars" name="cars">
          <option value="single">Single: 50€</option>
          <option value="double">Double: 80€</option>
          <option value="familiar">Familiar: 100€</option>
          <option value="delux">Delux: 150€</option>
        </select>
        <br>
      <input type="submit" value="Submit"><br><br><br><br><br><br>
    </form>
  </div>
</body>
</html>
