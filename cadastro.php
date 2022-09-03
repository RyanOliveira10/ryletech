<?php
include_once "./components/header.php"
?>
<main>
  <div class="ryle-container">
    <h2>Cadastre-se</h2>
    <p>
      Já tem cadastro?
      <a href="./index.php" style="color: red; text-decoration:none;">faça login agora mesmo</a>
    </p>
    <form action="./login/login.php" method="post">
      <input type="text" required name="user" class="ryle-input" id="ryle-input-id-4" placeholder="Usuario">
      <input type="password" required name="password" placeholder="Senha" class="ryle-input" id="ryle-input-id-5">
      <input type="email" required name="email" class="ryle-input" id="ryle-input-id-6" placeholder="Email">
      <input type="fone" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" name="phone" placeholder="Telefone/Celular" class="ryle-input" id="ryle-input-id-7">
      <button type="submit" value="Entrar" name="login" class="ryle-input-submit" id="ryle-input-id-8">Cadastrar</button>
    </form>
  </div>
</main>
</body>

</html>