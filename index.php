<?php 
include_once "./components/header.php"
?>
    <main>
      <div class="ryle-container">
        <h2>Entrar</h2>
        <p>
          Não tem cadastro?
          <a href="./cadastro.php" style="color: red; text-decoration:none;">cadastre-se agora mesmo</a>          
        </p>
        <form action="./login/login.php" method="post">
          <input type="text" required name="user" class="ryle-input" id="ryle-input-id-1" placeholder="Usuario">
          <input type="password" required name="password" placeholder="Senha" class="ryle-input" id="ryle-input-id-2">
          <b>Esqueceu sua senha?<a href="recuperarSenha.html" style="color: red;"> clique aqui</a></b>
          <button type="submit" value="Entrar" name="login" class="ryle-input-submit" id="ryle-input-id-3">Entrar</button>
        </form>
      </div>
    </main>
  </body>
</html>
