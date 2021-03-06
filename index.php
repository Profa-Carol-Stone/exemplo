<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Formulário de Contato</title>
    <meta charset="utf-8">
  </head>
  <body>
    <!-- meu comentário -->
  	<header>
      <div id="barra_acessibilidade">
        <ul id="atalhos">
            <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
            <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
        </ul>   
      </div>     
  		<img src="images/logo.png" alt="Logotipo da empresa com dois triângulos sobrepostos.">
      <h1>Empresa XPTO</h1>
    </header>
    <section>
      <h2>Menu</h2>
      <nav id="menu">
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
      <article id="formulario"> 		
        <h2>Formulário de Contato</h2>     
      		<form action="#" method="post">
            <fieldset>
              <legend>Formulário de Contato</legend>
              <label for="nome">Nome:</label> 
              <input type="text" name="nome" id="nome"><br>
              <label for="email">E-mail:</label> 
              <input type="text" name="email" id="email"><br>
              <label for="mensagem">Mensagem:</label> 
              <textarea name="mensagem" id="mensagem">Digite aqui sua mensagem</textarea><br>     	
            </fieldset>
            <input type="submit" value="Enviar"> 
      		</form>
        </article>
  	</section>
  	<footer>
  		<p>Copyright © 2022</p>
  	</footer>
  </body>
 </html>
