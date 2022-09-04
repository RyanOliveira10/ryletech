<?php 
include_once "./components/header.php"
?>
<link rel="stylesheet" href="../style.css">
    <main>
      <div class="ryle-container">
        <h2>Digite o seu endereço de email</h2>
        <form action="./login/resetPassword.php" method="post">
          <input type="email" required name="email" class="ryle-input" id="ryle-input-id-9" placeholder="Email">
          <button type="submit" value="Recuperar" name="recuperarSenha" class="ryle-input-submit" id="ryle-input-id-3">Recuperar</button>
        </form>
      </div>
    </main>
  </body>
</html>