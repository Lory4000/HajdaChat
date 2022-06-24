<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Registrati subito, è gratis!</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="es. Mario" required>
          </div>
          <div class="field input">
            <label>Cognome</label>
            <input type="text" name="lname" placeholder="es. Rossi" required>
          </div>
        </div>
        <div class="field input">
          <label>Indirizzo email</label>
          <input type="text" name="email" placeholder="es. mario.rossi@gmail.com" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Inserisci una password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <link href="https://cdnjs.cloudflare.com/ajax/libs/ratchet/2.0.2/css/ratchet.css" rel="stylesheet"/>
          <label for="image" class="btn btn-dark btn-block btn-outlined">Selezionare un'immagine profilo</label>
          <input type="file" id="image" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" style="display: none;" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registrati">
        </div>
      </form>
      <div class="link">Ti sei già registrato? <a href="login.php">Accedi al tuo account</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
